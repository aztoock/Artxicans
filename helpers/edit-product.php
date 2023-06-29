<?php 

include('../global/conexion.php');
session_start();
if(@!$_SESSION['roll']){
    echo("<script>location.href = '../index.php';</script>");
  }
        # Obtenemos todos los datos que mandamos por el formulario 
        $id_product = $_GET['id_product'];
        $producto = $_POST['producto'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $categoria = $_POST['categoria'];
    
        # Editamos los atributos de la tabla con lo que obtuvimos en el formulario
        mysqli_query($conn,"UPDATE products SET
            product = '$producto',
            price = '$precio',
            description = '$descripcion',
            category = '$categoria',
            stock = '$cantidad' 
            WHERE id_product = $id_product");

        # Las imagenes se hacen por separado, ya que son de tipo fyle.
        # Si no ingresamos una imagen en el input 1 image, no hacemos algo y esto evitara eliminar la imagen
        # Si esta vacio, dejarlo asi
        if(empty($_FILES['imagen1']['name'])){
           
        }else{ # Si se ingreso una imagen entonces hacer el UPDATE
            $imagen1 = $_FILES['imagen1']['name'];
            $sql = "UPDATE products SET
            image1 = '$imagen1' WHERE id_product = $id_product";
       
            move_uploaded_file($_FILES['imagen1']['tmp_name'], "../assets/products/".$imagen1."");
            mysqli_query($conn, $sql);
        }

        # Lo mismo sucede con image2
        if(empty($_FILES['imagen2']['name'])){
                
        }else{
            $imagen2 = $_FILES['imagen2']['name'];
            $sql2 = "UPDATE products SET
            image2 = '$imagen2' WHERE id_product = $id_product";
       
            move_uploaded_file($_FILES['imagen2']['tmp_name'], "../assets/products/".$imagen2."");
            mysqli_query($conn, $sql2);
        }
        # Y tambien image 3
        if(empty($_FILES['imagen3']['name'])){
           
        }else{
            $imagen3 = $_FILES['imagen3']['name'];
            $sql3 = "UPDATE products SET
            image3 = '$imagen3' WHERE id_product = $id_product";
            
            move_uploaded_file($_FILES['imagen3']['tmp_name'], "../assets/products/".$imagen3."");
            mysqli_query($conn, $sql3);
        }  
         echo("<script>location.href = '../productList.php';</script>"); 
    
     
?>
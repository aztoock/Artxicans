<?php
    if(isset($_POST['send-reg']))
        {
                # obtenemos los valores del formulario con POST
            $idusuario =  $_SESSION['id'];
            $producto = $_POST['producto'];
            $descripcion = $_POST['descripcion'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
                    # Se obtienen la info de las imagenes
            $direccion = "./assets/products/";
            $image1 = "";
            $image2 = "";
            $image3 = "";

                # Se obtienen la info de la imagen 1
            $file_name1 = $_FILES['imagen1']['name'];      #
            $file_tmp1 = $_FILES['imagen1']['tmp_name'];   # Variables para obtener los datos del archivo a subir
            $name_imagen1 = $producto."1.jpg";
            $ruta1 = $direccion.$name_imagen1;                # Variable para establecer la ruta del archivo
            $image1 = $name_imagen1;

                # Se obtienen la info de la imagen 2
            $file_name2 = $_FILES['imagen2']['name'];      #
            $file_tmp2 = $_FILES['imagen2']['tmp_name'];   # Variables para obtener los datos del archivo a subir
            $name_imagen2 = $producto."2.jpg";
            $ruta2 = $direccion.$name_imagen2;
            $image2 = $name_imagen2;
                # Se obtienen la info de la imagen 3
            $file_name3 = $_FILES['imagen3']['name'];      #
            $file_tmp3 = $_FILES['imagen3']['tmp_name'];   # Variables para obtener los datos del archivo a subir
            $name_imagen3 = $producto."3.jpg";
            $ruta3 = $direccion.$name_imagen3;
            $image3 = $name_imagen3;  
?>
            <div class="alert alert-danger"><?php echo $idusuario." _ ".$producto." _ ".$descripcion." _ ".$categoria." _ ".$precio." _ ".$cantidad." _ ".$image1." _ ".$image2." _ ".$image3 ?></div>
<?php

            if (!empty($_POST['producto']) && !empty($_POST['descripcion'])  && !empty($_POST['categoria']) && !empty($_POST['precio']) && !empty($_POST['cantidad']) && !empty($_POST['imagen1']) )
                {
                    if (move_uploaded_file($file_tmp1,$ruta1))
                        {
                            
                            if (move_uploaded_file($file_tmp2,$ruta2))
                                {
                                    
                                    if (move_uploaded_file($file_tmp3,$ruta3))
                                        {
                                            
?>
                                            <div class="alert alert-danger">*Imagenes insertadas.</div>
<?php
                                        }
                                }
                        }
                }
            else
                {
?>
                    <div class="alert alert-danger">*Campos vacios</div>
<?php
                }
        }
?>
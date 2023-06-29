<?php 
    include('../global/conexion.php');
    session_start();
    if(isset($_GET['id_com'])){
        # Obtenemos el id del comentario a eliminar
        $comment = $_GET['id_com'];
        # Hacemos una consulta con la union de la tabla products y stars para poder identificar cual comentario se eliminara
        $query = mysqli_query($conn,"SELECT * FROM products INNER JOIN stars ON products.id_product = stars.id_product ");
        $data = mysqli_fetch_array($query);
        $res = $data['id_product']; 
        # Eliminamos el comentario que sea igual al comentario que estamos obteniendo con el GET
        mysqli_query($conn,"DELETE FROM stars WHERE id_star = $comment");
        # Hacemos una consulta para obtener el id del producto donde estabamos para que regresemos a la pagina con el mismo ID del producto.
        $query2 = mysqli_query($conn,"SELECT * FROM products WHERE id_product = $res");
        $data2= mysqli_fetch_array($query2);
        $res2 = $data2['id_product'];
        echo("<script>location.href = '../product.php?id_product=".$res2."';</script>");  
    }else{
        echo("<script>location.href = '../index.php';</script>");  
    }  
?>
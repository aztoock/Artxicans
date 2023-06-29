<?php

include('./global/conexion.php');
$data = mysqli_query($conn,"SELECT * FROM products WHERE id_product <> '".$_POST['id_product']."' ORDER BY rand() LIMIT 2") or die ($conn->error);
/* print_r($data); */

   
$output= "";
?>

<?php 
   while($row = mysqli_fetch_assoc($data)){
        $output .= '
        <div class="single-product">
            <a href="product.php?id_product='.$row['id_product'].'" class="referencia">
             <div class="imgDiv">
                <img src="assets/products/'.$row['image1'].'"  alt="'.$row['product'].'">
            </div>
            <div class="card-info">
                <span class="product-title">'.$row['product'].'</span>
                <span class="price">$'.$row['price'].'</span>
                <span class="shipping">Más envio de importación</span>
                
            </div>
           </a>
           </div>
       
        '; 
        
          $id_product = $row['id_product'];
        }
        ?>
    
    

<?php
        $output .= '
        <div id="id-load" class="load-more">
        <button id="load-more" data-id="'.$id_product.'">Ver más</button>
    </div>
        ';  

        echo $output;
        
?>


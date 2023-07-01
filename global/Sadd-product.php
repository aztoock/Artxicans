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
                # Se obtienen la direccion para almacenar las imagenes
            $direccion = "./assets/products/";
                # Variables vacias para las imagenes
            $image1 = "";
            $image2 = "";
            $image3 = "";
                # variable de mensaje vacia
            $men = "";

                # Se obtienen la info de la imagen 1
            $file_name1 = $_FILES['imagen1']['name'];      #
            if (empty($file_name1)) # si el imput del formulario esta vacio
                {
                        # la variable de la imagen 1 se queda en NULL (vacia)
                    $image1 = NULL;
                }
            else    # si el input no esta vacio
                {
                        # Variables para obtener los datos del archivo a subir
                    $file_tmp1 = $_FILES['imagen1']['tmp_name'];
                        # Se asigna el nombre al archivo concatenando nombredel producto-numero de imagen-.jpeg   
                    $name_imagen1 = $producto."1.jpg";
                        # Variable para establecer la ruta del archivo
                    $ruta1 = $direccion.$name_imagen1;   
                        # se asigna el nombre de la imagen en variable image1             
                    $image1 = $name_imagen1;
                }

                # Se obtienen la info de la imagen 2
            $file_name2 = $_FILES['imagen2']['name'];      #
            if (empty($file_name2))
                {
                    $image2 = NULL;
                }
            else
                {
                    $file_tmp2 = $_FILES['imagen2']['tmp_name'];   # Variables para obtener los datos del archivo a subir
                    $name_imagen2 = $producto."2.jpg";
                    $ruta2 = $direccion.$name_imagen2;
                    $image2 = $name_imagen2;
                }
            
                # Se obtienen la info de la imagen 3
            $file_name3 = $_FILES['imagen3']['name'];      #
            if (empty($file_name3))
                {
                    $image3 = NULL;
                }
            else
                {
                    $file_tmp3 = $_FILES['imagen3']['tmp_name'];   # Variables para obtener los datos del archivo a subir
                    $name_imagen3 = $producto."3.jpg";
                    $ruta3 = $direccion.$name_imagen3;
                    $image3 = $name_imagen3;  
                }
            
?>
            <!--<div class="alert alert-danger"><?php #echo $idusuario." _ ".$producto." _ ".$descripcion." _ ".$categoria." _ ".$precio." _ ".$cantidad." _ ".$image1." _ ".$image2." _ ".$image3 ?></div>-->
<?php
                # validacion de campos producto, categoria y precio, si estan vacios se salta al else
            if (!empty($_POST['producto']) && !empty($_POST['categoria']) && !empty($_POST['precio']))
                {
                        # validacion que el campo cantidad sea entero y no letra u otra cosa
                    if (filter_var($cantidad, FILTER_VALIDATE_INT) == false)
                        {
                            $men .= "*La cantidad debe ser numerica.";
                        }
                    else
                        {   
                                # si la variable de image1 es null
                            if ( $image1 != NULL )
                                {   
                                        # se almace la imagen en servidor
                                    move_uploaded_file($file_tmp1,$ruta1);
                                }
                            elseif ( $image2 != NULL )
                                {
                                    move_uploaded_file($file_tmp2,$ruta2);
                                }
                            elseif ( $image3 != NULL )
                                {
                                    move_uploaded_file($file_tmp3,$ruta3);
                                }

                            #echo $image1." _ ".$image2." _ ".$image3;

                            $sql = ("   INSERT INTO `products` (`id_product`, `product`, `image1`, `price`, `description`, `category`, `stock`, `image2`, `image3`, `ID_registro`) 
                                        VALUES (NULL, '$producto', '$image1', '$precio', '$descripcion', '$categoria', '$cantidad', '$image2', '$image3', '$idusuario');");
                            $result = mysqli_query($conn,$sql);
                            $men .= "Producto registrado con exito.";
                        }
                }
            else
                {
                    $men .= "*Campos vacios";
                }
            ?>
            <div class="alert alert-danger"><?php echo $men; ?></div>
            <?php
        }
?>
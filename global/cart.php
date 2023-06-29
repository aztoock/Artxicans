<?php
    $mensaje = "";
    if (isset($_SESSION['id'])) 
        {
            $userid = $_SESSION['id']; # variable para obtener el id de usuario con la ayuda de variable session
            $query = "SELECT registro.Correo, direcciones.direccion1 FROM registro
            LEFT JOIN direcciones ON registro.ID = direcciones.usuario_id
            WHERE registro.ID = '$userid'";  # Query para obtener el correo y la direccion haciendo uso de las llaves foraneas con el id
            $rquery = mysqli_query($conn, $query); 
            // Obtener el primer registro del resultado
            $fila = mysqli_fetch_assoc($rquery);
            // Obtener el valor del correo
            $correo = $fila['Correo'];          #
            $direccion = $fila['direccion1'];   # variables de obtencion de correo y direccion con los resultados que arroja la query
        }

    if(isset($_POST['button-cart']))
        {
            switch($_POST['button-cart'])
                {
                    case 'Agregar':

                        if (is_string(openssl_decrypt($_POST['image'],COD,KEY)))            # validacion de los datos del formulario del carrito imagen
                            {
                                $imagen = openssl_decrypt($_POST['image'],COD,KEY);
                                #$mensaje .= "imagen correcto".$imagen;
                            }
                        else
                            {
                                #$mensaje .= "imagen incorrecto".$idprod;
                                break;
                            }

                        if (is_numeric(openssl_decrypt($_POST['idproduct'],COD,KEY)))       # validacion de los datos del formulario del carrito id del producto
                            {
                                $idprod = openssl_decrypt($_POST['idproduct'],COD,KEY);
                                #$mensaje .= "id correcto".$idprod;
                            }
                        else
                            {
                                #$mensaje .= "id incorrecto".$idprod;
                                break;
                            }

                        if (is_string(openssl_decrypt($_POST['product'],COD,KEY)))          # validacion de los datos del formulario del carrito nombre del producto
                            {
                                $prod = openssl_decrypt($_POST['product'],COD,KEY);
                                #$mensaje .= "producto correcto".$prod;
                            }
                        else
                            {
                                #$mensaje .= "producto incorrecto".$prod;
                                break;
                            }

                        if (is_numeric(openssl_decrypt($_POST['precio'],COD,KEY)))          # validacion de los datos del formulario del carrito precio
                            {
                                $precio = openssl_decrypt($_POST['precio'],COD,KEY);
                                #$mensaje .= "precio correcto".$precio;
                            }
                        else
                            {
                                #$mensaje .= "precio incorrecto".$precio;
                                break;
                            }

                        if (is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY)))        # validacion de los datos del formulario del carrito cantidad
                            {
                                $cantidad = openssl_decrypt($_POST['cantidad'],COD,KEY);
                                #$mensaje .= "cantidad correcto".$cantidad;
                            }
                        else
                            {
                                #$mensaje .= "cantidad incorrecto".$iddec;
                                break;
                            }

                        if (!isset($_SESSION['cart']))          # si el carrito esta vacio
                            {
                                $product = array(               # array que almacena los datos del producto
                                    'image' => $imagen,
                                    'product' => $prod,
                                    'idproduct' => $idprod,
                                    'precio' => $precio,
                                    'cantidad' => $cantidad
                                );
                                $_SESSION['cart'][0] = $product;    # valida si la posicion del elemento a agregar es el 0 o incrementa
                                $mensaje = "Producto agregado al carrito";  
                                echo("<script>location.href = 'cart.php';</script>");
                            }
                        else
                            {
                                $idproductos = array_column($_SESSION['cart'],"idproduct"); # variable que almacena el id correspodiente al producto a almacenar
                                if (in_array($idprod,$idproductos))   # comparacion si el id a agregar ya existe en el array $product
                                    {
                                        $mensaje = "El producto ya existe en el carrito";
                                    }
                                else                                  # si el id no existe lo almacena con su respectivo indice
                                    {
                                        $numproduct = count($_SESSION['cart']);
                                        $product = array(
                                            'image' => $imagen,
                                            'product' => $prod,
                                            'idproduct' => $idprod,
                                            'precio' => $precio,
                                            'cantidad' => $cantidad
                                        );
                                        $_SESSION['cart'][$numproduct] = $product;
                                      /*   $mensaje = "Producto agregado al carrito"; */ 
                                        echo("<script>location.href = 'cart.php';</script>"); 
                                    }
                            }
                        //$mensaje = print_r($_SESSION,true);
                        
                    break;

                    case 'eliminar':
                        if (is_numeric(openssl_decrypt($_POST['idproduct'],COD,KEY)))
                            {
                                $idprod = openssl_decrypt($_POST['idproduct'],COD,KEY);
                                foreach ($_SESSION['cart'] as $indice => $product)
                                    {
                                        if ($product['idproduct'] == $idprod)
                                            {
                                                unset($_SESSION['cart'][$indice]);
                                                echo "<script> alert('elemento borrado'):</script>";
                                            }
                                    }
                            }
                        else
                            {
                                $mensaje .= "Ups...... ocurrio un error".$idprod;
                                break;
                            }
                    break;

                    case 'cuantos':
                        $idprod = $_POST['midprod'];                        # variable  que guarda el id posicion del carrito
                        $cuantos = $_POST['cantidad'];                      # variable que guarda la cantidad del producto del carrito
                        $_SESSION['cart'][$idprod]['cantidad'] =$cuantos;   # variable para almacenar la posicion de la cantidad modificada en el carrito
                    break;
                }
        }
?>
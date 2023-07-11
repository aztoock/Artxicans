<?php
    include 'cart.php';
    #print_r($_GET);

    $clienteid = "Acl4OG_8Bd-eShcqzpXKxWKk3yFcJ3Ah44uEnNS-8X6f1F4p3yTl6UZZBKhgeaAscQ7SUTFYufqp3IvV";
    $secret = "EAHY8UIx5x5QaL406Fhn89FL1JamAAz2YVIajEeqnIeFtrxvsq1ORIOf0c_KU0476_8XHTfL7n7dt3Fg";
    $Login = curl_init("https://api-m.sandbox.paypal.com/v1/oauth2/token"); #variable para realizar solicitud

    curl_setopt($Login,CURLOPT_RETURNTRANSFER,TRUE);    # variable para que la api devuelva la info que se solicita
    curl_setopt($Login,CURLOPT_USERPWD,$clienteid.":".$secret); # variable de sesion para la solicitud
    curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials"); # solicitamos todas las credenciales pos POST
    $pres = curl_exec($Login);  # variable para ejecutar todas las instrucciones ant.
    #print_r($pres); # se imprimen todos los datos

    $objson = json_decode($pres);   # variable que obtiene el archivo .json y lo decodifica 
    $Accestoken = $objson->access_token; # variable que se iguala al token de acceso
    #print_r($Accestoken);

    $venta = curl_init("https://api-m.sandbox.paypal.com/v1/payments/payment/".$_GET['paymentID']);
        # se envia el acceso y el access token
    curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json", "Authorization: Bearer ".$Accestoken));
    curl_setopt($venta,CURLOPT_RETURNTRANSFER,TRUE);    # variable para que la api devuelva la info que se solicita

        # se ejecuta la instruccion ant.
    $respuestaventa= curl_exec($venta);
        # se imprime la solicitud
    #print_r($respuestaventa);

    $objdatostransaccion = json_decode($respuestaventa);
        # variable de obtencion de datos
    $state = $objdatostransaccion->state;
    $email = $objdatostransaccion->payer->payer_info->email;
    $totalp = $objdatostransaccion->transactions[0]->amount->total;
    $currency = $objdatostransaccion->transactions[0]->amount->currency;
    $jeje = $objdatostransaccion->transactions[0]->custom;
    $custom = ltrim($jeje);
    #print_r($state."_".$email."_".$totalp."_".$currency."_".$custom);

    $clave = explode("#",$custom);
    $sid = $clave[0];
    $claveventa = openssl_decrypt($clave[1],COD,KEY);
    #print_r($claveventa);

    curl_close($venta);
    curl_close($Login);
    #echo $state;
    #print_r($claveventa."_".$totalp."_".$sid);
    if ($state == "approved")
        {

            $Mpaypal = "
            <div class='alert alert-success' role='alert'>
            <h3> Pago aprobado </h3>
            </div>
            ";
            # cambio de estado a aprobado
            $sentencia = "  UPDATE `ventas` 
                            SET `paypaldatos` = '$respuestaventa', `estatus` = 'aprobado'
                            WHERE `ventas`.`id_venta` = $claveventa;";
            $resultado = mysqli_query($conn, $sentencia);
            # validamos que los datos coincidan con los datos del .json
            $sentencia = " UPDATE `ventas` SET `estatus` = 'completo'
                            WHERE `clavetransaccion` = '$sid'
                            AND `total` = '$totalp'
                            AND `id_venta` = '$claveventa'";
            $resultado = mysqli_query($conn, $sentencia);
                #contar la cantidad de registros modificados
            $rowcount = mysqli_affected_rows($conn);
            unset($_SESSION['cart']);
            $_SESSION['cart'] = array();
        }
    else
        {
            $Mpaypal = "
            <div class='alert alert-danger' role='alert'>
            <h3> Hay un problema con el pago </h3>
            </div>
            ";
        }
    #echo $Mpaypal;
?>

<div class="jumbotron text-center">
    <h1 class="display-4">Estatus de pago</h1>
    <hr class="my-4">
    <p class="lead"><?php echo $Mpaypal?></p>
    <p>
        <?php
            if ($rowcount >= 1)
                {
                    $sentencia = "  SELECT * FROM detalleventa,products 
                                    WHERE detalleventa.id_producto=products.id_product 
                                    AND detalleventa.id_venta=$claveventa";
                    $resultado = mysqli_query($conn, $sentencia);
                    #$listaproductos = mysqli_fetch_assoc($resultado);
                    #print_r($listaproductos);
                    while($listaproductos = mysqli_fetch_assoc($resultado))
                        {
                            $imagen = $listaproductos['image1'];
                            $nombre = $listaproductos['product'];
                            $id_product = $listaproductos['id_product'];
                            $cantidad = $listaproductos['cantidad'];

                                # decrementamos el valor stock en tbl products
                            $sentencia = "  UPDATE `products` SET `stock` = stock - $cantidad
                                            WHERE `id_product` = '$id_product'
                                            AND `product` = '$nombre'";
                            $resultadoactualizado = mysqli_query($conn, $sentencia);
                           /*  if ($resultadoactualizado)
                                { */
        ?>

                                    <center class="cheque">
                                        <img src="./assets/utilities/cheque-de-pago.png" alt="cheque" style="width:120px; height:110px">
                                        <p class="mt-3">Puedes revisar tu lista de pedidos:</p>
                                        <button class="btn btn-info" onclick="location.href='./orders.php'">Ver pedidos</button>
                                    </center>
                                   <!--  <div class="col-2 text-center">
                                        <div class="card">
                                        <div class='imgDiv'>
                                            <img src="assets/products/<?php echo $imagen;?>"  alt="<?php echo $imagen?>">
                                        </div>
                                            <h3><?php echo $nombre;?></h3>
                                        </div>
                                    </div>
                                    <?php print_r($listaproductos);?> -->
        <?php
                                }
                        }
                        
             /*    } */
        ?>
    </p>
</div>
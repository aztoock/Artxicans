<?php
    include 'cart.php';
    $total = 0;
    $ids = session_id();
    foreach ($_SESSION['cart'] as $indice => $product)
        {
            $total = $total + ($product['precio'] * $product['cantidad']);
        }
    $sql = "INSERT INTO `ventas` (`id_venta`, `clavetransaccion`, `paypaldatos`, `fecha`, `correo`, `total`, `estatus`) 
            VALUES (NULL, '$ids', '', NOW(), '$correo', '$total', 'pendiente');";
    $result = mysqli_query($conn,$sql);
    $idventa = mysqli_insert_id($conn);
    #echo "<h3>".$total.$idventa."</h3>";

    foreach ($_SESSION['cart'] as $indice => $product)
        {
            $producto = $product['idproduct'];
            $punitario = $product['precio'];
            $cantidad = $product['cantidad'];
            $sql = "INSERT INTO `detalleventa` (`id`, `id_venta`, `id_producto`, `preciounitario`, `cantidad`) 
            VALUES (NULL, '$idventa', '$producto', '$punitario', '$cantidad');";
            $result = mysqli_query($conn,$sql);
        }
?>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<style>
    
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px) {
        #paypal-button-container {
            width: 100%;
        }
    }
    
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px) {
        #paypal-button-container {
            width: 250px;
            display: inline-block;
        }
    }
    
</style>

<div class="jumbotron text-center">
    <br><br>
    <h1 class="display-4">Paso final</h1>
    <hr class="my-4">
    <p class="lead">Estas en proceso para pagar con Paypal
        $<?php echo number_format($total,2); ?>
        <div id="paypal-button-container"></div>    
    </p>
    <p>Los detalles se enviaran a <?php echo $correo; ?></p>
</div>

<script>

    paypal.Button.render({
        
        // Set your environment

        env: 'sandbox', // sandbox | production

        // Specify the style of the button

        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },

        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create

        client: {
            sandbox:    'Acl4OG_8Bd-eShcqzpXKxWKk3yFcJ3Ah44uEnNS-8X6f1F4p3yTl6UZZBKhgeaAscQ7SUTFYufqp3IvV',
            production: 'AdOZPDj4yVhJ4BA-rr1IqGM5-wKNnD6G7QSkFXYYa0G-ufppd2rA5EfcCL8__FzbdRRCnPSlRRLKuNt7'
        },

        // Wait for the PayPal button to be clicked

        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '<?php echo $total;?>', currency: 'MXN' },
                            description:" Compra a Artxicans $<?php echo number_format($total,2); ?>",
                            custom:" <?php echo $ids;?>#<?php echo openssl_encrypt($idventa,COD,KEY); ?>" 
                                    // custom: identificamos la venta y la sesion que se ha utilizado para la misma
                        }
                    ]
                }
            });
        },

        // Wait for the payment to be authorized by the customer

        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                //window.alert('Payment Complete!');
                console.log(data);
                window.location = "verificar.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
            });
        }
    
    }, '#paypal-button-container');

</script>

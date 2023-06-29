<?php
    if (isset($_SESSION['id'])) 
        {
            $userid = $_SESSION['id'];                                      #
            $query = "SELECT direccion FROM registro WHERE ID = '$userid'";   #
            $rquery = mysqli_query($conn, $query);                          #   query para obtencion de correo y mostrar en carrito
            if ($rquery)
                {
                    // Obtener el resultado de la consulta
                    $fila = mysqli_fetch_assoc($rquery);
                    // Obtener el estado del usuario
                    $estado = $fila['direccion'];
                    // Verificar si el estado es 1
                    if ($estado == 1)
                        {
                            #print("no pide datos");
?>
                            <button class="go-buy" name="go-buy" type="submit" value="cdirecta" onclick="location.href='pagar.php'">Realizar compra</button>
<?php
                        }
                    else
                        {
                            #print("directo a meter datos");
?>
                            <button class="go-buy" name="go-buy" type="submit" value="cdireccion"onclick="location.href='datosdireccion.php'">Realizar compra</button>
<?php
                        }
                }
            else    
                {
                    echo print("no entra a la consulta");
                }
        }
?>
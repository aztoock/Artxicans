<?php
    if(isset($_POST['reg']))
        {
            $nombre = $_POST['name'];       #
            $correo = $_POST['email'];      #   Obtencin de datos
            $password = $_POST['pass'];     #
            $sql = (" SELECT * FROM registro WHERE Correo='$correo' ");
            $result = mysqli_query($conn,$sql);
            if (!$result->num_rows > 0)     #   Si el correo no existe se agregan los datos a la bd
                {
                    if (strlen($nombre)< 4)
                        {
                            echo '<div class = "succes" style="    width: 200px !important;
                            text-align: center !important;
                            background-color: #cc0000 !important;
                            margin: auto !important;
                            color: white !important;
                            border-radius: 10px !important;
                            ">*El nombre debe tener mas de 3 caracteres</div>';
                        }
                    else if (strlen($password) <= 4)
                        {
                            echo '<div class = "succes" style="    width: 200px !important;
                            text-align: center !important;
                            background-color: #cc0000 !important;
                            margin: auto !important;
                            color: white !important;
                            border-radius: 10px !important;
                            ">*La contraseña debe tener mas de 4 caracteres </div>';
                        }
                    else
                        {
                            $sql = (" INSERT INTO registro VALUES(NULL,'$nombre','$correo','$password','0','0')");
                            $result = mysqli_query($conn,$sql);
                            if ($result)
                                {
                                    echo("<script>location.href = 'login.php';</script>");
                                }
                        }
                }
            else        #   si el correo existe no ingresa los datos
                {
                    echo '<div class = "alerta" style="    width: 200px !important;
                    text-align: center !important;
                    background-color: #cc0000 !important;
                    margin: auto !important;
                    color: white !important;
                    border-radius: 10px !important;
                    ">Correo ya registrado</div>';
                }
        }
?>
<?php
    session_start();
    $mensaje = "";
    if (isset($_REQUEST['login']))
    {
        $email = $_REQUEST['email']??'';        # variables obtencion de email del input html
        $password = $_REQUEST['pass']??'';  # variables obtencion de password del input html
        $sql = "SELECT * FROM admins WHERE correo='".$email."' and contraseña='".$password."' "; # query para obtener la busqueda de los campos
        $result = mysqli_query($conn,$sql);   # se obtiene el resultado de la query

        if ($result->num_rows > 0 )  # se obtiene el valor de $result
            {
            $sql = "SELECT id_admin FROM admins WHERE correo = ?";
                $stmt = $conn->prepare($sql);
                    # "s" indica que se espera un parámetro tipo cadena (string)
                $stmt->bind_param("s", $email);
                $stmt->execute();
                    # Obtener el resultado de la consulta
                $result = $stmt->get_result();
                $admin = $result->fetch_assoc();
                if ($admin)
                    {
                        $id_admin = $admin['id_admin'];
                        $_SESSION['id_admin'] = $id_admin;
                            #se cierra la sentencia y la conexcion a la bd
                        $stmt->close();
                        $conn->close();
                        echo("<script>location.href = 'menu.php';</script>");
                        exit();
                    }
            }
        else
            {
                $mensaje = "Contraseña/Correo incorrecto";
            }
    }
?>

<div class="container">
        <header>
            <h1>
                <a href="#">
                    <img  class="logo" src="../assets/logo/imgimg.jpg" alt="Authentic Collection">
                </a>
            </h1>
        </header>
        <h1 class="text-center">Admin</h1>
        <div class="alert alert-danger" role="alert" > <?php echo $mensaje; ?></div>
        <form class="registration-form" method="post">
            <label>
                <span class="label-text">Correo:</span>
                <input type="text" name="email">
            </label>
            <label class="password">
                <span class="label-text">Contraseña:</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="pass">
            </label>
            <div class="text-center">
                <!-- <button class="submit" name="register">Iniciar</button> -->
                <button class="btn-go" role="button" name="login">Iniciar</button>
            </div>
        </form>
    </div>
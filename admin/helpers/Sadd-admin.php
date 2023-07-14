<?php
    if(isset($_POST['reg']))
    {
        $nombre = $_POST['name'];       #
        $correo = $_POST['email'];      #   Obtencin de datos
        $password = $_POST['pass'];     #
        $sql = (" SELECT * FROM admins WHERE correo='$correo' ");
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
                else if (strlen($password) <= 5)
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
                        $sql = ("   INSERT INTO admins (`id_admin`, `nombre`, `correo`, `contraseña`)
                                    VALUES (NULL, '$nombre', '$correo', '$password');");
                        $result = mysqli_query($conn,$sql);
                        if ($result)
                            {
                                echo("<script>location.href = 'admin.php';</script>");
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


<form class="form-admin" method="POST">
    <label for="nombre">Nombre</label>
    <div class="">
        <input type="text" name="name" id="name" class="input-admin"/>
    </div>

    <label for="correo">Correo</label>
    <div class="">
        <input type="email" name="email" id="email" class="input-admin"/>
    </div>

    <label for="password">Contraseña</label>
    <div class="">
        <input type="password" name="pass" id="pass" class="input-admin"/>
    </div>

	<div class="buttons-admin">
        <a class="btn-back" href='../admin.php'>Cancelar</a>
        <button class="btn-reg" type="submit" name="reg" >Registar</button>
    </div>
</form>
<?php
    include('global/conexion.php');
    include('templates/cabecera.php');
?>
 <div class="signup-form">
    
 <form action="" method="POST"  class="registro">
        <div class="form">
            <h1>Registro</h1>
            <br>
            <?php  
                include('global/registrar.php');
            ?>
            <div class="grupo">
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Nombre"
                    title="Name only accepts letters and blank spaces"
                    value="<?php if(isset($_POST['name'])){echo $_POST['name']; }?>"
                    required
                    />
                </div>
                <!-- pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" -->
            <div class="grupo">
                <input
                    type="email"
                    name="email"
                    id="email"
                    title="Wrong email"
                    placeholder="Ingresa tu correo"
                    value="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>"
                    required
            />
            </div>
            <div class="grupo">
                <input
                    type="password"
                    name="pass"
                    id="pass"
                    placeholder="Contraseña"
                    required
            />
            </div>

            <button type="submit" class="start" name="reg" id="reg">Registrar</button>
            <hr>
            <h5 class="have">¿Ya tienes una cuenta?</h5>
            <div class='go-login'>
                <a href="login.php" class="have init" >Iniciar sesión</a> 
            </div>
        </div>
    </form> 
    
</div>
<?php
  include('templates/pie.php');
?>


<?php
    include('global/conexion.php');
    include('templates/cabecera.php');
 
?>
 <div class="signup-form">
    
 <form action="" method="POST"  class="registro">
        <div class="form">
            <h1>Inicio sesión</h1>
    <?php 
           include('global/login.php');
           
    ?>
            
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

            <button type="submit" name="login" class="start">Iniciar</button>
            <hr>
            <h5 class="have">¿Eres nuevo en Artxicans?</h5>
            <div class='go-login'>
                <button class="button-15" role="button" onclick="location.href='signup.php'">Crear una cuenta</button>
            </div>
        </div>
    </form> 
    
</div>
<?php
  include('templates/pie.php');
?>


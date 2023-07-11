<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./index.css">
    <link rel="icon" type="image/png" href="../assets/logo/carta-a (4).png"/>
	
    <title>Artxicans</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>
                <a href="#">
                    <img  class="logo" src="../assets/logo/imgimg.jpg" alt="Authentic Collection">
                </a>
            </h1>
        </header>
        <h1 class="text-center">Admin</h1>
        <form class="registration-form">
            <label>
                <span class="label-text">Correo:</span>
                <input type="text" name="email">
            </label>
            <label class="password">
                <span class="label-text">Contraseña:</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password">
            </label>
           
            <div class="text-center">
                <!-- <button class="submit" name="register">Iniciar</button> -->
                <button class="btn-go" role="button">Iniciar</button>

            </div>
        </form>
    </div>
   
</body>
</html>
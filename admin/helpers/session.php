<?php
    // Verificar si la sesión está iniciada y el usuario ha iniciado sesión
    if (!isset($_SESSION['id_admin']))
        {
            // Si la sesión no está iniciada o el usuario no ha iniciado sesión, redirigir al usuario o mostrar un mensaje de error
            echo("<script>location.href = './index.php';</script>");
            exit; // Asegura que el código no siga ejecutándose después de redirigir
        }
?>
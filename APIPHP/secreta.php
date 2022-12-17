<?php

session_start();

if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: formulario.html");
    # Y salimos del script
    exit();
}

# No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta
echo "Soy un mensaje secreto";
?>

<p>
    Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
</p>
<!-- Le indicamos al usuario un enlace para salir-->
<a href="logout.php">Cerrar sesión</a>

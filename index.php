<?php session_start();

if(isset($_SESSION['nombres'])){
    header("location: Controlador/UsuariosControl.php?accion=inicio");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BICILANDIA</title>
    </head>
    <body>
        
    </body>
</html>
<?php

//echo $_SESSION['error'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../Recursos/Css/Estilo.css" rel="stylesheet" type="text/css"/>
        
        <link rel="apple-touch-icon" sizes="57x57" href="../Recursos/Iconos/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../Recursos/Iconos//apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../Recursos/Iconos//apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../Recursos/Iconos//apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../Recursos/Iconos//apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../Recursos/Iconos//apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../Recursos/Iconos//apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../Recursos/Iconos//apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../Recursos/Iconos//apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../Recursos/Iconos//android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../Recursos/Iconos//favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../Recursos/Iconos//favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../Recursos/Iconos//favicon-16x16.png">
        <link rel="manifest" href="../Recursos/Iconos//manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <title>BICILANDIA</title>
    </head>
    <body>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login" method="POST" action="UsuariosControl.php" id="Login">
                        <input type="hidden" name="accion" value="login">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="Usuario" name="UsuarioLogin">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" class="login__input" placeholder="Contraseña" name="ContrasenaLogin">
                        </div>
                        <input type="submit" name="login" Value="Iniciar Sesión" class="button login__submit">
                            <i class="button__icon fas fa-chevron-right"></i>
                    </form>
                </div>
                
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>
    </body>
</html>

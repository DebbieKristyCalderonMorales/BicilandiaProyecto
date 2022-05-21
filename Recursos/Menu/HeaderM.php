<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
        <link href="../Recursos/Css/Header.css" rel="stylesheet" type="text/css"/>
        <link href="../Recursos/Css/Usuarios.css" rel="stylesheet" type="text/css"/>
        <link href="../Recursos/Css/Administrador.css" rel="stylesheet" type="text/css"/>
        <script src="../Recursos/Js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="../Recursos/Js/jquery.validate.js" type="text/javascript"></script>
        <title>BICILANDIA</title>
    </head>


    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="UsuariosControl.php?accion=admin">Inicio</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Repuestos</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="UsuariosControl.php?accion=registro">Agregar nuevo repuesto</a>
                                        <a class="dropdown-item" href="UsuariosControl.php?accion=usuarios">Listado de repuestos</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Registrar mantenimiento</a>
                                        <a class="dropdown-item" href="#">Listado de Bicicletas en mantenimiento</a>
                                    </div>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Perfil de usuario</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><?php echo $_SESSION['nombres']; ?></a>
                                        <a class="dropdown-item" href="UsuariosControl.php?accion=salir">Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>		
                </div>
            </div>
        </div>
    </div>
    <body>

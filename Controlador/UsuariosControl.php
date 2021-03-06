<?php

session_start();

include_once '../Modelo/Usuario.php';
include_once '../Modelo/Bicicleta.php';

class UsuariosControl extends Usuario {
    
    public function MostrarLogin() {
        include_once '../Vista/Login/Login.php';
    }

    public function Salir() {
        session_destroy();
        $this->RedirectLogin();
    }

    public function MostrarRegistro() {
        include_once '../Vista/Usuarios/AgregarUsuario.php';
    }
    
    public function MostrarActualizacion($id) {
        if(isset($_REQUEST[$this->id])){
            $this->ObtenerDatos($id);
        }
        include_once '../Vista/Usuarios/EditarUsuario.php';
    }

    public function MostrarAdmin() {
        include_once '../Vista/Administrador.php';
    }

    public function MostrarMecanico() {
        include_once '../Vista/Mecanico.php';
    }

    public function MostrarEncargado() {
        $icb = new Bicicleta();
        $objbicicletas = $icb->ListarBicicletaDisponible();
        include_once '../Vista/Encargado.php';
    }

    public function MostrarUsuarios() {
        $objusuarios = $this->ListarUsuarios();
        include_once '../Vista/Usuarios/Usuarios.php';
    }
    
    public function VerificarEdicion($idUsuario) {
        $this->id = $idUsuario;
        $objunusuario = $this->ObtenerUsuario();
        require '../Vista/Usuarios/EditarUsuario.php';
    }
    
    public function EditarInfo($id,$dni, $nombres, $apellidos, $direccion, $telefono, $correo, $usuario, $pass, $tipo, $estado){
        $this->id = $id;
        $this->Dni = $dni;
        $this->Nombres = $nombres;
        $this->Apellidos = $apellidos;
        $this->Direccion = $direccion;
        $this->Telefono = $telefono;
        $this->Correo = $correo;
        $this->Usuario = $usuario;
        $this->Pass = $pass;
        $this->Tipo = $tipo;
        $this->Estado = $estado;
        $this->EditarUsuario();
        $this->MostrarUsuarios();
    }

        public function Datos($dni, $nombres, $apellidos, $direccion, $telefono, $correo, $usuario, $pass, $tipo, $estado) {
        $this->Dni = $dni;
        $this->Nombres = $nombres;
        $this->Apellidos = $apellidos;
        $this->Direccion = $direccion;
        $this->Telefono = $telefono;
        $this->Correo = $correo;
        $this->Usuario = $usuario;
        $this->Pass = $pass;
        $this->Tipo = $tipo;
        $this->Estado = $estado;
        $this->GuardarUsuario();
        $this->MostrarUsuarios();
    }

    public function VerificarLogin($usuario, $pass) {
        
        $modelo = new Usuario();
        $modelo->Usuario = $usuario;
        $modelo->Pass = $pass;
        $e = $this->ValidarLogin($modelo);
        if ($e->conta != 0) {
            $e = $this->CargarDatos($modelo);
            if ($e->rolUsuario == "Administrador") {
                $this->RedirectAdmin();
            } elseif ($e->rolUsuario == "Mec??nico") {
                $this->RedirectMecanico();
            } else if ($e->rolUsuario == "Encargado Alquiler") {
                $this->RedirectEncargado();
            }
            $_SESSION['idUsuario'] = $e->idUsuario;
            $_SESSION['nombres'] = $e->nombres;
            $_SESSION['apellidos'] = $e->apellidos;
            $_SESSION['rol'] = $e->rolUsuario;
            $_SESSION['acceso'] = 1;
        } else {
            $this->RedirectLogin();
        }
    }
    
    public function VerificarEliminacion($id){
        $this->id = $id;
        $this->EliminarUsuario();
        $this->MostrarUsuarios();
    }

    public function Redirect() {
        header("location: ../");
    }

    public function RedirectAdmin() {
        header("location: UsuariosControl.php?accion=admin");
    }

    public function RedirectMecanico() {
        header("location: UsuariosControl.php?accion=mecanico");
    }

    public function RedirectEncargado() {
        header("location: UsuariosControl.php?accion=encargado");
    }

    public function RedirectLogin() {
        header("location: UsuariosControl.php?accion=inicio");
    }

}

if (isset($_GET['accion']) && $_GET['accion'] == 'admin') {
    $ic = new UsuariosControl();
    $ic->MostrarAdmin();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'mecanico') {
    $ic = new UsuariosControl();
    $ic->MostrarMecanico();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'encargado') {
    $ic = new UsuariosControl();
    $ic->MostrarEncargado();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'inicio') {
    $ic = new UsuariosControl();
    $ic->MostrarLogin();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'usuarios') {
    $ic = new UsuariosControl();
    $ic->MostrarUsuarios();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'registro') {
    $ic = new UsuariosControl();
    $ic->MostrarRegistro();
}

if(isset($_POST['accion']) && $_POST['accion']=='insertar'){
    $ic = new UsuariosControl();
    $ic->Datos(
            $_POST['dni'], 
            $_POST['nombres'], 
            $_POST['apellidos'],
            $_POST['direccion'], 
            $_POST['telefono'], 
            $_POST['correo'],
            $_POST['usuario'],
            $_POST['pass'],
            $_POST['tipo'], 
            $_POST['estado']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'cargar') {
    $ic = new UsuariosControl();
    $ic->MostrarActualizacion();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'salir') {
    $ic = new UsuariosControl();
    $ic->Salir();
}

if (isset($_POST['accion']) && $_POST['accion'] == 'login') {
    $ic = new UsuariosControl();
    $ic->VerificarLogin($_POST['UsuarioLogin'], $_POST['ContrasenaLogin']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'editar'){
    $ic = new UsuariosControl();
    $ic->VerificarEdicion($_GET['idUsuario']);
}

if(isset($_POST['accion']) && $_POST['accion'] == 'editar') {
    $ic = new UsuariosControl();
    $ic->EditarInfo(
            $_POST['id'],
            $_POST['dni'], 
            $_POST['nombres'], 
            $_POST['apellidos'],
            $_POST['direccion'], 
            $_POST['telefono'], 
            $_POST['correo'],
            $_POST['usuario'],
            $_POST['pass'],
            $_POST['tipo'], 
            $_POST['estado']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'eliminar'){
    $ic = new UsuariosControl();
    $ic->VerificarEliminacion($_GET['idUsuario']);
}
<?php
session_start();

include_once '../Modelo/Usuario.php';

class UsuariosControl extends Usuario{
    
    public function MostrarLogin(){
        include_once '../Vista/Login/Login.php';
    }
    
    public function Salir() {
        session_destroy();
        $this->RedirectLogin();
    }
    
    public function MostrarRegistro() {
        include_once '../Vista/Usuarios/AgregarUsuario.php';
    }
    
    public function MostrarAdmin(){
        include_once '../Vista/Administrador.php';
    }
    
    public function MostrarMecanico(){
        include_once '../Vista/Mecanico.php';
    }
    
    public function MostrarUsuarios() {
        $objusuario = $this->ListarUsuarios();
        include_once '../Vista/Usuarios/Usuarios.php';
    }
    
    public function Datos($dni,$nombres,$apellidos,$direccion,$telefono,$correo,$usuario,$pass,$tipo) {
        $this->Dni = $dni;
        $this->Nombres = $nombres;
        $this->Apellidos = $apellidos;
        $this->Direccion = $direccion;
        $this->Telefono = $telefono;
        $this->Correo = $correo;
        $this->Usuario = $usuario;
        $this->Pass = $pass;
        $this->Tipo = $tipo;
        $this->GuardarUsuario();
        $this->Redirect();
    }
    
    public function VerificarLogin($usuario,$pass) {
        $modelo = new Usuario();
        $modelo->Usuario = $usuario;
        $modelo->Pass = $pass;
        $e = $this->validarLogin($modelo);
        if ($e->conta != 0) {
            $e = $this->cargarDatos($modelo);
            if ($e->rolUsuario == "Administrador") {
                $this->RedirectAdmin();
            } elseif ($e->rolUsuario == "Mecánico") {
                $this->RedirectMecanico();
            } else if ($e->rolUsuario == "Encargado Alquiler") {
                $this->RedirectLogin();
            }
            $_SESSION['nombres'] = $e->nombres;
            $_SESSION['apellidos'] = $e->apellidos;
            $_SESSION['acceso'] = 1;
        } else {
            $this->RedirectLogin();
        }
        //$this->Usuario = $usuario;
        //$this->Pass = $pass;
        //$user = $this->ConsultarUsuario();
        //if($user=="Sindatos"){//si el usuario llega vacío se manda un mensaje
        //    $_SESSION['error'] =  "usuario no registrado";
        //    $this->RedirectLogin();
        //}else{
        //    if(password_verify($this->Pass,$user->Pass)){
        //        $_SESSION['dni'] = $user->Dni;
        //        $_SESSION['nombres'] = $user->Nombres;
        //        $_SESSION['apellidos'] = $user->Apellidos;
        //        $_SESSION['direccion'] = $user->Direccion;
        //        $_SESSION['telefono'] = $user->Telefono;
        //        $_SESSION['usuario'] = $user->Usuario;
        //        $_SESSION['pass'] = $user->Pass;
        //        $_SESSION['idTipoUsuario'] = $user->Tipo;
        //        $this->Redirect();
        //    }else{
        //        $_SESSION['error'] = "contraseña incorrecta";
        //        $this->RedirectLogin();
        //    }
        //}
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
    
    public function RedirectLogin() {
        header("location: UsuariosControl.php?accion=inicio");
    }
}

if(isset($_GET['accion']) && $_GET['accion']=='admin'){
    $ic = new UsuariosControl();
    $ic->MostrarAdmin();
}

if(isset($_GET['accion']) && $_GET['accion']=='mecanico'){
    $ic = new UsuariosControl();
    $ic->MostrarMecanico();
}

if(isset($_GET['accion']) && $_GET['accion']=='inicio'){
    $ic = new UsuariosControl();
    $ic->MostrarLogin();
}

if(isset($_GET['accion']) && $_GET['accion']=='usuarios'){
    $ic = new UsuariosControl();
    $ic->MostrarUsuarios();
}

if(isset($_GET['accion']) && $_GET['accion']=='registro'){
    $ic = new UsuariosControl();
    $ic->MostrarRegistro();
}

if(isset($_GET['accion']) && $_GET['accion']=='salir'){
    $ic = new UsuariosControl();
    $ic->Salir();
}

if(isset($_POST['accion']) && $_POST['accion']=='login'){
    $ic = new UsuariosControl();
    $ic->VerificarLogin($_POST['UsuarioLogin'],$_POST['ContrasenaLogin']);
}

if(isset($_POST['accion']) && $_POST['accion']=='insertar'){
    $ic = new UsuariosControl();
    $ic->Datos($_POST['dni'],$_POST['nombres'],$_POST['apellidos'],
            $_POST['direccion'],$_POST['telefono'],$_POST['correo'],
            $_POST['usuario'],$_POST['pass'],$_POST['tipo']);
}

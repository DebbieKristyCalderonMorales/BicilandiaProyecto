<?php
session_start();

include_once '../Modelo/Bicicleta.php';
include_once '../Modelo/Alquiler.php';
include_once '../Modelo/Mantenimiento.php';

class AlquilerControl extends Alquiler{

    public function MostrarAlquiler() {
        $ic = new Bicicleta();
        $objbicicletas = $ic->ListarBicicletaDisponible();
        $objbicialquiladas = $ic->ListarBicicletaAlquilada();
        $objalquiler = $this->ListarAlquiler();
        include_once '../Vista/Alquiler/Alquiler.php';
    }
    
    public function MostrarDisponibilidad() {
        $ic = new Bicicleta();
        $icm = new Mantenimiento();
        $objbicicletas = $ic->ListarBicicleta();
        $objmantenimiento = $icm->ListarMantenimiento();
        //$objalquiler = $this->ListarAlquiler();
        include_once '../Vista/Reportes/Disponibilidad.php';
    }
    
    public function MostrarAlquileres() {
        //$ic = new Bicicleta();
        //$objbicicletas = $ic->ListarBicicletaDisponible();
        //$objbicialquiladas = $ic->ListarBicicletaAlquilada();
        $objalquiler = $this->ListarAlquiler();
        include_once '../Vista/Reportes/Alquileres.php';
    }
    
    public function Redirect() {
        header("location: ../");
    }
    
    public function MostrarRegistro() {
        $ic = new Bicicleta();
        $objbicicletas = $ic->ListarBicicletaDisponible();
        $objbicialquiladas = $ic->ListarBicicletaAlquilada();
        include_once '../Vista/Alquiler/AgregarAlquiler.php';
    }
    
    public function Datos($bicicleta,$fecha,$horaSalida,$cliente,$estado,$usuario) {
        $this->Bicicleta = $bicicleta;
        $this->Fecha = $fecha;
        $this->HoraSalida = $horaSalida;
        $this->Cliente = $cliente;
        $this->Estado = $estado;
        $this->Usuario = $usuario;
        $this->RegistrarAlquiler();
        $this->MostrarAlquiler();
    }
    
    public function Alquilar($idBicicleta){
        $ic = new Bicicleta();
        $ic->IdBicicleta = $idBicicleta;
        $ic->Alquilado();
        $this->MostrarAlquiler();
    }
    
    public function Devolver($idBicicleta){
        $ic = new Bicicleta();
        $ic->IdBicicleta = $idBicicleta;
        $ic->Devuelto();
        $this->MostrarAlquiler();
    }
    
    public function ImprimirDisponibilidad() {
        include_once '../Vista/Reportes/Imprimir.php';
    }
}

if (isset($_GET['accion']) && $_GET['accion'] == 'alquiler') {
    $ic = new AlquilerControl();
    $ic->MostrarAlquiler();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'registrar') {
    $ic = new AlquilerControl();
    $ic->MostrarRegistro();
}

if(isset($_POST['accion']) && $_POST['accion']=='insertar'){
    $ic = new AlquilerControl();
    $ic->Datos($_POST['bicicleta'],$_POST['fecha'],$_POST['horas'],$_POST['cliente'],$_POST['estado'],$_POST['usuario']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'alquilar'){
    $ic = new AlquilerControl();
    $ic->Alquilar($_GET['idBicicleta']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'devolver'){
    $ic = new AlquilerControl();
    $ic->Devolver($_GET['idBicicleta']);
}

if (isset($_GET['accion']) && $_GET['accion'] == 'disponibilidad') {
    $ic = new AlquilerControl();
    $ic->MostrarDisponibilidad();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'alquileres') {
    $ic = new AlquilerControl();
    $ic->MostrarAlquileres();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'imprimir') {
    $ic = new AlquilerControl();
    $ic->ImprimirDisponibilidad();
}
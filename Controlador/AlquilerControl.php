<?php
session_start();

include_once '../Modelo/Bicicleta.php';
include_once '../Modelo/Alquiler.php';

class AlquilerControl extends Alquiler{

    public function MostrarAlquiler() {
        $ic = new Bicicleta();
        $objbicicletas = $ic->ListarBicicletaDisponible();
        $objalquiler = $this->ListarAlquiler();
        include_once '../Vista/Alquiler/Alquiler.php';
    }
    
    public function Redirect() {
        header("location: ../");
    }
    
    public function MostrarRegistro() {
        $ic = new Bicicleta();
        $objbicicletas = $ic->ListarBicicletaDisponible();
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
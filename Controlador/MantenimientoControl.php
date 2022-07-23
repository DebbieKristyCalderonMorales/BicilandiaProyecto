<?php

session_start();

include_once '../Modelo/Mantenimiento.php';
include_once '../Modelo/Bicicleta.php';
include_once '../Modelo/Repuesto.php';
include_once '../Modelo/Usuario.php';

class MantenimientoControl extends Mantenimiento {

    public function MostrarMantenimiento() {
        $ic = new Bicicleta();
        $icr = new Repuesto();
        //$icu = new Usuario();
        //$objusuario = $icu->ListarUsuarios();
        $objbicicletas = $ic->ListarBicicletaMantenimiento();
        $objbicicletas2 = $ic->ListarBicicletas();
        $objrepuesto = $icr->ListarRepuesto();
        $objmantenimiento = $this->ListarMantenimiento();
        include_once '../Vista/Mantenimiento/Mantenimiento.php';
    }

    public function MostrarRegistro() {
        $ic = new Bicicleta();
        $icr = new Repuesto();
        $objbicicletas = $ic->ListarBicicletaMantenimiento();
        $objbicicletas2 = $ic->ListarBicicletas();
        $objrepuesto = $icr->ListarRepuesto();
        include_once '../Vista/Mantenimiento/RegistrarMantenimiento.php';
    }
    
    public function Mantenimiento($idBicicleta){
        $ic = new Bicicleta();
        $ic->IdBicicleta = $idBicicleta;
        $ic->IngresarMantenimiento();
        $this->MostrarMantenimiento();
    }
    
    public function Funcionamiento($idBicicleta){
        $ic = new Bicicleta();
        $ic->IdBicicleta = $idBicicleta;
        $ic->Disponibilidad();
        $this->MostrarMantenimiento();
    }
    
    public function Datos($descripcion, $repuesto, $bicicleta, $usuario) {
        $this->Descripcion = $descripcion;
        $this->Repuesto = $repuesto;
        $this->Bicicleta = $bicicleta;
        $this->Usuario = $usuario;
        $this->RegistrarMantenimiento();
        $this->MostrarMantenimiento();
    }

}

if (isset($_GET['accion']) && $_GET['accion'] == 'mantenimiento') {
    $ic = new MantenimientoControl();
    $ic->MostrarMantenimiento();
}

if (isset($_GET['accion']) && $_GET['accion'] == 'registrar') {
    $ic = new MantenimientoControl();
    $ic->MostrarRegistro();
}

if (isset($_POST['accion']) && $_POST['accion'] == 'insertar') {
    $ic = new MantenimientoControl();
    $ic->Datos(
            $_POST['descripcion'],
            $_POST['repuesto'],
            $_POST['bicicleta'],
            $_POST['usuario']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'ingmantenimiento'){
    $ic = new MantenimientoControl();
    $ic->Mantenimiento($_GET['idBicicleta']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'funcionamiento'){
    $ic = new MantenimientoControl();
    $ic->Funcionamiento($_GET['idBicicleta']);
}
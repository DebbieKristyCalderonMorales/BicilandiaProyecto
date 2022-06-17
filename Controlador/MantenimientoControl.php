<?php

session_start();

include_once '../Modelo/Mantenimiento.php';

class MantenimientoControl extends Mantenimiento {

    public function MostrarMantenimiento() {
        $objmantenimiento = $this->ListarMantenimiento();
        include_once '../Vista/Mantenimiento/Mantenimiento.php';
    }

    public function MostrarRegistro() {
        include_once '../Vista/Mantenimiento/RegistrarMantenimiento.php';
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
    $ic = new RepuestoControl();
    $ic->Datos($_POST['descripcion'], $_POST['repuesto'], $_POST['bicicleta'], $_POST['usuario']);
}
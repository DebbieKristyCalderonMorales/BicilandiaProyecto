<?php

session_start();

include_once '../Modelo/Repuesto.php';

class RepuestoControl extends Repuesto {

    public function MostrarRepuestos() {
        $objrepuesto = $this->ListarRepuesto();
        include_once '../Vista/Repuestos/Repuestos.php';
    }
    
    public function MostrarRegistro() {
        include_once '../Vista/Repuestos/AgregarRepuesto.php';
    }
    
    public function Datos($nombre,$stock,$precio) {
        $this->Nombre = $nombre;
        $this->Stock = $stock;
        $this->Precio = $precio;
        $this->AgregarRepuesto();
        $this->MostrarRepuestos();
    }
}

if (isset($_GET['accion']) && $_GET['accion'] == 'repuestos') {
    $ic = new RepuestoControl();
    $ic->MostrarRepuestos();
}

if(isset($_GET['accion']) && $_GET['accion']=='agregar'){
    $ic = new RepuestoControl();
    $ic->MostrarRegistro();
}

if(isset($_POST['accion']) && $_POST['accion']=='insertar'){
    $ic = new RepuestoControl();
    $ic->Datos($_POST['nombre'],$_POST['stock'],$_POST['precio']);
}
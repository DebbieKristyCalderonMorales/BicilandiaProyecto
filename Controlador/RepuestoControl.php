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
    
    public function VerificarEdicion($idRepuesto) {
        $this->IdRepuesto = $idRepuesto;
        $objunrepuesto = $this->ObtenerRepuesto();
        require '../Vista/Repuestos/EditarRepuesto.php';
    }
    
    public function EditarInfo($idRepuesto, $nombre, $stock, $precio){
        $this->IdRepuesto = $idRepuesto;
        $this->Nombre = $nombre;
        $this->Stock = $stock;
        $this->Precio = $precio;
        $this->EditarRepuesto();
        $this->MostrarRepuestos();
    }
    
    public function VerificarEliminacion($idRepuesto){
        $this->IdRepuesto = $idRepuesto;
        $this->EliminarRepuesto();
        $this->MostrarRepuestos();
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

if(isset($_GET['accion']) && $_GET['accion'] == 'editar'){
    $ic = new RepuestoControl();
    $ic->VerificarEdicion($_GET['idRepuesto']);
}

if(isset($_POST['accion']) && $_POST['accion'] == 'editar') {
    $ic = new RepuestoControl();
    $ic->EditarInfo(
            $_POST['id'],
            $_POST['nombre'], 
            $_POST['stock'], 
            $_POST['precio']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'eliminar'){
    $ic = new RepuestoControl();
    $ic->VerificarEliminacion($_GET['idRepuesto']);
}
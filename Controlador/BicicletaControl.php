<?php

session_start();

include_once '../Modelo/Bicicleta.php';

class BicicletaControl extends Bicicleta {

    public function MostrarBicicleta() {
        $objbicicleta = $this->ListarBicicleta();
        include_once '../Vista/Bicicletas/Bicicletas.php';
    }
    
    public function Redirect() {
        header("location: ../");
    }
    
    public function MostrarRegistro() {
        include_once '../Vista/Bicicletas/AgregarBicicleta.php';
    }
    
    public function MostrarFiltro() {
        include_once '../Vista/Bicicletas/FiltrarBicicletas.php';
    }
    
    public function VerificarEdicion($idBicicleta) {
        $this->IdBicicleta = $idBicicleta;
        $objunabici = $this->ObtenerBicicleta();
        require '../Vista/Bicicletas/EditarBicicleta.php';
    }
    
    public function EditarInfo($id, $codigo, $color, $marca, $estado){
        $this->IdBicicleta = $id;
        $this->Codigo = $codigo;
        $this->Color = $color;
        $this->Marca = $marca;
        $this->Estado = $estado;
        $this->EditarBicicleta();
        $this->MostrarBicicleta();
    }
    
    public function VerificarEliminacion($idBicicleta){
        $this->IdBicicleta = $idBicicleta;
        $this->EliminarBicicleta();
        $this->MostrarBicicleta();
    }
    
    
    
    public function Datos($codigo,$color,$marca,$estado) {
        $this->Codigo = $codigo;
        $this->Color = $color;
        $this->Marca = $marca;
        $this->Estado = $estado;
        $this->AgregarBicicleta();
        $this->MostrarBicicleta();
    }

}

if (isset($_GET['accion']) && $_GET['accion'] == 'bicicletas') {
    $ic = new BicicletaControl();
    $ic->MostrarBicicleta();
}

if(isset($_GET['accion']) && $_GET['accion']=='agregar'){
    $ic = new BicicletaControl();
    $ic->MostrarRegistro();
}

if(isset($_GET['accion']) && $_GET['accion']=='filtrar'){
    $ic = new BicicletaControl();
    $ic->MostrarFiltro();
}

if(isset($_POST['accion']) && $_POST['accion']=='insertar'){
    $ic = new BicicletaControl();
    $ic->Datos(
            $_POST['codigo'],
            $_POST['color'],
            $_POST['marca'],
            $_POST['estado']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'editar'){
    $ic = new BicicletaControl();
    $ic->VerificarEdicion($_GET['idBicicleta']);
}

if(isset($_POST['accion']) && $_POST['accion'] == 'editar') {
    $ic = new BicicletaControl();
    $ic->EditarInfo(
            $_POST['id'],
            $_POST['codigo'], 
            $_POST['color'], 
            $_POST['marca'],
            $_POST['estado']);
}

if(isset($_GET['accion']) && $_GET['accion'] == 'eliminar'){
    $ic = new BicicletaControl();
    $ic->VerificarEliminacion($_GET['idBicicleta']);
}



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

if(isset($_POST['accion']) && $_POST['accion']=='insertar'){
    $ic = new BicicletaControl();
    $ic->Datos($_POST['codigo'],$_POST['color'],$_POST['marca'], $_POST['estado']);
}
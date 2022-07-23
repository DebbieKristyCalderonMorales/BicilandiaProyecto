<?php

class Bicicleta {
    public $IdBicicleta;
    protected $Codigo;
    protected $Color;
    protected $Marca;
    protected $Estado;
    
    protected function AgregarBicicleta(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        
        $sql = "INSERT INTO bicicleta (codigo,color,marca,estado) VALUES (?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->Codigo);
        $insertar->bindParam(2, $this->Color);
        $insertar->bindParam(3, $this->Marca);
        $insertar->bindParam(4, $this->Estado);
        $insertar->execute();
    }
    
    public function ListarBicicleta(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objbicicleta = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objbicicleta;
    }
    
    public function ListarBicicleta1(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta WHERE estado=1";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objbicicleta = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objbicicleta;
    }
    
    public function ListarBicicletaDisponible(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta WHERE estado!=2";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objbicicleta = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objbicicleta;
    }
    
    public function ListarBicicletaMantenimiento(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta WHERE estado=2";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objbicicleta = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objbicicleta;
    }
    
    public function ListarBicicletaAlquilada(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta WHERE estado=3";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objbicicleta = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objbicicleta;
    }

        public function ListarBicicletas(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta WHERE estado!=3";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objbicicleta = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objbicicleta;
    }
    
    protected function ObtenerBicicleta() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM bicicleta WHERE idBicicleta='$this->IdBicicleta'";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objunabici = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objunabici;
    }
    
    protected function EditarBicicleta() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE bicicleta SET codigo='$this->Codigo',color='$this->Color',"
                . "marca='$this->Marca',estado='$this->Estado' WHERE idBicicleta='$this->IdBicicleta'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
    
    protected function EliminarBicicleta() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "DELETE FROM bicicleta WHERE idBicicleta='$this->IdBicicleta'";
        $eliminar = $ic->db->prepare($sql);
        $eliminar->execute();
    }
    
    public function IngresarMantenimiento() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE bicicleta SET estado='2' WHERE idBicicleta='$this->IdBicicleta'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
    
    public function Disponibilidad() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE bicicleta SET estado='1' WHERE idBicicleta='$this->IdBicicleta'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
    
    public function Alquilado() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE bicicleta SET estado='3' WHERE idBicicleta='$this->IdBicicleta'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
    
    public function Devuelto() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE bicicleta SET estado='1' WHERE idBicicleta='$this->IdBicicleta'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
}

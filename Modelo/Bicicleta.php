<?php

class Bicicleta {
    protected $IdBicicleta;
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
}

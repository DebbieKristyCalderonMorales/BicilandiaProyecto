<?php

class Repuesto {

    protected $IdRepuesto;
    protected $Nombre;
    protected $Stock;
    protected $Precio;

    protected function AgregarRepuesto() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();

        $sql = "INSERT INTO repuesto (nombre,stock,precio) VALUES (?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->Nombre);
        $insertar->bindParam(2, $this->Stock);
        $insertar->bindParam(3, $this->Precio);
        $insertar->execute();
    }

    public function ListarRepuesto() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM repuesto";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objrepuesto = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objrepuesto;
    }
    
    protected function ObtenerRepuesto() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM repuesto WHERE idRepuesto='$this->IdRepuesto'";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objunrepuesto = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objunrepuesto;
    }
    
    protected function EditarRepuesto() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE repuesto SET nombre='$this->Nombre',stock='$this->Stock',"
                . "precio='$this->Precio' WHERE idRepuesto='$this->IdRepuesto'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
    
    protected function EliminarRepuesto() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "DELETE FROM repuesto WHERE idRepuesto='$this->IdRepuesto'";
        $eliminar = $ic->db->prepare($sql);
        $eliminar->execute();
    }
    
}

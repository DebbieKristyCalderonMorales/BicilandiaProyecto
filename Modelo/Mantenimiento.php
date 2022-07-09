<?php

class Mantenimiento {

    protected $IdMantenimiento;
    protected $Descripcion;
    protected $Repuesto;
    protected $Bicicleta;
    protected $Usuario;

    protected function RegistrarMantenimiento() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();

        $sql = "INSERT INTO mantenimiento (descripcion,idRepuesto,idBicicleta,idUsuario) VALUES (?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->Descripcion);
        $insertar->bindParam(2, $this->Repuesto);
        $insertar->bindParam(3, $this->Bicicleta);
        $insertar->bindParam(4, $this->Usuario);
        $insertar->execute();
    }

    public function ListarMantenimiento() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT m.descripcion, b.codigo, r.nombre FROM mantenimiento m "
                . "INNER JOIN bicicleta b ON m.idBicicleta=b.idBicicleta "
                . "INNER JOIN repuesto r ON m.idRepuesto=r.idRepuesto;";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objmantenimiento = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objmantenimiento;
    }
    
    public function Seleccionar(int $id){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM mantenimiento WHERE idMantenimiento = $id";
        $mostrar = $ic->db->prepare($sql);
    }
}

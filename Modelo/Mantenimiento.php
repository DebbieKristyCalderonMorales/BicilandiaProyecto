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
        $sql = "SELECT * FROM mantenimiento";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objmantenimiento = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objmantenimiento;
    }

}

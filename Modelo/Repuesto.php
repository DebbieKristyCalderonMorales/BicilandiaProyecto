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
        $objusuario = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objusuario;
    }

}

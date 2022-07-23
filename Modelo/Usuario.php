<?php

class Usuario {

    protected $id;
    protected $Dni;
    protected $Nombres;
    protected $Apellidos;
    protected $Direccion;
    protected $Telefono;
    protected $Correo;
    protected $Usuario;
    protected $Pass;
    protected $Tipo;
    protected $Estado;

    protected function GuardarUsuario() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();

        $sql = "INSERT INTO usuario (dni,nombres,apellidos,direccion,telefono,correo,"
                . "usuario,pass,idTipoUsuario,estado) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $nuevapass = password_hash($this->Pass, PASSWORD_ARGON2I);
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->Dni);
        $insertar->bindParam(2, $this->Nombres);
        $insertar->bindParam(3, $this->Apellidos);
        $insertar->bindParam(4, $this->Direccion);
        $insertar->bindParam(5, $this->Telefono);
        $insertar->bindParam(6, $this->Correo);
        $insertar->bindParam(7, $this->Usuario);
        $insertar->bindParam(8, $nuevapass);
        $insertar->bindParam(9, $this->Tipo);
        $insertar->bindParam(10, $this->Estado);
        $insertar->execute();
    }

    public function ListarUsuarios() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT u.idUsuario,u.dni,u.nombres,u.apellidos,u.direccion,u.telefono,u.correo,u.usuario,u.pass,t.rolUsuario,u.estado"
                . " FROM usuario u INNER JOIN tipousuario t on u.idTipoUsuario=t.idTipoUsuario";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objusuarios = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objusuarios;
    }

    public function ValidarLogin($dato) {

        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        try {
            $query = "SELECT count(*) conta FROM usuario WHERE usuario = ? and pass = ?";
            $smt = $ic->db->prepare($query);
            $smt->execute(array($dato->Usuario, $dato->Pass));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    

    public function CargarDatos($dato) {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        try {
            $query = "SELECT u.idUsuario,u.usuario,u.nombres,u.apellidos,t.rolUsuario "
                    . "FROM usuario u INNER JOIN tipousuario t on u.idTipoUsuario=t.idTipoUsuario "
                    . "WHERE u.usuario = ? and u.pass = ?";
            $smt = $ic->db->prepare($query);
            $smt->execute(array($dato->Usuario, $dato->Pass));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    
    public function ObtenerDatos($id) {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        try {
            $query = "SELECT * FROM usuario WHERE u.idUsuario = ?";
            $smt = $ic->db->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    
    protected function ObtenerUsuario() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT u.dni,u.nombres,u.apellidos,u.direccion,u.telefono, "
                . "u.correo,u.usuario,u.estado,t.rolUsuario "
                . "FROM usuario u INNER JOIN tipousuario t on u.idTipoUsuario=t.idTipoUsuario"
                . " WHERE u.idUsuario='$this->id'";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objunusuario = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objunusuario;
    }
    
    protected function EditarUsuario() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "UPDATE usuario SET dni='$this->Dni',nombres='$this->Nombres',"
                . "apellidos='$this->Apellidos',direccion='$this->Direccion',"
                . "telefono='$this->Telefono',correo='$this->Correo',"
                . "usuario='$this->Usuario',pass='$this->Pass',idTipoUsuario='$this->Tipo',"
                . "estado='$this->Estado' WHERE idUsuario='$this->id'";
        $editar = $ic->db->prepare($sql);
        $editar->execute();
    }
    
    protected function EliminarUsuario() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "DELETE FROM usuario WHERE idUsuario='$this->id'";
        $eliminar = $ic->db->prepare($sql);
        $eliminar->execute();
    }
}

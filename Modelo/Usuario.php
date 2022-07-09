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
        $sql = "SELECT u.dni,u.nombres,u.apellidos,u.direccion,u.telefono,u.correo,u.usuario,t.rolUsuario,u.estado"
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
            $query = "SELECT u.dni,u.nombres,u.apellidos,u.direccion,u.telefono,"
                    . "u.correo,u.usuario,u.estado,t.rolUsuario "
                    . "FROM usuario u INNER JOIN tipousuario t on u.idTipoUsuario=t.idTipoUsuario "
                    . "WHERE u.idUsuario = ?";
            $smt = $ic->db->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    
    protected function ActualizarUsuario() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();

        $sql = "UPDATE usuario SET dni=?,nombres=?,apellidos=?,direccion=?,telefono=?,correo=?,"
                . "usuario=?,idTipoUsuario=?,estado=? WHERE idUsuario=?";
        $actualizar = $ic->db->prepare($sql);
        $actualizar->bindParam(1, $this->Dni);
        $actualizar->bindParam(2, $this->Nombres);
        $actualizar->bindParam(3, $this->Apellidos);
        $actualizar->bindParam(4, $this->Direccion);
        $actualizar->bindParam(5, $this->Telefono);
        $actualizar->bindParam(6, $this->Correo);
        $actualizar->bindParam(7, $this->Usuario);
        $actualizar->bindParam(9, $this->Tipo);
        $actualizar->bindParam(10, $this->Estado);
        $actualizar->execute();
    }
}

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

    protected function GuardarUsuario() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();

        $sql = "INSERT INTO usuario (dni,nombres,apellidos,direccion,telefono,correo,"
                . "usuario,pass,idTipoUsuario) VALUES (?,?,?,?,?,?,?,?,?)";
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
        $insertar->execute();
    }

    public function ListarUsuarios() {
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT * FROM usuario";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objusuario = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objusuario;
    }

    public function validarLogin($dato) {

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
    

    public function cargarDatos($dato) {
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

    //public function ConsultarUsuario() {
    //    include_once '../Config/Conexion.php';
    //    $ic = new Conexion();
    //    
    //    $sql = "SELECT * FROM usuario WHERE usuario='$this->Usuario'";
    //    $consul = $ic->db->prepare($sql);
    //    $consul->execute();
    //    $objusuario = $consul->fetchAll(PDO::FETCH_OBJ);
    //    foreach ($objusuario as $user) {
    //    }
    //    if(empty($user)){
    //        $user = "Sindatos";
    //    }
    //}
}

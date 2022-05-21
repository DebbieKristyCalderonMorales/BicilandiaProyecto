<?php
class Conexion {
    
    public $db;
    
    public function __construct() {
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=proyecto_bicilandia;charset=utf8","root","");
            
        } catch (PDOException $ex) {
            Echo "Error : " . $ex->getMessage();
        }
    }
    
    
    public function CerrarConexion() {
        $this->db = null;
    }
}

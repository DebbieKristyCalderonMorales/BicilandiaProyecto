<?php
class Alquiler {
    protected $IdAlquiler;
    protected $Fecha;
    protected $HoraSalida;
    protected $HoraEntrada;
    protected $Cliente;
    protected $Estado;
    protected $Bicicleta;
    protected $Usuario;
    
    public function ListarAlquiler(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        $sql = "SELECT a.fecha,a.horaSalida,a.horaEntrada,a.cliente,a.estado,"
                . "b.codigo,u.nombres FROM alquiler a INNER JOIN bicicleta b "
                . "on a.idBicicleta=b.idBicicleta INNER JOIN usuario u on"
                . " a.idUsuario=u.idUsuario";
        $mostrar = $ic->db->prepare($sql);
        $mostrar->execute();
        $objalquiler = $mostrar->fetchAll(PDO::FETCH_OBJ);
        return $objalquiler;
    }
    
    public function RegistrarAlquiler(){
        include_once '../Config/Conexion.php';
        $ic = new Conexion();
        
        $sql = "INSERT INTO alquiler (fecha,horaSalida,horaEntrada,cliente,"
                . "estado,idBicicleta,idUsuario) VALUES (?,?,?,?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1, $this->Fecha);
        $insertar->bindParam(2, $this->HoraSalida);
        $insertar->bindParam(3, $this->HoraEntrada);
        $insertar->bindParam(4, $this->Cliente);
        $insertar->bindParam(5, $this->Estado);
        $insertar->bindParam(6, $this->Bicicleta);
        $insertar->bindParam(7, $this->Usuario);
        $insertar->execute();
    }
    
    public function EditarAlquiler($idAlquiler) {
        
    }
    
    public function BuscarAlquiler($idAlquiler){
        
    }
}

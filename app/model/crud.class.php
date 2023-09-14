<?php 

    class Crud{
        private $conexion;
        private $host = "localhost";
        private $user = "juan";
        private $pass = "juan1018";
        private $bd = "agenda";

        public function __construct() {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user,$this->pass);
        }

    public function read(){
        $query = "Select * FROM contactos";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
    public function create($datos){
        $query = "insert into contactos(nombre, telefono, email) values (:nombre,:telefono,:email)";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":telefono",$datos["telefono"]);
        $stmt->bindParam(":email",$datos["email"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }
    public function createRol($datos){
        $query = "insert into rol(rol) values (:rol)";
        $stmt= $this->conexion->prepare($query);
        $stmt->bindParam(":rol",$datos["rol"]);
        $stmt->execute();
        unset($this->conexion);
        return json_encode($stmt);
    }
    public function update($datos){
        $query = "update contactos set nombre=:nombre, telefono=:telefono, email=:email where id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$datos["id"]);
        $stmt->bindParam(":nombre",$datos["nombre"]);
        $stmt->bindParam(":telefono",$datos["telefono"]);
        $stmt->bindParam(":email",$datos["email"]);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function delete($id){
        $query = "delete from contactos where id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        unset($this->conexion);
        return $stmt;
    }
    public function show($id){
        $query = "select * from contactos where id=:id";
        $stmt= $this->conexion->prepare($query); //Asi se usa la conexion
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }
}

?>
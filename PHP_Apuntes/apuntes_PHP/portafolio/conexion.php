<?php

class conexion{
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasenia = "root";
    private $conexion;

    public function __construct(){
        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Falla de conexion ".$e;
        }

    }

    public function ejecutar($sql){ // Insert / delete / update 
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId(); 
    }

    public function consultar($sql){ // consultar
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

?>
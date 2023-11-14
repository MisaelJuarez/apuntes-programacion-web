<?php

class Crud {
    private $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $bd = "agenda";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass);
    }

    public function read()
    {
        $query = "SELECT * FROM t_contacto";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function create($datos_contacto) {
        $query = "INSERT INTO t_contacto (nombres, apellidos, telefono, email) VALUES (:nombres, :apellidos, :telefono, :email)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombres", $datos_contacto["nombres"]);
        $stmt->bindParam(":apellidos", $datos_contacto["apellidos"]);
        $stmt->bindParam(":telefono", $datos_contacto["telefono"]);
        $stmt->bindParam(":email", $datos_contacto["email"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos_contacto) {
        $query = "UPDATE t_contacto SET nombres = :nombres, apellidos = :apellidos, telefono = :telefono, email = :email WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos_contacto["id"]);
        $stmt->bindParam(":nombres", $datos_contacto["nombres"]);
        $stmt->bindParam(":apellidos", $datos_contacto["apellidos"]);
        $stmt->bindParam(":telefono", $datos_contacto["telefono"]);
        $stmt->bindParam(":email", $datos_contacto["email"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function delete($id_contacto) {
        $query = "DELETE FROM t_contacto WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function show($id_contacto) {
        $query = "SELECT * FROM t_contacto WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
}

?>
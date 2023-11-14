<?php

class Crud {
    private $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "root";
    private $bd = "consultorio";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass);
    }

    public function read()
    {
        $query = "SELECT t_cita.id, t_cita.nombres, t_cita.apellidos, t_cita.telefono, t_cita.fecha, t_cita.hora, t_medico.nombres AS nombre_medico
        FROM t_cita
        JOIN t_medico ON t_cita.IDmedico = t_medico.id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result; 
    }

    public function create($datos_contacto) {
        $query = "INSERT INTO t_cita (nombres, apellidos, telefono, fecha, hora) VALUES (:nombres, :apellidos, :telefono, :fecha, :hora, :IDmedico)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":nombres", $datos_contacto["nombres"]);
        $stmt->bindParam(":apellidos", $datos_contacto["apellidos"]);
        $stmt->bindParam(":telefono", $datos_contacto["telefono"]);
        $stmt->bindParam(":fecha", $datos_contacto["fecha"]);
        $stmt->bindParam(":hora", $datos_contacto["hora"]);
        $stmt->bindParam(":IDmedico", $datos_contacto["IDmedico"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos_contacto) {
        $query = "UPDATE t_cita SET nombres = :nombres, apellidos = :apellidos, telefono = :telefono, fecha = :fecha, hora = :hora, IDmedico = :IDmedico  WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos_contacto["id"]);
        $stmt->bindParam(":nombres", $datos_contacto["nombres"]);
        $stmt->bindParam(":apellidos", $datos_contacto["apellidos"]);
        $stmt->bindParam(":telefono", $datos_contacto["telefono"]);
        $stmt->bindParam(":fecha", $datos_contacto["fecha"]);
        $stmt->bindParam(":hora", $datos_contacto["hora"]);
        $stmt->bindParam(":IDmedico", $datos_contacto["IDmedico"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function delete($id_contacto) {
        $query = "DELETE FROM t_cita WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function show($id_contacto) {
        $query = "SELECT * FROM t_cita WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
}

?>
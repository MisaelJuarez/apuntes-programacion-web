<?php 

class Persona{

    public $nombre; // Atributos
    private $matricula; // Encapsulamiento

    public function asignarNombre($nuevoNombre){ // metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola yo soy ".$this->nombre;
    }

    public function mostrarMatricula(){ // Mostramos el atributo encapsulado mediante una funcion que lo realize
        $this->matricula = "MSD9876BAS";
        return $this->matricula;
    }

}

class Trabajador extends Persona{
    public $puesto;

    public function presentarseTrabajador(){
        echo "Hola yo soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objetoAlumno = new Persona(); // Instancia o creacion de objetos
$objetoAlumno->asignarNombre("Misael");
$objetoAlumno->imprimirNombre();
echo "<br>";
echo "Matricula: ".$objetoAlumno->mostrarMatricula();

echo "<br><br><br>";

$objetoTrabajador = new Trabajador();
$objetoTrabajador->asignarNombre("Misael");
$objetoTrabajador->puesto="Programador";
$objetoTrabajador->presentarseTrabajador();
?>
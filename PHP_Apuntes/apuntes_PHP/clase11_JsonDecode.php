<?php

$jsonContenido ='[ 
    {"nombre":"Misael", "apellido":"Juarez"},
    {"nombre":"Oscar", "apellido":"Uh"}
    ]';
// Decodifica la informacion en un arreglo, este arreglo tiene objetos y puedo acceder a sus propiedades 
$resultado = json_decode($jsonContenido);

foreach ($resultado as $persona) {
    echo ($persona->nombre." ".($persona->apellido))."<br>";
}

?>
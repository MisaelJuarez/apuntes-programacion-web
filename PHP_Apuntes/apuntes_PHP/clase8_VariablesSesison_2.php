<?php
// Con las variables de session podemos leerlas en diferentes archivos, sin enviarlos
session_start();
// isset() te permite saber si hay algo vacio o si tiene algo
if(isset($_SESSION["usuario"])){
    echo "Usuario: ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];
} else{
    echo "No hay datos";
}
?>
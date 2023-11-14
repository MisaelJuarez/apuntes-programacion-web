<?php
// Mantiene informacion en cualquier paguina, mientras el navegador este abierto o aya sido abierto
// Si sierras la paguina web estas sesiones desaparecen y tiene que volver a cargar la paguina para iniciarlas
// y puedan ser usuadas en otras paguinas
session_start();
// Variable tipo session
$_SESSION["usuario"] = "Misael";
$_SESSION["estatus"] = "Logueado";

echo "Sesion iniciada"."<br>";
echo "Usuario: ".$_SESSION["usuario"]." Estatus: ".$_SESSION["estatus"];
?>
<?php

$personas = array("Misael"=>21,"Elisa"=>24,"Jazmin"=>22);
// convierte un array a un formato json, para que sean lejibles a otras tecnologias
echo json_encode($personas);

?>
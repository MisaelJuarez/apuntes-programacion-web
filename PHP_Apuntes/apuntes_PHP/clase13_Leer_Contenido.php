<?php
// Obtenemos la ruta del archivo a obtener
$archivo = "contenido.txt";
// Abrimos el archivo en modo lectura
$archivoAbierto = fopen($archivo,"r");
// Leemos todo el contenido del archivo, indicandole su peso
$contenido=fread($archivoAbierto,filesize($archivo));
// Imprimimos el contenido del archivo
echo $contenido;

?>
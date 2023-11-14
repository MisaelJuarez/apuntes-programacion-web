<?php
// Creamos el archivo con la extension txt
$nombreArchivo = "archivo.txt";
// En una variable le poner el contenido que tendra el archivo
$contenidoArchivo = "Hola saludos, espero que se encuentren bien";
// Arbimos el archivo en modo escritura
$archivoACrear = fopen($nombreArchivo,"w");
// Me escribe el archivo y le añade el contenido al archivo creado
fwrite($archivoACrear,$contenidoArchivo);
// Cerramos el archivo para que lo podamos abrir
fclose($archivoACrear);

?>
<?php
// url que contiene registros en un formato json (Nombres de video) 
$url = "https://api.dailymotion.com/videos?channel=sport&limit=10";
// opciones para que nos deje acceder y leer la documentacion
$opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));
// nos permite leer el contenido
$respuesta=file_get_contents($url,false,stream_context_create($opciones));
// decodificamos el contenido
$objRespuesta=json_decode($respuesta);

?>
<!-- Lo leimos poco a poco con un foreach en forma de lista -->
<ul>
    <?php foreach($objRespuesta->list as $video){ ?>
        <li><?php echo ($video->title); ?> | <?php echo ($video->channel); ?></li>
    <?php } ?>
</ul>
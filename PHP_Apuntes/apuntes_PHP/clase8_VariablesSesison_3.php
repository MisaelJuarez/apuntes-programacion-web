<?php
// Cuando queremos vaciar las variables de session hacemos lo siguiente
session_start(); // Inicializamos session
session_destroy(); // Despues la destruimos

echo "Se destruyo la session de usuario";
?>
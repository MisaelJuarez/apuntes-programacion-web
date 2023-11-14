<?php 
    if ($_POST) { // Si hay una recoleccion de datos imprimeme lo siguiente
    // guarda en la variable nombre el valor que encuentres en la etiqueta que se llame 'txtNombre'
        $nombre = $_POST['txtNombre']; 
        echo "Hola ".$nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="clase2.php" method="post">
    Nombre:
    <input type="text" name="txtNombre"> <!--Le ponemos un nombre para pasarselo al metodo post-->
    <br/>
    <input type="submit" value="Enviar">
    </form>

</body>
</html>
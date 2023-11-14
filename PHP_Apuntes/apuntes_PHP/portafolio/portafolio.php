<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<?php

if ($_POST) {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    
    $fecha = new DateTime();
    $imagen =$fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $imagen_temporal = $_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);
    $objconexion = new conexion();

    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objconexion->ejecutar($sql);   

    header("location:portafolio.php");
}

if ($_GET) {
    $id = $_GET['borrar'];
    $objconexion = new conexion();
    $imagen = $objconexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);
    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objconexion->ejecutar($sql); 
    header("location:portafolio.php");
}

$objconexion = new conexion();
$proyectos = $objconexion->consultar("SELECT * FROM `proyectos`");

?>

<br><br>
<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">
                        <br>
                        Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                        <br>
                        Imagen del proyecto <input required class="form-control" type="file" name="archivo" id=""> 
                        <br>
                        Descripcion: 
                        <textarea required class="form-control" name="descripcion" rows="3"></textarea>
                        <br>
                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">
                    </form>        
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($proyectos as $proyecto){ ?>
                        <tr>
                            <td><?php echo $proyecto['nombre']; ?></td>
                            <td><img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt=""></td>
                            <td><?php echo $proyecto['descripcion']; ?></td>
                            <td><a class="btn btn-danger" href="?borrar=<?php echo $proyecto['id'];?>">Eliminar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

<?php include("pie.php"); ?>
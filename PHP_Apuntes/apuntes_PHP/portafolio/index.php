<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<?php
$objconexion = new conexion();
$proyectos = $objconexion->consultar("SELECT * FROM `proyectos`");
?>

    <br><br>
    <div class="p-5 mb-4 bg-light">
        <div class="container">
          <h1 class="display-3">Bienvenido</h1>
          <p class="lead">Este es un portafolio privado</p>
          <hr class="my-2">
          <p>Mas informacion</p>
        </div>
      </div>

      
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php foreach($proyectos as $proyecto){ ?>
    <div class="col">
      <div class="card h-100">
        <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
          <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<?php include("pie.php"); ?>
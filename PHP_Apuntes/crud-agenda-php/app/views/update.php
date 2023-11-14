<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar contacto</h1>
            <hr>
            <div>
                <input type="text" value="<?php echo $contacto["id"]?>" class="form-control" id="id" hidden>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" value="<?php echo $contacto["nombres"]?>" class="form-control" id="nombres">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" value="<?php echo $contacto["apellidos"] ?>" class="form-control" id="apellidos">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" value="<?php echo $contacto["telefono"] ?>" class="form-control" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" value="<?php echo $contacto["email"] ?>" class="form-control" id="email">
                </div>

                <button id="actualizar" class="btn btn-outline-warning">Actualizar contacto</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/update.controller.php"
?>
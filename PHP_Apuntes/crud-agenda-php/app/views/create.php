<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar contacto</h1>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>

                <button id="agregar" class="btn btn-outline-success">Agregar contacto</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/create.controller.php";
?>
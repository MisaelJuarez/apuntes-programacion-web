<div class="container my-4">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 border border-warning border-4 rounded-2 p-4 bg-secondary text-white">
            <h1 class="text-center">Actualizar contacto</h1>
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
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" value="<?php echo $contacto["fecha"] ?>" class="form-control" id="fecha">
                </div>
                <div class="mb-3">
                    <label for="hora" class="form-label">Hora</label>
                    <input type="time" value="<?php echo $contacto["hora"] ?>" class="form-control" id="hora">
                </div>
                <div class="mb-3">
                    <label for="IDmedico" class="form-label">Medico</label>
                    <select id="IDmedico" class="form-select">
                        <option value="1">Luis Torres Puebla</option>
                        <option value="2">Karla Gomez Guzman</option>
                        <option value="3">Karla Andrea Martinez Aguilar</option>
                        <option value="4">Mauricio Ivan Palma Hernandez</option>
                        <option value="5">Jose Luis Hernandez Garces</option>
                    </select>
                    <!-- <input type="text" class="form-control" id="IDmedico"> -->
                </div>

                <button id="actualizar" class="btn btn-warning w-100">Actualizar</button>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php 
    require "./app/controllers/update.controller.php"
?>
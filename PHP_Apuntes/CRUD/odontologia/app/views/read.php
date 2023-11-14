<div class="container">
    <div class="row my-4">
        <div class="col">
            <a href="./create" class="btn btn-info">Agregar Cita</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-info table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Medico</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contactos as $contacto):
                    ?>
                    <tr>
                        <td><?php echo $contacto["nombres"] ?></td>
                        <td><?php echo $contacto["apellidos"] ?></td>
                        <td><?php echo $contacto["telefono"] ?></td>
                        <td><?php echo $contacto["fecha"] ?></td>
                        <td><?php echo $contacto["hora"] ?></td>
                        <td><?php echo $contacto["nombre_medico"] ?></td>
                        <td>
                            <a href="./update&id=<?php echo  $contacto["id"]?>" class="btn btn-warning text-white">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarContacto(<?php echo  $contacto['id']?>)" class="btn btn-danger text-white">Eliminar</button>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    require "./app/controllers/read.controller.php"
?>
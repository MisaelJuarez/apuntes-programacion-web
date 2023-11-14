<div class="container">
    <div class="row my-4">
        <div class="col">
            <a href="./create" class="btn btn-outline-success">Agregar contacto</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
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
                        <td><?php echo $contacto["email"] ?></td>
                        <td>
                            <a href="./update&id=<?php echo  $contacto["id"]?>" class="btn btn-outline-warning">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarContacto(<?php echo  $contacto['id']?>)" class="btn btn-outline-danger">Eliminar</button>
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
<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->create([
        "nombres" => $_POST["nombres"],
        "apellidos" => $_POST["apellidos"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
    ])
?>
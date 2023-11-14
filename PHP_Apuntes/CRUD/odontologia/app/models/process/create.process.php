<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->create([
        "nombres" => $_POST["nombres"],
        "apellidos" => $_POST["apellidos"],
        "telefono" => $_POST["telefono"],
        "fecha" => $_POST["fecha"],
        "hora" => $_POST["hora"],
        "IDmedico" => $_POST["IDmedico"],
    ])
?>
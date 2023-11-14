<?php
session_start();
if ($_POST) {
    if ($_POST['usuario']=="misaelZKR" && $_POST['contrasenia']=="1234") {
        $_SESSION['usuario']="misaelZKR";
        header("location:index.php");
    } else{
        echo "<script> alert('Usuario o contraseñia incorrectos') </script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Login</title>  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4">   
                 
            </div>

            <div class="col-md-4">
            <br>
            <div class="card">
                <div class="card-header">
                    Iniciar seción 
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        Usuario: <input class="form-control" type="text" name="usuario" id="">
                        <br>
                        Contraseña: <input class="form-control" type="password" name="contrasenia" id="">
                        <br>
                        <button class="btn btn-success" type="submit">Entrar al portafolio</button>
                    </form>
                </div>
            </div>
            </div>
            
            <div class="col-md-4">

            </div>
        </div>
    </div>
  
</body>

</html>
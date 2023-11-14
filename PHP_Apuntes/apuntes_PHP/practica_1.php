<?php
    if ($_POST) {
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        if ($valorA > $valorB) {
            echo "El valor ".$valorA." Es mayor al valor ".$valorB."<br>";
        } else if($valorA < $valorB) {
            echo "El valor ".$valorA." Es menor al valor ".$valorB."<br>";
        } else {
            echo "Los dos valores son iguales"."<br>";
        }

        $suma = $valorA + $valorB;
        $resta = $valorA - $valorB;
        $multi = $valorA * $valorB;
        $div = $valorA / $valorB;

        echo "Sus operaciones basicas son las siguientes"."<br>";
        echo "Suma: ".$suma."<br>";
        echo "Resta: ".$resta."<br>";
        echo "Multiplicacion: ".$multi."<br>";
        echo "Division: ".$div."<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="practica_1.php" method="post">
        Valor A: 
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>
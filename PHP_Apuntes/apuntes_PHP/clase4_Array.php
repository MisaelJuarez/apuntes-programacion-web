<?php 

$frutas = array("Manzana", "Naranja", "Pera", "Uva");

print_r($frutas); #Nos muestra como estan ordenado nuestro array
print("<br><br>");

#Para cambiarle el indice a un array hacemos lo siguiente
# colocamos cual es el inice que queramos que tengo indicandole con una flecha como esta en el codigo
$colores = array("a"=>"azul","r"=>"rojo","b"=>"blanco","n"=>"negro");
print_r($colores);

print("<br><br>");

echo "Array impreso con un for";
print("<br>");
for($i=0;$i<4;$i++){
    echo $frutas[$i]."<br>";
}

print("<br><br>");

echo "Array con indices ya determinados impreso con un foreach";
print("<br>");
foreach($colores as $i=>&$valor){
    echo "El valor ".$valor." Tiene el indice: ".$i."<br>";
}

?>
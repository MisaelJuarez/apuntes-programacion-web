<?php
$txtNombre = "";
$rgdLenjuague="";

$chkphp="";
$chkhtml="";
$chkcss="";

$lsAnime="";

$txtComentario="";

if($_POST){
    // Con un if ternario preguntamos si hay informacion del txtNombre asignaselo. 
    // De lo contrario envia un espacio vacio
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre']:"";
    $rgdLenjuague = (isset($_POST['lenguaje'])) ? $_POST['lenguaje']:"";
    $chkphp= (isset($_POST['chkphp']) == "si") ? "checked":"";
    $chkhtml= (isset($_POST['chkhtml']) == "si") ? "checked":"";
    $chkcss= (isset($_POST['chkcss']) == "si") ? "checked":"";
    $lsAnime=(isset($_POST['lsAnime']))? $_POST['lsAnime']: "";
    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario']:"";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
    <strong>Hola</strong>: <?php echo $txtNombre;?><br>
    <strong>Tu Lenguaje es</strong>: <?php echo $rgdLenjuague;?><br>
    <strong>Estas aprendiendo</strong>:<br>  
    <?php echo ($chkphp=="checked")?"- PHP":"";?><br>
    <?php echo ($chkhtml=="checked")?"- HTML":"";?><br>
    <?php echo ($chkcss=="checked")?"- CSS":"";?><br>
    <strong>El Anime que te gusta es</strong>: <?php echo $lsAnime; ?><br>
    <strong>Tu mensaje es: </strong><?php echo $txtComentario; ?><br><br>
    <?php } ?>

    <form action="clase9_ValoresInputText.php" method="post">
    Nombre:<br> 
    <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
    <br><br>
    ¿Te gusta?:
    <br>php: <input type="radio" <?php echo ($rgdLenjuague=="php")?"checked":"";?> name="lenguaje" value="php" id="">
    <br>html: <input type="radio" <?php echo ($rgdLenjuague=="html")?"checked":"";?> name="lenguaje" value="html" id="">
    <br>css: <input type="radio" <?php echo ($rgdLenjuague=="css")?"checked":"";?> name="lenguaje" value="css" id=""><br><br>

    Estas aprendiendo...
    <br>php:<input type="checkbox" <?php echo $chkphp?> value="si" name="chkphp" id="">
    <br>html:<input type="checkbox" <?php echo $chkhtml?> value="si" name="chkhtml" id="">
    <br>css:<input type="checkbox" <?php echo $chkcss?> value="si" name="chkcss" id=""><br><br>
    
    ¿Que Anime te gusta?<br>
    <select name="lsAnime" id="">
        <option value="">[Ninguna serie]</option>
        <option value="Naruto"<?php echo ($lsAnime=="Naruto")?"selected" : "";?>>Naruto</option>
        <option value="Dragon" <?php echo ($lsAnime=="Dragon")?"selected" : "";?>>Dragon Ball</option>
        <option value="Pokemon" <?php echo ($lsAnime=="Pokemon")?"selected" : "";?>>Pokemon</option>
    </select>
    <br><br>
    ¿Tienes alguna duda?<br>
    <textarea name="txtComentario" id="" cols="30" rows="10">
<?php echo $txtComentario; ?>
    </textarea>
    <br><br>
    <input type="submit" value="Enviar Informacion">
    </form>
</body>
</html>
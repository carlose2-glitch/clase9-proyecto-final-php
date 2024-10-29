<?php
include "conexion.php";
$fecha=date("Y-m-d");


$oculto = trim("$_POST[oculto]");
$respuesta = trim("$_POST[respuesta]");
$autor=trim("$_POST[autor]");

if(!empty($respuesta) && !empty($autor)){
    $sql="insert into respuesta (id_tema, respuesta, autor, fecha) value('$oculto','$respuesta','$autor','$fecha')";
if(mysqli_query($conex,$sql))
{
print "se inserto con exito";
}
else
{
print "Estamos en mantenimiento";
}

}else{
    print "debe llenar todos los espacios";
}

?>
<meta http-equiv="refresh" content="2;URL=temas.php?cual=<?php print $_POST['oculto']; ?>" />
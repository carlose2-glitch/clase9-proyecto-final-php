<?php
include "conexion.php";
$fecha=date("Y-m-d");
$hora=date("H:i:s");
$titulo=trim("$_POST[titulo]");
$contenido=trim("$_POST[contenido]");
$autor=trim("$_POST[autor]");
echo "<script>console.log('$titulo');</script>";


if(!empty($titulo) && !empty($contenido) && !empty($autor)){

    echo "<script>console.log('se puede guardar');</script>";
    $sql="insert into tema(titulo, tema, autor, fecha, hora) values ('$titulo','$contenido','$autor', '$fecha', '$hora')";

    if(mysqli_query($conex,$sql))
    {
    print "se inserto con exito";
    }
    else
    {
    print "Estamos en mantenimiento";
    }
    
}else{

    print "debe llenar todo el formulario";
   
}

 ?>
<meta http-equiv="refresh" content="2;URL=agregar_tema.php" />
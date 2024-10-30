<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
</head>
<body class="flex flex-col items-center bg-zinc-500 text-white">

<?php 
include "conexion.php";
include "menu.php";

//extract($_POST);?>
<br>

<form id="form1" name="form1" method="post" action="" class="">
<table align ="center" class="">
<tr>
<td class="p-4"><label for="buscar" class="text-white font-bold">Temas</label></td>
<td class="p-4"><input type="text" name="buscar" id="buscar" class="border outline-none rounded text-black" /></td>
<td class="p-4"><input type="submit" name="button" id="button" class="text-white cursor-pointer bg-green-500 p-[0.5rem] rounded-md font-bold hover:scale-110 transition" value="Buscar por temas" /></td>
</tr>
</table>
</form>

<form id="form2" name="form2" method="post" action="">
<table align ="center">
<tr>
<td class="p-4"><label for="autor">Lista de autores</label></td>
<td class="p-4">
<select name="autor" id="autor" class="outline-none text-black"> 
<?php 
$sql4="select autor from tema group by autor order by autor";
$con4=mysqli_query($conex,$sql4);
while($autor=mysqli_fetch_array($con4))
{?>
<option value="<?php print $autor[0]; ?>"> <?php print $autor[0]; ?></option>
<?php }?>
</select>
</td>

<td><input type="submit" name="button2" id="button2" value="Buscar" class="cursor-pointer font-bold bg-green-400 p-[0.5rem] rounded transition hover:scale-110" /></td>

</tr>
</table>
</form>

<br>
<table width="600" class="border border-white" align ="center">
<tr class="border border-white">
<td width="271" align="center">Temas</td>
<td width="75" align="center">Autor</td>
<td width="89" align="center">Fecha</td>
<td width="68" align="center">Respuestas</td>
</tr>
<?php 
if(@$_POST['buscar'])
{ 
$sql="select id, titulo, autor, fecha from tema where (tema like '%$_POST[buscar]%' or titulo like '%$_POST[buscar]%') order by id desc";
}
else if(@$_POST['autor'])
{
$sql="select id, titulo, autor, fecha from tema where autor='$_POST[autor]' order by id desc";
} 
else
{ 
$sql="select id,titulo,autor,fecha from tema order by id desc";
}
$con=mysqli_query($conex,$sql);
while($ver=mysqli_fetch_array($con)){
?> <tr class="text-center">
<td><a class="cursor pointer hover:text-green-600" href="temas.php?cual=<?php print $ver[0]?>"><?php print $ver[1]?></a></td>
<td align="center"><?php print $ver[2]?></td>
<td align="center"><?php print $ver[3]?></td>
<td align="center">

<?php 
$sql2="select id from respuesta where id_tema='$ver[0]'";
$filas=mysqli_query($conex,$sql2);
print mysqli_num_rows($filas);
?>
</td>
</tr><?php }?>
</table>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tema</title>
</head>
<body>
    <?php  include "menu.php";?>
    <br><br>
    <form action="agregar_tema2.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="titulo">titulo</label>
                </td>
                <td>
                    <input type="text" class="border border-black" name="titulo" id="titulo">
                </td>
            </tr>
            <tr>
                <td><label for="contenido">Mensaje:</label></td>
                <td><textarea class="border border-black" name="contenido" id="contenido" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><label for="autor">Autor:</label></td>
                <td><input class="border border-black" type="text" name="autor" id="autor"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="border border-black" type="submit" name="button" value="Enviar" id="button"></td>
            </tr>
        </table>

    </form>
</body>
</html>
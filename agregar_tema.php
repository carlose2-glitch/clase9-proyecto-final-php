<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tema</title>
</head>
<body class="bg-zinc-500 flex items-center flex-col w-full h-screen">
    <?php include "menu.php";?>
    <br><br>
    <form action="agregar_tema2.php" method="post">
        <table class="text-white">
            <tr>
                <td>
                    <label for="titulo">titulo</label>
                </td>
                <td>
                    <input type="text" class="rounded outline-none text-black" name="titulo" id="titulo">
                </td>
            </tr>
            <tr>
                <td><label for="contenido">Mensaje:</label></td>
                <td><textarea class="outline-none text-black rounded" name="contenido" id="contenido" cols="45" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><label for="autor">Autor:</label></td>
                <td><input class="rounded outline-none text-black" type="text" name="autor" id="autor"></td>
            </tr>
            <tr class="text-center">
                <td colspan="2"><input class="bg-green-500 p-[0.5rem] rounded cursor-pointer hover:scale-110 transition font-bold" type="submit" name="button" value="Enviar" id="button"></td>
            </tr>
        </table>

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio</title>
</head>
<body>
    <h1>Peso manzanas</h1>
    <form action="logica.php" method="post">
        <input type="number" step="0.01" name="peso" placeholder="Ingresar peso de manzanas">
        <br><br>
        <button class="estilo" type="submit" name="enviar" value="calcular">Calcular</button>
    </form>
</body>
</html>
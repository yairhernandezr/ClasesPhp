<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio</title>
</head>
<body>
<h1>Calculadora de Pago de Entradas</h1>
    <form action="logica.php" method="post">
        <input type="number" name="cantidad" placeholder="Cantidad de entradas" required><br>
        <input type="number" placeholder="Precio por entrada:" name="precio" step="10000" required><br>

        <button type="submit" value="Calcular">Calcular Pago</button>
    </form>
</body>
</html>
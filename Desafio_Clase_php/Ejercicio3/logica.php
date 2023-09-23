<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio</title>
</head>
<body>
<?php
    // Obtener los valores del formulario
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cantidadEntradas = $_POST['cantidad'];
        $precioEntrada = $_POST['precio'];
    }

    // Calcular el descuento según la cantidad de entradas
    function dcto($a){
        if($a == 4){
            return 0.20;
        }elseif($a == 3){
            return 0.15;
        }else{
            return 0.10;
        }
    }

    // Calcular el valor total sin descuento
    function bPagar($a, $b){
        return $a * $b;
    }

    // Calcular el valor del descuento
    function vDcto($a, $b){
        return (($a * $b) * dcto($a));
    }

    // Calcular el total a pagar con el descuento aplicado
    function nPagar($a, $b){
        return bPagar($a, $b) - vDcto($a, $b);
    }

    // Mostrar resultados
    if($cantidadEntradas > 4){
        echo "<p>La cantidad maxima de entradas por usuario es 4</p>";
        echo "<h1>Calculadora de Pago de Entradas</h1>";
        echo "<form action='logica.php' method='post'>";
        echo "<input type='number' name='cantidad' placeholder='Cantidad de entradas' required><br>";
        echo "<input type='number' placeholder='Precio por entrada' name='precio' step='10000' required><br>";
        echo "<button type='submit' value='Calcular'>Calcular Pago</button>";
        echo "</form>";
    }else{
        echo "<h1>Resumen de Pago de Entradas</h1>";
        echo "Cantidad de entradas compradas: $cantidadEntradas<br>";
        echo "Precio por entrada: $$precioEntrada<br>";
        echo "Valor total de las entradas (sin descuento): $".bPagar($cantidadEntradas, $precioEntrada) ."<br>";
        echo "Descuento aplicado: " .((dcto($cantidadEntradas)) * 100) ."% = ".vDcto($cantidadEntradas, $precioEntrada) ."<br>";
        echo "Total a pagar (con descuento): $".nPagar($cantidadEntradas, $precioEntrada) ."<br>";
        echo "<a href='index.php'>Vender nuevas entradas</a>";
    }
?>

</body>
</html>
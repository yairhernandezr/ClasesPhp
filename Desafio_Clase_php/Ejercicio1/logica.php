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

    function PorcentajeDct($a){
        if($a >= 10.01){
            return 0.20;
        }elseif($a >= 5.01 && $a <= 10){
            return 0.15;
        }elseif($a >= 2.01 && $a <= 5){
            return 0.10;
        }else{
            return 0;
        }
    }

    function vPagar($a, $b){
        return $a * $b;
    }

    function descuento($a, $b){
        return vPagar($a, $b) * PorcentajeDct($a);
    }

    function netoPagar($a, $b){
        return $a - $b;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $peso = $_POST["peso"];
        $kgManzana = 4200;
        echo "<h3>Total a facturar</h3>";
        echo "Cantidad de kilos: " .$peso ."<br>";
        echo "Valor unitario: " .$kgManzana ."<br>";
        echo "Valor total: " .vPagar($peso, $kgManzana) ."<br>";
        echo "Porcentaje de dcto: " .(PorcentajeDct($peso, $kgManzana) * 100) ."%<br>";
        echo "Descuento de: " .(descuento($peso, $kgManzana)) ."<br>";
        echo "Neto a pagar: ".(netoPagar(vPagar($peso, $kgManzana), descuento($peso, $kgManzana)));
    }

    echo "<h1>Peso manzanas</h1>";
    echo "<form action='logica.php' method='post'>";
        echo "<input type='number' step='0.01' name='peso' placeholder='Ingresar el primer numero'>";
        echo "<br><br>";
        echo "<button class='estilo' type='submit' name='enviar' value='calcular'>Calcular</button>";
    echo "</form>";
?>
</body>
</html>
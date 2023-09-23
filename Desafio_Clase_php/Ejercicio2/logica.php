<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Desafio</title>
</head>
<body>
<?php
    // Obtener los valores del formulario
    if($_SERVER["REQUEST_METHOD" == "POST"]){
        $horaEntrada = $_POST['entrada'];
        $horaSalida = $_POST['salida'];
        date_default_timezone_set("America/Bogota");
    } 

    // Convertir las horas de entrada y salida a minutos desde la medianoche
    function minutosEntrada($hora) {
        list($horas, $minutos) = explode(':', $hora);
        return intval($horas) * 60 + intval($minutos);
    }

    function minutosSalida($hora) {
        list($horas, $minutos) = explode(':', $hora);
        return intval($horas) * 60 + intval($minutos);
    }

    // Calcular el tiempo de estacionamiento en minutos
    function tiempo($a, $b){
        return $a - $b;
    }

    // Calcular el tiempo de estacionamiento en horas y minutos
    function horas($a){
        return $a / 60;        
    }

    function minutos($a){
        return $a % 60;
    }

    // Calcular el costo total
    $tarifa = 1500; // Tarifa por hora o fracción
    $totalPagar = ceil($tiempoEstacionamiento / 60) * $tarifa;   

    // Mostrar resultados
    echo "la hora es: " .date("h:i:sa");
    echo "<h1>Resumen de Pago de Estacionamiento</h1>";
    echo "Hora de entrada: $horaEntrada<br>";
    echo "Hora de salida: $horaSalida<br>";
    echo "Tiempo en el estacionamiento:";
    echo "Total a pagar: $$totalPagar";
?>

</body>
</html>
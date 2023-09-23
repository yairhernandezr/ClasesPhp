<?php
// Obtener los valores del formulario
date_default_timezone_set("America/Bogota");

if(isset($_POST['entrada'])){
    $horaEntrada = date("h:i");
    $auxiliar = $horaEntrada;
    echo "Hora de entrada: $horaEntrada<br>";
    echo "<form action='logica2.php' method='post'>";
        echo "<button type='submit' name='salida'>Salir</button><br><br>";
    echo "</form>";
}if(isset($_POST['salida'])){
    $horaSalida = date("h:i");
    $horaEntrada = $auxiliar;
    echo "<h1>Resumen de Pago de Estacionamiento</h1>";
    echo "Hora de entrada: $horaEntrada<br>";
    echo "Hora de entrada: $horaSalida<br>";
    echo "Tiempo en el estacionamiento: $horas horas y $minutos minutos<br>";
    echo "Total a pagar: $$totalPagar";
    echo "<form action='logica2.php' method='post'>";
        echo "<button type='submit' name='entrada'>Entrar</button><br><br>";
    echo "</form>";
}

// Convertir las horas de entrada y salida a minutos desde la medianoche
$minutosEntrada = intval(substr($horaEntrada, 0, 2)) * 60 + intval(substr($horaEntrada, 3, 2));
$minutosSalida = intval(substr($horaSalida, 0, 2)) * 60 + intval(substr($horaSalida, 3, 2));

// Calcular el tiempo de estacionamiento en minutos
$tiempoEstacionamiento = $minutosSalida - $minutosEntrada;

// Calcular el tiempo de estacionamiento en horas y minutos
$horas = floor($tiempoEstacionamiento / 60);
$minutos = $tiempoEstacionamiento % 60;

// Calcular el costo total
$tarifa = 1500; // Tarifa por hora o fracción
$totalPagar = ceil($tiempoEstacionamiento / 60) * $tarifa;

// Mostrar resultados

?>

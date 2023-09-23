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
    if(isset($_POST['vec'])){
        $vector = $_POST['vec'];
        $n = count($vector);
        $suma = 0;
        for($i = 0; $i < $n; $i++){
            for($i = 0; $i < $n; $i++){
                echo "Notas ingresadas $i: $vector[$i] <br>";
                $suma = $suma + $vector[$i];
            }
        }

        echo "La suma de las $n notas ingresadas es: $suma <br>";
        echo "El promedio es: ". promedio() ."<br>";
        echo comparacion(promedio());
    }

    function promedio(){
        $vector = $_POST['vec']; $n = count($vector);
        $suma = 0;
        for($i = 0; $i < $n; $i++){
            for($i = 0; $i < $n; $i++){
                $suma = $suma + $vector[$i];
            }
        }
        return $suma / $n;
    }

    function comparacion($a){
        if(promedio() >= 7){
            return "Aprobó";
        }elseif(promedio() >= 5.1 && promedio() <= 6.9){
            return "Regular. Pasaste raspando";
        }else{
            return "Reprobó o perdió el semestre, perdiste tu platica";
        }
    }
        
    ?>

    <form action="logica.php" method="post">
        <?php
            echo "<h2>Calcular promedio estudiante</h2>";
            echo "<p><input type='text' name='numero' placeholder='Cantidad de elementos'/> <br><br>";
            echo "<input type='submit' value='generar'> <br><br>";

            if(isset($_POST['numero'])){
                $x = $_POST['numero'];
                for($i=1; $i<=$x; $i++){
                    echo "<input type='number' name='vec[]' size='10' placeholder='nota $i' min='0' max='10' required> <br>";
                }
            }

            echo "<br> <input type='submit' value='promedio'>";
        ?>
    </form>
</body>
</html>
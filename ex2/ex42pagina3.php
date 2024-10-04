<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.4 ex3</title>
</head>
<body>

    <p>COINCIDÈNCIES</p>

    <?php
        session_start();
        
        // $_SESSION["frase1"]
        // $_POST["frase2"]

        $palabras1 = explode(" ", $_SESSION["frase1"]);
        $palabras2 = explode(" ", $_POST["frase2"]);

        $coincidencia = false;

        for ($i = 0; $i < count($palabras1); $i++) {
            for ($j = 0; $j < count($palabras2); $j++) {
                if ($palabras1[$i] == $palabras2[$j])  {
                    echo "La paraula '" . $palabras1[$i] . "' està a les dues frases.<br>";
                    $coincidencia = true;
                }
            }
        }

        if (!$coincidencia) {
            echo "No hi ha cap coincidència.";
        }
    ?>

    <a href="ex42pagina1.php">Torna a jugar</a>
</body>
</html>
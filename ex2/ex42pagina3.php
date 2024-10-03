<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.4 ex3</title>
</head>
<body>

    <p>ENDEVINA EL NOMBRE</p>


    
    <?php
        session_start();

        echo "<form method='post' action='ex41pagina3.php'>
                <input type='number' name='endevina'>
                <input type='submit'>
                </form>";

        if (isset($_POST["endevina"])) {
            
            if ($_POST["endevina"] < $_SESSION["ocult"]) {
                echo "<br><br>El nombre ocult es més gran.";
            } else if ($_POST["endevina"] > $_SESSION["ocult"]) {
                echo "<br><br>El nombre ocult es més petit";
            } else {
                echo "<br><br>Felicitats, el nombre es correcte!";
                echo "<br>Tornar a jugar --> <a href='ex41pagina1.php'>Clic</a>";
            }
        }

        // echo "Nombre ocult: " .$_SESSION["ocult"];

    ?>

</body>
</html>
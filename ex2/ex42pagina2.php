<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.4 ex2</title>
</head>
<body>

    <p>ENREGISTRA FRASE 2</p>
    <?php
        session_start();
        $_SESSION["frase1"] = $_POST["frase1"];
    ?>
    
    <form method="post" action="ex42pagina3.php">
        <input type="text" name="frase2">
        <input type="submit">
    </form>
</body>
</html>
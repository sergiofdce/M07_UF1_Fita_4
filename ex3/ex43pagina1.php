<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 1.4 ex4</title>
    <style>
        .keyboard { margin: 20px; }
        .display { 
            padding: 10px;
            margin: 20px;
            border: 1px solid #ccc;
            min-height: 30px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    
    // Inicializar la variable de sesión si no existe
    if (!isset($_SESSION['texto'])) {
        $_SESSION['texto'] = '';
    }
    
    // Añadir letra si se recibe por GET
    if (isset($_GET['letra'])) {
        $_SESSION['texto'] .= $_GET['letra'];
    }
    ?>

    <!-- Mostrar el texto acumulado -->
    <div class="display">
        <?php echo htmlspecialchars($_SESSION['texto']); ?>
    </div>

    <!-- Teclado virtual -->
    <div class="keyboard">
        <?php
        $letras = range('A', 'Z');
        foreach ($letras as $letra) {
            echo "<a href='?letra=$letra'>$letra</a> ";
        }
        ?>
    </div>
    
</body>
</html>
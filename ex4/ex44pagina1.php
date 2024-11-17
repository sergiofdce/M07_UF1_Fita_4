<?php
session_start();

// Inicializar la variable de sesión si no existe
if (!isset($_SESSION['notas'])) {
    $_SESSION['notas'] = "";
}

// Procesar el formulario cuando se envía
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['texto']) && !empty($_POST['texto'])) {
        // Añadir el nuevo texto con dos saltos de línea
        $_SESSION['notas'] .= $_POST['texto'] . "\n\n";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tomar Notas</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Tomar Notas</h1>
    
    <form method="POST" action="">
        <textarea name="texto" rows="5" cols="50"></textarea>
        <br>
        <input type="submit" value="Guardar Nota">
    </form>

    <h2>Notas guardadas:</h2>
    <pre><?php echo htmlspecialchars($_SESSION['notas']); ?></pre>
</body>
</html>

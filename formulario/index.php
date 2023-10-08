<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Página Principal</h1>
    <?php
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
        
        if ($nombre != null) 
            echo "<h2>Bienvenido, " . htmlspecialchars($nombre) . "!</h2>";

        else{
            echo "<h2>Bienvenido a la página principal.</h2>";
        }
    ?>
    <a href="form.php">Formulario</a>
    <?php
        $edad = isset($_POST["edad"]) ? $_POST["edad"] : null;
        $correo = isset($_POST["correo"]) ? $_POST["correo"] : null;
        $contrasena = isset($_POST["contrasena"]) ? $_POST["contrasena"] : null;
        
        if ($nombre == null && $edad == null && $correo == null && $contrasena == null) 
            echo "<p>Por favor, complete todos los campos del formulario.</p>";
    ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<title>Página Principal</title>
</head>
<body>
    <h1>Página Principal</h1>
    <p>Bienvenido a la página principal.</p>


    <a href="form.php">Formulario</a>
    <?php

        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        if (isset($_GET["nombre"])) 
        {
            $nombre = $_GET["nombre"];
            echo "<p>Bienvenido, " . htmlspecialchars($nombre) . "!</p>";
        }

    ?>


</body>
</html>
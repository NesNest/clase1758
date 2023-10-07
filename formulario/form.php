<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<h1>Ingrese los datos</h1>
<body>
<h3>Agregar Información</h3>
    <form action="index.php" method="POST">
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" min="0" max="120" required><br><br>

        <label for="correo">Correo Electronico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <label for="contrasena">Contraseña: </label>
        <input type="password" id="contrasena" name="contrasena" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
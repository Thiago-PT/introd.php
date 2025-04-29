<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a PHP</title>
</head>
<body>
    <h1>Página principal del sitio</h1>
    <h2>Edwin Santiago Plata Torrado</h2>
    <h6>I love windows</h6>
    <!--Formulario de inicio de sesión-->
    <h2>Inicio de sesion</h2>
    <form action="modelo/loguear.php" method = "post">
        <label for="">E-mail:</label>
        <input type="text" name="email" id="" required>
        <br><br>
        <label for="">Password:</label>
        <input type="text" name = "password" id="" required>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="POST" action="recibir-post.php">
        <p>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        </p>
        <p>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">

        </p>

        <input type="submit" value="Enviar datos">
        </form>
</body>
</html>
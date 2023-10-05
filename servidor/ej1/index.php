<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda/Nuevo Contacto</title>
    <link rel="stylesheet" href="./style/index.css">
</head>
<body>
    <div class="new">
        <h1>Añadir Contacto</h1>
        <form method="post" action="./contactos.php">
            <label for="name">Nombre</label>
            <input type="text" class="dato" name="name" id="name">
            <label for="surname">Apellidos</label>
            <input type="text" class="dato" name="surname" id="surname">
            <label for="age">Edad</label>
            <input type="number" class="dato" name="age" id="age">
            <input type="submit" name="add" class="add" value="Agregar">
        </form>
    </div>
</body>
</html>
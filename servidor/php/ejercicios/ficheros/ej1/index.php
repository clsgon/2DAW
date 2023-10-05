<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda/Nuevo Contacto</title>
    <style>
        .new{
            display: grid;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            border-radius: 1em;
            width: fit-content;
            padding: 0.8em;
            margin: 5em auto auto auto;
        }

        .new form input{
            display: block;
            margin-bottom: 2em;
            margin-top: 0.5em;
        }

        .new form .dato{
            width: 25em;
            height: 2em;
        }

        .new form label{
            text-transform: uppercase;
        }

        .new form .add{
            margin-left: 10em;
        }
    </style>
</head>
<body>
    <div class="new">
        <h1>Añadir Contacto</h1>
        <form method="post">
            <label for="name">Nombre</label>
            <input type="text" class="dato" name="name" id="name">
            <label for="surname">Apellidos</label>
            <input type="text" class="dato" name="surname" id="surname">
            <label for="age">Edad</label>
            <input type="number" class="dato" name="age" id="age">
            <input type="button" name="add" class="add" value="Agregar">
        </form>
    </div>
</body>
</html>
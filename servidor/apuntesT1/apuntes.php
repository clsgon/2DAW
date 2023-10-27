<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuntes php</title>
</head>
<body>
    <h1>Apuntes PHP: Servidor</h1>
    <div class="taller">
        <h3>Formulario Taller</h3>
        <p> -Action:  Envía datos a la página pasada por este atributo</p>
        <form action="./apuntes.php" method="post">
            <p> -POST: Envía los datos sin mostrarlos en la cabecera del navegador<p>
        </form>
        <form action="./apuntes.php" method="get">
            <p> -GET: Envía los datos y los muestra en la cabecera del navegador</p>
        </form>
        <form action="./apuntes.php" method="post">
            <label for="nombreParaFront">
                <p> - Label: Sirve para asociar una descripción a input, obligatorio para el responsive</p>
                <p> - Name: Atributo de input, necesario para asociarlo a los datos enviados por GET/POST</p>
                <p> - Id: Atributo necesario para las clases en css o por ejemplo, para asociarlo al label y al js</p>
                <p> - Placeholder: Atributo obligatorio para dar información de formato de lo que quieres
                        que te pasen en el input</p>
                <p> - Required: Atributo opcional según si quieres que el dato sea obligatorio antes de enviar
                        dicho formulario o no</p>
            </label>
            <input type="text" name="nombreParaMetodo" id="nombreParaFront" placeholder="Obligatorio" required>
            <label for="number">
                <p> - Input:number: Obligatorio poner este input en vez de text, si el dato que se va
                        introducir es solo númerico, por ejemplo la edad</p>
            </label>
            <input type="number" name="number" id="number">
            <label for="submit">
                <p> - Input:submit: Input de tipo botón, obligatorio para enviar los datos, no es recomendable,
                    pero se puede sustituir por un button type="submit"</p>
                <p> - Value: atribut de input:submit es el texto dentro del botón,
                        si no se pone se pondra el valor "enviar" en el idioma de tu navegador</p>
            </label>
            <input type="submit" value="Enviar">
            <input type="submit">
            <button type="submit">Enviar button no input</button>
        </form>
    </div>

    <div class="rubio">
        <h3>Cuadernillo rubio</h3>
        <p>Para este ejercicio tenemos que tener en cuenta como recibir datos,
                guardarlos en variables, mostrarlos y en algunos casos retrocederlos</p>
        <p>Para recibir datos de una página con un formulario se hace de la siguiente forma: </p>
        <ul>
            <li>Para recoger datos del método Post: $_POST["name"]</li>
            <li>Para recoger datos del método Get: $_GET["name"]</li>
            <li>Para recoger datos del cualquier método: $_REQUEST["name"]</li>
        </ul>
        <p>Para guardarlo en una variable por ejemplo con le método POST, creamos la variable con un dolar
            y le asignamos el valor del $_POST["name"]</p>
        <p>        Ejemplo: $varName = $_POST["name"];</p>
        <p>Para mostrar datos en php, usamos (echo), para concatenar utilizamos el punto o podemos introducer
                nombres de variables dentro de las comillas dobles que forman un string</p>
        <h4><b>Enviar datos hacia detras</b></h4>
        <p>Para enviar datos hacia detras podemos usar el type hidden de input y lo enviamos a través del value</p>
        <form action="./apuntes.php" method="post">
            <input type="hidden" name="devolver" value="DatoADevolver">
        </form>
    </div>

    <div class="csv">
        <h3>Ficheros csv: Agenda, taller</h3>
        <p>Para csv tenemos que leer el fichero(fgets), guardarlo(explode) y mostrarlo(echo).</p>
        <p>Primero creamos una variable donde abrimos el archivo pasandole, el path y el modo</p>
        <p>El modo puede ser tres tipos</p>
        <ul>
            <li>r: Lectura</li>
            <li>w: Escritura, pero sobreescribe</li>
            <li>a: Escritura, pero no sobreescribe</li>
        </ul>
        <p>Segundo, creamos un bucle con la función fgets, donde en cada iteración guardamos
            de forma separada el archivo</p>
        <p>Tercero lo cerramos y por último lo mostramos con echo usando el contenido de cada array</p>
        <?php
            //Primero
            $fd = fopen("./prueba.csv", "modo");
            //Segundo
            while ($linea = fgets($fd)) //En cada iteración hasta que termine el file, guardara una línea en la var
            {
                //Hacemos un array por cada columna, donde en cada array guardamos los datos de cada columna
                $c1 = explode(",", $linea)[0]; //El cero significa primera columna
                $c2 = explode(",", $linea)[1]; //El uno significa segunda columna
            }
            fclose($fd);
        ?>
    </div>
    <div class="session">
        <h3>Session: Chat</h3>
    </div>
    <div class="json">
        <h3>JSON: contaminación, paises, perros</h3>
    </div>
    <div class="cookies">
        <h3>COOKIES: ropa</h3>
    </div>
</body>
</html>
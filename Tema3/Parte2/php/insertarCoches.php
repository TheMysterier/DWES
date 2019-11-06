<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio 1</title>
        <link href="..\css\estilos.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <header></header>
        <nav><ul>
            <li><a href = "listarCoches.php">Principal</a></li>
            <li><a href = "insertarCoches.php">Insertar coche</a></li>
        </ul></nav>
        <section>
            <?php
                require_once 'insertar.php';
            ?>
                <form action='insertar.php' method='post' id='formulario' name='formulario'>
                <p>Marca: <input type='text' required name='marca' id='marca'/></p>
                <p>Modelo: <input type='text' required name='modelo' id='modelo'/></p>
                <p>Precio: <input type='number' required name='precio' id='precio'/></p>
                <p>Stock: <input type='number' required name='stock' id='stock'/></p>
                <p><input type='submit' value='Enviar'> <input type='reset'/></p>
                </form>
            
        </section>
        <footer>Manuel Martínez Chanivet</footer>
    </body>
</html>
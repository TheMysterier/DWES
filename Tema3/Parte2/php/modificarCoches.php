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
                include 'conecta.php';
                $id = $_GET['id'];
                $sql="select * from coches where id = ".$id;
                $resultado=mysqli_query($conexion,$sql);

                $coche=mysqli_fetch_array($resultado);
            ?>
                <form action='modificar.php?id=<?=$id?>' method='post' id='formulario' name='formulario'>
                <p>Marca: <input type='text' value=<?=$coche["marca"] ?> required name='marca' id='marca'/></p>
                <p>Modelo: <input type='text' value=<?=$coche["modelo"] ?> required name='modelo' id='modelo'/></p>
                <p>Precio: <input type='number' value=<?=$coche["precio"] ?> required name='precio' id='precio'/></p>
                <p>Stock: <input type='number' value=<?=$coche["stock"] ?> required name='stock' id='stock'/></p>
                <p><input type='submit' value='Enviar'> <input type='reset'/></p>
                </form>
        </section>
        <footer>Manuel Martínez Chanivet</footer>
    </body>
</html>
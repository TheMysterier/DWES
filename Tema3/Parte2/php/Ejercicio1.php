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
            <li>Principal</li>
            <li>Insertar coche</li>
            <li>Borrar coche</li>
            <li>Mdificar coche</li>
        </ul></nav>
        <section>
            <?php require_once 'conecta.php';
                $sql="SELECT * FROM coches";
                $resultado=mysqli_query($conexion,$sql);
                if(mysqli_num_rows($resultado)>0) {
            ?>

            <table>
                <caption>Coches del concesionario</caption>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>

                    <?php while($fila=mysqli_fetch_assoc($resultado)) {?>
                    <tr>
                        <td><?=$fila['id']?></td>
                        <td><?=$fila['marca']?></td>
                        <td><?=$fila['modelo']?></td>
                        <td><?=$fila['precio']?></td>
                        <td><?=$fila['stock']?></td>
                    </tr>

                    <?php
                            }
                        }else{
                            echo '0 Registros';
                        }
                        mysqli_close($conexion);
                    ?>
                </tbody>
            </table>
        </section>
        <footer>Manuel Martínez Chanivet</footer>
    </body>
</html>
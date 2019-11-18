<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/estilos.css">
	
		<title>Inicio</title>
	  </head>
<body>
    <header><img src="http://www.maredu.com.br/wp-content/uploads/2017/09/banner-maredu-1.jpg" width="100%" height="200px"></header>
    <?php
        require_once 'nav.php';
    ?>

    <section>
        <?php require_once 'conecta.php';
            $sql="SELECT * FROM coches";
            $resultado=mysqli_query($conexion,$sql);
            if(mysqli_num_rows($resultado)>0) {
        ?>

        <caption>Coches del concesionario</caption>
        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acción</th>
                </tr>

                <?php while($fila=mysqli_fetch_assoc($resultado)) {?>
                <tr>
                    <td><?=$fila['id']?></td>
                    <td><?=$fila['marca']?></td>
                    <td><?=$fila['modelo']?></td>
                    <td><?=$fila['precio']?></td>
                    <td><?=$fila['stock']?></td>
                    <td><a href="modificarCoches.php?id=<?=$fila['id']?>"><img src="data:image/png;base64,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" weidth="15px" height="15px"/></a>
                    <a href="eliminar.php?id=<?=$fila['id']?>"><img src="data:image/png;base64,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" width="15px" height="20px"/></a></td>
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
    <?php
        require_once 'footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejercicio 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/estilos.css">
    </head>

    <body>
        <header><img src="http://www.maredu.com.br/wp-content/uploads/2017/09/banner-maredu-1.jpg" width="100%" height="200px"></header>
        <?php
            require_once 'nav.php';
        ?>
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
        <?php
        require_once 'footer.php';
        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
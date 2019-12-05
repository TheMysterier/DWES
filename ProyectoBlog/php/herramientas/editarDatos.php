<?php
    include "insertado/redireccion.php";
?>

<h1 class="titulos">Mis datos</h1>

<div id="verEntradas">
    <p>Edita tus datos de usuario.</p>
    <form method="post" action="./helpers/updateData.php">
        <?php
            $aux = $_SESSION["username"];
            $checkingUser = "select * from usuarios where nombre='$aux'";
            $result = mysqli_query($conexion, $checkingUser);

            if(mysqli_num_rows($result)>0){ 
                while ($fila= mysqli_fetch_assoc($result) ){
                    ?>
                    <p>Nombre de usuario</p>
                    <input class="form-control mr-sm-2 inputMargen" type="text" name="nuevoNombre" placeholder="Nombre de usuario" value="<?= $fila['nombre']?>" required>
                    <p>Apellidos</p>
                    <input class="form-control mr-sm-2 inputMargen" type="text" name="apellidos" placeholder="Apellidos" value="<?= $fila['apellidos']?>" required>
                    <p>E-mail</p>
                    <input class="form-control mr-sm-2 inputMargen" type="email" name="email" placeholder="E-mail" value="<?= $fila['email']?>" required>
                    
                    <?php
                }
            }
        ?>
        
        <br><br>
        <input type="hidden" name="nombre" value="<?= $_SESSION['username']?>">
        <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit" name="actualizar">Actualizar</button>
    </form>
</div>
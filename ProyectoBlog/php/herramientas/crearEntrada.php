<h1 class="titulos">Crear nueva entrada</h1>
<div id="verEntradas">
    <p>Crea una nueva entrada hablando sobre una categoría de videojuegos.</p>
    <?php
        require_once "insertado/redireccion.php";
        require_once 'helpers/conecta.php';
        if(isset($_GET["editarId"])) {
            $id = $_GET["editarId"];
            $checkingEntr = "SELECT * FROM entradas WHERE id='$id'";
            $result = mysqli_query($conexion, $checkingEntr);
            $fila = mysqli_fetch_assoc($result);

            ?>

            <form method="post" action="./helpers/updateEntrada.php">
                <input class="form-control mr-sm-2 inputMargen" type="text" name="titulo" placeholder="Introduce título de la entrada" value="<?= $fila['titulo']?>" required>
                <textarea class="form-control mr-sm-2 inputMargen" name="texto" placeholder="Introduce texto de la entrada" rows="5" cols="70" required><?= $fila['descripcion']?></textarea>
                <p>Categoría</p>
                <select name="categoria">
                    <?php
                        $query = "select * from categorias";
                        $result = mysqli_query($conexion, $query);

                        if(mysqli_num_rows($result)>0){ 
                            while ($fila= mysqli_fetch_assoc($result) ){
                                ?><option> <?= $fila['nombre']?></option><?php
                            }
                        }
                    ?>
                </select>
                <br><br>
                <input type="hidden" name="idEntrada" value="<?= $id?>">
                <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit" name="actualizar">Guardar</button>
            </form>
            <?php
        } else {
            ?>
            <form method="post" action="./helpers/insertEntrada.php">
                <input class="form-control mr-sm-2 inputMargen" type="text" name="titulo" placeholder="Introduce título de la entrada" required>
                <textarea class="form-control mr-sm-2 inputMargen" name="texto" placeholder="Introduce texto de la entrada" rows="5" cols="70" required></textarea>
                <p>Categoría</p>
                <select name="categoria">
                    <?php
                        $query = "select * from categorias";
                        $result = mysqli_query($conexion, $query);

                        if(mysqli_num_rows($result)>0){ 
                            while ($fila= mysqli_fetch_assoc($result) ){
                                ?><option> <?= $fila['nombre']?></option><?php
                            }
                        }
                    ?>
                </select>
                <br><br>
                <input type="hidden" name="nombre" value="<?= $_SESSION['username']?>">
                <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit" name="crear">Crear</button>
            </form>
            <?php
        }
    ?>
</div>
<?php
    include "insertado/redireccion.php";
?>
<div id="buscar">
    <h3 class="titulos">Buscar</h3>
    <form id="buscarForm" class="form-inline" method="POST" action="indexUser.php">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." name="frase" required>
        <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit" name="buscar">Buscar</button>
    </form>
</div>

<div id="herramientas">
    <?php require_once "helpers/cuenta.php"; ?>
    <h3 class="titulos">Bienvenido, <?=$_SESSION['username']?></h3>

    <div id="btnHerramientas">
        <form class="formHerramientas" method="post" action="indexUser.php">
            <button class="btn btn-outline-success my-2 my-sm-0 botones btnHerramienta" type="submit" name="makeEntrada">Crear entradas</button>
        </form>
        
        <form class="formHerramientas" method="post" action="indexUser.php">
            <button class="btn btn-outline-success my-2 my-sm-0 botones btnHerramienta" type="submit" name="makeCategory">Crear categorias</button>
        </form>

        <form class="formHerramientas" method="post" action="indexUser.php">
            <button class="btn btn-outline-success my-2 my-sm-0 botones btnHerramienta" type="submit" name="editData">Mis datos</button>
        </form>
        
        <a href="index.php?logout=1" class="btn btn-outline-success my-2 my-sm-0 botones">Cerrar sesión</a>
    </div>
</div>
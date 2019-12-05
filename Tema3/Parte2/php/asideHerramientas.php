<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    echo '
    <div id="buscar">
        <h3 class="titulos">Buscar</h3>
        <form id="buscarForm" class="form-inline">
            <input class="form-control mr-sm-2" type="text">
            <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit">Buscar</button>
        </form>
    </div>

    <div id="herramientas">
        <?php require_once "cuenta.php"; ?>
        <h3 class="titulos">Bienvenido,';?> <?=$_SESSION["username"]; ?> <?php echo '</h3>
        <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit">Crear entradas</button>
        <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit">Crear categorias</button>
        <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit">Mis datos</button>
        <a href="index.php?logout=1" class="btn btn-outline-success my-2 my-sm-0 botones">Cerrar sesión</a>
    </div>';

?>
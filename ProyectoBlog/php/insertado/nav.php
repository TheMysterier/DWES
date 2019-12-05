<?php
    require_once 'helpers/conecta.php';

    $sql="select * from categorias";
    $resultado= mysqli_query($conexion, $sql);
    echo "<nav>
        <ul>
            <li><a href='indexUser.php'> Inicio </a></li>";
            if(mysqli_num_rows($resultado)>0){ 
                while ($fila= mysqli_fetch_assoc($resultado) ){
                    ?><li><a href='indexUser.php?idCateg=<?= $fila["id"]?>'> <?= $fila['nombre']?> </a></li><?php
                }
            }
            echo "<li><a href=''> Sobre mi </a></li>
            <li><a href=''> Contacto </a></li>
        </ul>
    </nav>";

    
?>
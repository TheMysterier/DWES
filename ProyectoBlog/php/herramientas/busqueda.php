<h1 class="titulos">Resultados de la búsqueda</h1>
<div id="listaEntradas">
    <?php
        require_once "helpers/cuenta.php";

        if(isset($_POST["buscar"])) {
            $frase = $_POST["frase"];
        }
        $checkingEntr = "SELECT * FROM entradas WHERE titulo LIKE '%$frase%'";
        $result = mysqli_query($conexion, $checkingEntr);

        if(mysqli_num_rows($result)>0){ 
            while ($fila= mysqli_fetch_assoc($result) ){
                $aux = $fila['categoria_id'];
                $checkingCateg = "SELECT nombre FROM categorias WHERE id='$aux'";
                $result2 = mysqli_query($conexion, $checkingCateg);
                $nomCateg= mysqli_fetch_assoc($result2);

                $aux = $fila['usuario_id'];
                $checkingUser = "SELECT nombre FROM usuarios WHERE id='$aux'";
                $result3 = mysqli_query($conexion, $checkingUser);
                $nomUser= mysqli_fetch_assoc($result3);

                if($nomUser["nombre"] === $_SESSION["username"]){
                    ?>
                    <div class="entrada">
                        <div id="tituloIconos">
                            <h4><?= $fila['titulo']?></h4>
                            <a href="indexUser.php?editarId=<?=$fila['id']?>"><img class="editarBorrar" src="https://image.flaticon.com/icons/svg/1159/1159633.svg"/></a>
                            <a href="helpers/deleteEntrada.php?id=<?=$fila['id']?>"><img class="editarBorrar" src="https://image.flaticon.com/icons/svg/61/61391.svg"/></a>
                        </div>
                        
                        <p><?= $nomCateg['nombre']?> | <?= $fila['fecha']?></p>
                        <p><?= $fila['descripcion']?></p>
                    </div>
                <?php
                } else {
                    ?>
                    <div class="entrada">
                        <div id="tituloIconos">
                            <h4><?= $fila['titulo']?></h4>
                        </div>
                        
                        <p><?= $nomCateg['nombre']?> | <?= $fila['fecha']?></p>
                        <p><?= $fila['descripcion']?></p>
                    </div>
                <?php
                }
            }
        }

        $checkingEntr = "SELECT * FROM entradas WHERE descripcion LIKE '%$frase%'";
        $result = mysqli_query($conexion, $checkingEntr);

        if(mysqli_num_rows($result)>0){ 
            while ($fila= mysqli_fetch_assoc($result) ){
                $aux = $fila['categoria_id'];
                $checkingCateg = "SELECT nombre FROM categorias WHERE id='$aux'";
                $result2 = mysqli_query($conexion, $checkingCateg);
                $nomCateg= mysqli_fetch_assoc($result2);

                $aux = $fila['usuario_id'];
                $checkingUser = "SELECT nombre FROM usuarios WHERE id='$aux'";
                $result3 = mysqli_query($conexion, $checkingUser);
                $nomUser= mysqli_fetch_assoc($result3);

                if($nomUser["nombre"] === $_SESSION["username"]){
                    ?>
                    <div class="entrada">
                        <div id="tituloIconos">
                            <h4><?= $fila['titulo']?></h4>
                            <a href="indexUser.php?editarId=<?=$fila['id']?>"><img class="editarBorrar" src="https://image.flaticon.com/icons/svg/1159/1159633.svg"/></a>
                            <a href="helpers/deleteEntrada.php?id=<?=$fila['id']?>"><img class="editarBorrar" src="https://image.flaticon.com/icons/svg/61/61391.svg"/></a>
                        </div>
                        
                        <p><?= $nomCateg['nombre']?> | <?= $fila['fecha']?></p>
                        <p><?= $fila['descripcion']?></p>
                    </div>
                <?php
                } else {
                    ?>
                    <div class="entrada">
                        <div id="tituloIconos">
                            <h4><?= $fila['titulo']?></h4>
                        </div>
                        
                        <p><?= $nomCateg['nombre']?> | <?= $fila['fecha']?></p>
                        <p><?= $fila['descripcion']?></p>
                    </div>
                <?php
                }
            }
        }

        $checkingEntr = "SELECT * FROM entradas WHERE fecha LIKE '%$frase%'";
        $result = mysqli_query($conexion, $checkingEntr);

        if(mysqli_num_rows($result)>0){ 
            while ($fila= mysqli_fetch_assoc($result) ){
                $aux = $fila['categoria_id'];
                $checkingCateg = "SELECT nombre FROM categorias WHERE id='$aux'";
                $result2 = mysqli_query($conexion, $checkingCateg);
                $nomCateg= mysqli_fetch_assoc($result2);

                $aux = $fila['usuario_id'];
                $checkingUser = "SELECT nombre FROM usuarios WHERE id='$aux'";
                $result3 = mysqli_query($conexion, $checkingUser);
                $nomUser= mysqli_fetch_assoc($result3);

                if($nomUser["nombre"] === $_SESSION["username"]){
                    ?>
                    <div class="entrada">
                        <div id="tituloIconos">
                            <h4><?= $fila['titulo']?></h4>
                            <a href="indexUser.php?editarId=<?=$fila['id']?>"><img class="editarBorrar" src="https://image.flaticon.com/icons/svg/1159/1159633.svg"/></a>
                            <a href="helpers/deleteEntrada.php?id=<?=$fila['id']?>"><img class="editarBorrar" src="https://image.flaticon.com/icons/svg/61/61391.svg"/></a>
                        </div>
                        
                        <p><?= $nomCateg['nombre']?> | <?= $fila['fecha']?></p>
                        <p><?= $fila['descripcion']?></p>
                    </div>
                <?php
                } else {
                    ?>
                    <div class="entrada">
                        <div id="tituloIconos">
                            <h4><?= $fila['titulo']?></h4>
                        </div>
                        
                        <p><?= $nomCateg['nombre']?> | <?= $fila['fecha']?></p>
                        <p><?= $fila['descripcion']?></p>
                    </div>
                <?php
                }
            }
        }
    ?>
</div>
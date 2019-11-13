<?php
    require_once 'conecta.php';
    $errores = array();

    if(!empty($_POST)) {
        var_dump($_POST);
        $marca=isset($_POST['marca'])?mysqli_real_escape_string($conexion,trim($_POST['marca'])):false;
        $modelo=isset($_POST['modelo'])?mysqli_real_escape_string($conexion,trim($_POST['modelo'])):false;
        $precio=(int) $_POST['precio'];
        $stock=(int) $_POST['stock'];

        if(empty($marca)){
            $errores[marca] = "Error en la marca.";
        }elseif (empty($modelo)) {
            $errores[modelo] = "Error en el modelo.";
        }elseif (empty($precio)) {
            $errores[precio] = "Error en el precio.";
        }elseif (empty($stock)) {
            $errores[stock] = "Error en el stock.";
        }

        $sql="update coches set marca='$marca', modelo='$modelo', precio='$precio', stock='$stock' where id=".$_GET['id'];
        $resultado = mysqli_query($conexion,$sql);

        if($resultado){
            echo "Datos modificados correctamente";
            header("Location:listarCoches.php");
        }else {
            echo "Error:".mysqli_error($conexion);
            header("Location:modificarCoches.php");
        }
        
    
        
    } else
        if(count($errores) == 0){
            echo "Modifique un coche";
        }else{
            for($i = 0; $i < count($errores); ++$i) {
                echo $errores[$i];
            }
        }

    mysqli_close($conexion);
?>
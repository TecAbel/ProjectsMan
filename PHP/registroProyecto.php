<?php
    require 'config.php';
    if(!isset($_POST['txtNombreProyecto'])){
        $msg = "hubo un error, intente de nuevo";
    }
    else{
        $nombreProyecto = $_POST['txtNombreProyecto'];
        $sql = "INSERT INTO proyectos(nombre_proyecto) VALUES ('$nombreProyecto');";

        if(mysqli_query($conn, $sql)){
            $msg = true;
        }
        else{
            $msg = mysqli_error($conn);
        }
    }
    echo $msg;
    mysqli_close($conn);
?>
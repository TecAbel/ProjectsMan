<?php
    require 'config.php';
    if(!isset($_POST['txtNombreProyecto'])){
        $msg = "hubo un error, intente de nuevo";
    }
    else{
        session_start();
        $correo = $_SESSION['correo'];
        $fecha = $_POST['fecha'];
        $nombreProyecto = $_POST['txtNombreProyecto'];
        $sql = "INSERT INTO proyectos(nombre_proyecto) VALUES ('$nombreProyecto');";
        /*$sql2 = "INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle)
        VALUES ((SELECT * FROM ultimoproyecto),(SELECT num_usuario FROM usuarios WHERE correo = '$correo'), '$fecha', 'Se creó proyecto');";*/
        $sql2 = "INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle, detalle_avance)
        VALUES ((SELECT * FROM ultimoProyecto),(SELECT num_usuario FROM usuarios WHERE correo = '$correo'), '$fecha', 'Inicio de proyecto', 'Se creó proyecto')";

        if(mysqli_query($conn, $sql)){
            if(mysqli_query($conn, $sql2)){
                $msg = true;
            }
        }
        else{
            $msg = mysqli_error($conn);
        }
    }
    echo $msg;
    mysqli_close($conn);
?>
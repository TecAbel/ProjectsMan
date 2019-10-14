<?php
    require 'config.php';
    require 'SED.php';
    session_start();
    if(!$_SESSION['loggeo'] === true){
        header("Location: index");
    } 
    if(!empty($_POST)){
        $correo = $_SESSION['correo'];
        $numProyecto = SED::decryption($_POST['txtProjecto']);
        $fecha = $_POST['txtDate'];
        $nombreAvance = $_POST['txtAvance'];
        $detalleAvance = $_POST['txtAvanceDetalle'];
        $sql = "INSERT INTO avances(num_proyecto,num_usuario,fecha,nombre_detalle,detalle_avance)
        VALUES ('$numProyecto',(SELECT num_usuario FROM usuarios WHERE correo = '$correo'),'$fecha','$nombreAvance','$detalleAvance');";

        if(mysqli_query($conn, $sql)){
            $msg = true;
        }
        else{
            $msg = "Error: " . mysqli_error($conn);
        }

    }
    else{
        header("Location: ../proyectos");
    }

    echo $msg;
    mysqli_close($conn);
?>
<?php
    require 'config.php';
    require 'SED.php';

    if(!empty($_POST)){
        $numProyecto = SED::decryption($_POST['txtProjecto']);
        $fecha = $_POST['txtDate'];
        $nombreAvance = $_POST['txtAvance'];
        $detalleAvance = $_POST['txtAvanceDetalle'];
    }
    else{
        header("Location: ../proyectos");
    }

    
?>
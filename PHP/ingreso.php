<?php
    
    if((!$_POST['txtCorreo']) or ($_POST['txtPass'])){
        header("Location: ../index");
    }else{
        $msg = "";
        require_once 'config.php';

        $correo = mysqli_real_escape_string($conn,$_POST['txtCorreo']);
        $pase = mysqli_real_escape_string($conn,$_POST['txtPass']);

        $sql = "SELECT pase FROM usuarios WHERE correo = '$correo';";

        $resultado = $conn->query($sql);
        if($fila = mysqli_fetch_assoc($resultado)){
            require_once 'SED.php';
            $pase_db = $fila[0];
        }else{
            $msg = "Hubo un error: " . mysqli_error($conn);
        }
        return $msg;
        $conn->close();
    }

?>
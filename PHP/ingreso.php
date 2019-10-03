<?php
    
    if(empty($_POST['txtCorreo']) or empty($_POST['txtPass'])){
        $msg = "Hubo un error, vuelva a intentar, por favor.";
    }else{
        require 'config.php';

        $correo = mysqli_real_escape_string($conn,$_POST['txtCorreo']);
        $pase = mysqli_real_escape_string($conn,$_POST['txtPass']);
        $sql = "SELECT pase FROM usuarios WHERE correo = '$correo';";

        if($consulta = mysqli_query($conn, $sql)){
            $consulta_array = $consulta->fetch_assoc();
            $pase_db = $consulta_array['pase'];
            if(password_verify($pase,$pase_db)){
                session_start();
                $_SESSION['loggeo'] = true;
                $msg = true;
            }
            else{
                $msg = false;
            }
        }else{
            $msg = "Hubo un error: " . $conn->error();
        }
        $conn->close();
        echo $msg;
        
    }

?>
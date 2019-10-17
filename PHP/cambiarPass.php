<?php
    require 'config.php';
    require 'SED.php';

    $correo = mysqli_real_escape_string($conn, $_POST['txtCorreo']);
    $pass = mysqli_real_escape_string($conn, password_hash($_POST['txtPass1'], PASSWORD_DEFAULT));

    $sql = "UPDATE usuarios
    SET pase = '$pass' 
    WHERE correo = '$correo';";

    if(mysqli_query($conn, $sql)){
        $msg = true;
    }else{
        $msg = mysqli_error($conn);
    }

    echo $msg;
    mysqli_close($conn);
?>
<?php 
    require 'config.php';


    if(!$_POST){
        header("Location: ../index");
    }


    $nombre = mysqli_real_escape_string($conn, $_POST['txtNombre']);
    $correo = mysqli_real_escape_string($conn, $_POST['txtCorreo_conf']);
    $pase = mysqli_real_escape_string($conn, password_hash($_POST['txtPass1'], PASSWORD_DEFAULT));

    #solo en host
    $asunto = "Bienvendo(a) $nombre ";
    $carta = "¡Nos alegramos de tenerte con nosotros!\n \n \n";
    $carta .="Te damos una cordial bienvenida a ProjectsMan, y esperamos que te vaya de lo mejor usando nuestra app.\n";
    $carta.="!Mucho éxito, $nombre!\n";
    $carta.="Atte: Abelardo Aqui. Desarrollador.\n \nCorreo de contacto: abelardo96.work@gmail.com\n \n \nGRH: https://pm-beta.000webhostapp.com/";

    $sql = "INSERT INTO usuarios(correo,nombre_user,pase) VALUES ('$correo','$nombre','$pase');";

    if(mysqli_query($conn, $sql)){
        #mail($correo, $asunto, $carta);
        session_start();
        $_SESSION['loggeo'] = true;
        $mensaje = true;
    }else{
        $mensaje = "Hubo un error " . mysqli_error($conn);
    }

    mysqli_close($conn);
    echo $mensaje;
?>
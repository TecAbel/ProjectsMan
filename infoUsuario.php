<?php 
    require('PHP/repetitivo.php');
    require('PHP/peticiones.php');
    session_start();
    if(!$_SESSION['loggeo'] === true){
        header("Location: index");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información de usuario</title>
    <?php echo getLibreriasHtml()?>
    <script>
        window.addEventListener("load", function(){
            
            const script2 = document.createElement("script"),
                  script3 = document.createElement("script");
            
            script2.src = "JS/nav.js";
            script3.src = "JS/infoUsuario.js",
            document.body.appendChild(script2);
            document.body.appendChild(script3);
        });
    </script>
</head>
<body>
    <?php echo getHeroProject('Información de Usuario','Aquí podrás ver la información de un usuario registrado y editar algunas propiedades del mismo.');
    echo getNav();?>
    <div class="container">
        <form id="frmUsuario" onsubmit="javascript: return false;" method="post">
            <div class="card" style="margin: 0 auto;">
                <h5 class="card-header text-center">Alfredo</h5>
                <div class="card-body">
                    <div class="form-group focused">
                        <label for="txtCorreo" class="form-label">Correo:</label>
                        <input type="text" id="txtCorreo" name="txtCorreo" value="<?php echo getCorreo($_GET['URd']) ?>" class="form-input" readonly>
                    </div>
                    <div class="form-group focused">
                        <label for="txtPass" class="form-label">Contraseña:</label>
                        <input type="password" id="txtPass" name="txtPass" class="form-input">
                    </div>
                    <div class="form-group focused">
                        <label for="txtPass1" class="form-label">Confirmar contraseña:</label>
                        <input type="password" id="txtPass1" name="txtPass1" class="form-input">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success rounded-0 w-100" id="btnCambiar">Cambiar contraseña</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <? echo getFooter()?>
</body>
</html>
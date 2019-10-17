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
    <title>Nuevo Usuario</title>
    <?php echo getLibreriasHtml() ?>
</head>
<body>
    <?php echo getHeroProject('Usuarios','Aquí puedes ver los usuarios registrados y administrar su acceso.') ?>
    <?php echo getNav()?>
    <div class="clearfix">
        <div class="container form-nusuario">
            <form onsubmit="javascript:return false;" method="post" id="frmNUsuario">
                <div class="card" style="margin: 0 auto;">
                    <h3 class="text-center card-header text-uppercase">Nuevo usuario</h3>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <input autocomplete="off" type="text" id="txtNombre" name="txtNombre" class="text-capitalize form-input">
                        </div>
                        <div class="form-group">
                            <label for="txtCorreo" class="form-label">Correo</label>
                            <input autocomplete="off" type="text" id="txtCorreo" class="text-lowercase form-input">
                        </div>
                        <div class="form-group">
                            <label for="txtCorreo_conf" class="form-label">Confirmar correo</label>
                            <input autocomplete="off" type="text" id="txtCorreo_conf" name="txtCorreo_conf" class="text-lowercase form-input">
                        </div>
                        
                        <div class="form-group">
                            <label for="txtPass" class="form-label">Contraseña</label>
                            <input autocomplete="off" type="password" id="txtPass" class=" form-input">
                        </div>
                        <div class="form-group">
                            <label for="txtPass1" class="form-label">Confirmar contraseña</label>
                            <input autocomplete="off" type="password" id="txtPass1" name="txtPass1" class=" form-input">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success rounded-0 w-100" id="btnCCuenta">Crear cuenta</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container tabla-usuarios">
            <form onsubmit="javascript: return false;" method="post">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo getUsuarios() ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <?php echo getFooter() ?>
    <script src="JS/nav.js"></script>
    <script src="JS/animated-input.js"></script>
    <script src="JS/nuevo-usuario.js"></script>
</body>
</html>
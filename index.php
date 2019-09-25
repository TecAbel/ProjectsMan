<?php require ('recursosPhp/repetitivo.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProjectsMan</title>
    <?php echo getLibreriasHtml() ?>
</head>
<body>
    <div class="jumbotron hero">
        <div class="texto-hero">
            <h1 class="display-5 text-center">Bienvenido a ProjectsMan &copy</h1>
            <hr class="my-4 text-white" >
            <p class="lead text-center">Sistema de gestión de proyectos.</p>
        </div>    
    </div>
    <div class="container">
        <form method="post" id="formulario" onsubmit="javascript:return false;">
            <div class="card" style="margin: 0 auto;">
                <h4 class="text-uppercase card-header text-center">Login</h4>
                <div class="card-body">
                    <p class="card-title text-center">Ingrese su usuario y contraseña</p>
                    <div class="form-group">
                        <label for="txtCorreo" class="form-label">Correo</label>
                        <input class="text-lowarecase form-input"  id="txtCorreo" name="txtCorreo" type="email" >
                    </div>
                    <div class="form-group">
                        <label for="txtPass" class="form-label">Contraseña</label>
                        <input type="password" class="form-input" id="txtPass" name="txtPass">
                    </div>
                    <div class="form-gropup">
                        <button class="btn btn-primary w-100 rounded-0" id="btnEntrar">Entrar</button>
                    </div>
                    <p class="text-center" style="padding-top: 10px; margin-bottom: 5px;"><a class="badge badge-info rounded-0" href="nuevo-usuario">Crear cuenta</a></p>
                </div>
            </div>
        </form>
        
    </div>
    <?php echo getFooter() ?>
    <script src="recursosJS/animated-input.js"></script>
    <script src="recursosJS/login.js"></script>
</body>
</html>
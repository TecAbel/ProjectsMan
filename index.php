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
<body class="bg-light">
    <div class="jumbotron hero">
        <div class="texto-hero">
            <h1 class="display-5 text-center">Bienvenido a ProjectsMan &copy</h1>
            <hr class="my-4 text-white" >
            <p class="lead text-center">Este es un sistema de gestión de proyectos.</p>
        </div>    
    </div>
    <div class="container-fluid border border-secondary frmLogin">
        <form method="post" id="formulario" onsubmit="javascript:return false;">
            <h4 class="text-uppercase text-center">Login</h4>
            <p class="lead text-center">Ingrese su usuario y contraseña</p>
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
        </form>
    </div>
    <footer class="page-footer font-small bg-dark pt-4">
        <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Contacto</h5>
                    <p>Eje central N. XXXX, Niños Héroes, Benito juárez, CDMX <i class="fas fa-map-marker-alt"></i></p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Correos</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">ingjagm@gmail.com</a>
                        </li>
                        <li>
                            <a href="#">ingjagm@hotmail.com</a>
                        </li>
                        <li>
                            <a href="#">ingjagm@yahoo.com.mx</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Teléfono</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>55-55-55-55</p>
                        </li>
                        <li>
                            <p>55-55-55-55</p>
                        </li>
                        <li>
                            <p>55-55-55-55</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> Abelardo Aqui Arroyo</a>
        </div>
    </footer>
    <script src="recursosJS/animated-input.js"></script>
</body>
</html>
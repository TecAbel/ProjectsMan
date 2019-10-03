<?php
    function getLibreriasHtml(){
        $librerías = '<link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
        <!-- Jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
        <!-- Alertify-->
        <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/alertify.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.min.css"/>';
        return $librerías;
    }
    function getFooter(){
        $footer='<footer id="page-footer" class="page-footer text-small bg-dark pt-4">
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
    </footer>';
    return $footer;
    }
    function getHeroProject($titulo, $lead){
        $hero = '<div class="jumbotron hero-project">
                    <div class="texto-hero">
                        <h1 class="display-4">'.$titulo.'</h1>
                        <hr class="my-4 ">
                        <p class="lead">'.$lead.'</p>
                    </div>
                </div>
        
        ';
        return $hero;
    }
    function getNav(){
        $nav = '
        <div class="navegacion clearfix">
            <div id="menu-movil" class="menu-movil">
                <i class="fas fa-ellipsis-h"></i>
            </div>
            <div class="navegacion-768 clearfix">
                <img src="" alt="Logo" style="color:white;" class="logo">
                <nav id="nav" class="oculto">
                    <a class="" href="proyectos">Proyectos</a>
                    <a class="" href="#page-footer">Contacto</a>
                    <a class="" href="PHP/cerrarSesion.php">Cerrar sesión</a>
                </nav>
            </div>
        </div>';
        return $nav;
    }
?>
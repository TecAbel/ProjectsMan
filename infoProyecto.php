<?php 
    include('PHP/repetitivo.php');

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
    <title>Información de proyecto</title>
    <?php echo getLibreriasHtml() ?>
</head>
<body>
    <?php echo getHeroProject('Detalle de Proyecto 1','Aquí puedes ver los detalles del proyecto; avances, fechas, y más.') ?>
    <?php echo getNav(); ?>
    <div class="clearfix">
        <div class="container contendor-form">
            <form id="frmNuevoAvance" onsubmit="javascript:return false;" method="post">
                <div class="card w-100" style="margin: 0 auto; max-width: 40rem;">
                    <h5 class="card-header text-center">Nuevo avance</h5>
                    <div class="card-body">
                        <input type="text" id="txtProjecto" name="txtProjecto" value="<?php echo $_GET['sQrT'] ?>" style="visibility: hidden;">
                        <div class="form-group">
                            <label for="txtDate">Fecha: </label>
                            <input type="date" id="txtDate" name="txtDate" value="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="txtAvance">Nombre avance</label>
                            <input type="text" id="txtAvance" name="txtAvance" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="txtAvanceDetalle">Detalles del avance</label>
                            <textarea class="form-textarea" name="txtAvanceDetalle" id="txtAvanceDetalle" cols="30" rows="10"></textarea>
                        </div>
                        <!--<div class="form-group">
                            <input type="file" name="archivo" id="archivo-real" hidden>
                            <button class="btn btn-primary rounded-0" id="btnAgregarArchivo">Agregar archivo</button>
                            <label for="archivo" class="form-file" id="archivo-text">Sin archivo</label>
                        </div>-->
                        <div class="form-group">
                            <button id="btnAgregarP" name="btnAgregarP" class="btn btn-success w-100 rounded-0">Agregar avance</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="container contenedor-tarjetas">
            <hr class="my4">
            <h4 class="text-center">Avances registrados</h4>
            <hr class="my-4">
            <div class="container-fluid contenedor-tarjetas">
            <div class="card">
                    <h5 class="card-header text-center">Nombre avance</h5>
                    <div class="card-body">
                        <h5 class="card-title ">25/09/2019</h5>
                        <p class="text-card text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nam doloremque voluptates iste voluptate et, maxime ipsum placeat perspiciatis tempore possimus voluptas. Nemo, quia. Aliquam suscipit pariatur voluptatem velit iste.</p>
                        <h5 class="card-title">Archivos</h5>
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Archivo 1</a></li>
                                <li><a href="#">Archivo 2</a></li>
                            </ul>
                        </p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-info rounded-0 w-100">Editar avance</a>
                            
                        </div>
                        <div class="card-footer">
                        <a href="#" class="btn btn-danger rounded-0 w-100">Eliminar avance</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header text-center">Nombre avance</h5>
                    <div class="card-body">
                        <h5 class="card-title ">25/09/2019</h5>
                        <p class="text-card text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nam doloremque voluptates iste voluptate et, maxime ipsum placeat perspiciatis tempore possimus voluptas. Nemo, quia. Aliquam suscipit pariatur voluptatem velit iste.</p>
                        <h5 class="card-title">Archivos</h5>
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Archivo 1</a></li>
                                <li><a href="#">Archivo 2</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header text-center">Nombre avance</h5>
                    <div class="card-body">
                        <h5 class="card-title ">25/09/2019</h5>
                        <p class="text-card text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nam doloremque voluptates iste voluptate et, maxime ipsum placeat perspiciatis tempore possimus voluptas. Nemo, quia. Aliquam suscipit pariatur voluptatem velit iste.</p>
                        <h5 class="card-title">Archivos</h5>
                        <p class="card-text">
                            <ul>
                                <li><a href="#">Archivo 1</a></li>
                                <li><a href="#">Archivo 2</a></li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header text-center">Nombre avance</h5>
                    <div class="card-body">
                        <h5 class="card-title ">25/09/2019</h5>
                        <p class="text-card text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. A nam doloremque voluptates iste voluptate et, maxime ipsum placeat perspiciatis tempore possimus voluptas. Nemo, quia. Aliquam suscipit pariatur voluptatem velit iste.</p>
                        <h5 class="card-title">Archivos</h5>
                        <p class="card-text">
                            <ul>
                                
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo getFooter() ?>
    <script src="JS/animated-input.js"></script>
    <script src="JS/file-button.js"></script>
    <script src="JS/nav.js"></script>
    <script src="JS/avances.js"></script>
</body>
</html>
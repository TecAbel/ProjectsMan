<?php require('recursosPhp/repetitivo.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
    <?php echo getLibreriasHtml() ?>
</head>
<body>
    <?php echo getHeroProject('Proyectos','Aquí a modo de tarjetas podrás ver tus proyectos activos, así como su estado y último avance.') ?>
    <form id="formulario" method="post" onsubmit="javascript:return false;">
        <div class="card" style="margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Agregar proyecto</h5>
                <div class="form-group">
                    <label for="txtNombreProyecto" class="form-label">Nombre de proyecto</label>
                    <input type="text" id="txtNombreProyecto"  name="txtNombreProyecto" class="form-input">
                </div>
                <div class="form-group">
                    <button id="btnRegistrar" class="btn btn-success rounded-0 w-100">Agregar</button>
                </div>
            </div>
        </div>
    </form>
    <hr class="my-4">
    <h4 class="text-center">Proyectos Registrados</h4>
    <p class="text-small text-center"> <span class="text-warning">NOTA: </span>el último avance estará representado por un botón, al darle clic se verá el detalle de éste y el historial del proyecto.</p>
    <hr class="my-4">
    <div class="container-fluid contenedor-tarjetas">
        
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Proyecto 1</h5>
                <p class="card-text">Activo</p>
                <a href="#" class="btn btn-primary rounded-0 w-100">Requisición</a>
            </div>
        </div>
    </div>
    <?php echo getFooter() ?>
    <script src="recursosJS/animated-input.js"></script>
</body>
</html>
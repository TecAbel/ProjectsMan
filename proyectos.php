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
    <title>Proyectos</title>
    <?php echo getLibreriasHtml() ?>
    <script>
        window.addEventListener("load", function(){
            const script = document.createElement("script");
            const script2 = document.createElement("script"),
                  script3 = document.createElement("script");
            script.src = "JS/animated-input.js";
            script2.src = "JS/nav.js";
            script3.src = "JS/proyectos.js",
            document.body.appendChild(script);
            document.body.appendChild(script2);
            document.body.appendChild(script3);
        });
    </script>
</head>
<body>
    <?php echo getHeroProject('Proyectos','Aquí a modo de tarjetas podrás ver tus proyectos activos, así como su estado y último avance.') ?>
    <?php echo getNav()?>
    <div class="clearfix">
        <div class="container contendor-form">
            <form id="formulario" method="post" onsubmit="javascript:return false;">
                <div class="card" style="margin: 0 auto;">
                <h5 class="card-header">Agregar proyecto</h5>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="date" name="fecha"  value="<?php echo date("Y-m-d");?>">
                        </div>
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
        </div>
        <div class="container contenedor-tarjetas">
        <hr class="my-4">
            <h4 class="text-center">Registro de proyectos</h4>
            <hr class="my-4">
            <p class="text-small text-center"> <span class="text-warning">NOTA: </span>Para ver los avances registrados dé click en el botón de "Detalle de proyecto" del proyecto que desea revisar.</p>
            <div class="container-fluid contenedor-tarjetas">
                <?php echo getProyectos()?>
            </div>
        </div>
    </div>
    
    <?php echo getFooter() ?>
</body>
</html>
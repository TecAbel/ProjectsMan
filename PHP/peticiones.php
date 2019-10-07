<?php
    

    function getProyectos(){
        require 'config.php';
        include('SED.php');
        $texto ="";
        $sql = "SELECT * from peticion_proyectos;";
        $resultado = $conn->query($sql);
        if(mysqli_num_rows($resultado)>0){
            while($filas = $resultado->fetch_assoc()){
                $nombreProyecto = $filas['nombre_proyecto'];
                $estado = $filas['estado'];
                $numProyecto =SED::encryption($filas['num_proyecto']);
                if($estado == 1){
                    $estado = 'Activo';
                }else{
                    $estado = 'Terminado';
                }
                $numAvance = $filas['ultimo_avance'];
                if($numAvance){
                    $consulta = "select nombre_detalle FROM avances where num_avance = '$numAvance';";
                    $res = $conn->query($consulta);
                    if(mysqli_num_rows($res)>0){
                        $filasAvances = $res->fetch_assoc();
                        $numAvance = $filasAvances['nombre_detalle'];
                    }else{
                        $numAvance = "Error";
                    }
                }
                $texto = $texto. '
                <div class="card">
                    <h5 class="card-header text-center">'.$nombreProyecto.'</h5>
                    <div class="card-body">                
                    <p class="card-text">Estado: '.$estado.'</p>
                    <P class="card-text">Últmo avance: '.$numAvance.'</p>
                        <a href="infoProyecto?sQrT='.$numProyecto.'" class="btn btn-primary rounded-0 w-100">Detalle de proyecto</a>
                    </div>
                </div>
                ';
            }
        }
        else{
            $texto = '
            <h3 class="w-100 text-center">Sin proyectos registrados</h3>
            ';
        }
        return $texto;
        mysqli_close($conn);
    }

?>
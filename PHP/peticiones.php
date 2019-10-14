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
                    <P class="card-text">Último avance: '.$numAvance.'</p>
                        <a href="infoProyecto?sQrT='.$numProyecto.'" class="btn btn-primary rounded-0 w-100">Avances de proyecto</a>
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

    function getAvances($enNumP){
        require 'config.php';
        include('SED.php');
        $numProyecto = SED::decryption($enNumP);
        $texto ="";
        $sql = "SELECT nombre_detalle, date_format(fecha,'%d/%m/%y') as fecha, detalle_avance
        FROM avances
        WHERE num_proyecto = '$numProyecto';";
        $resultado = $conn->query($sql);
        if(mysqli_num_rows($resultado)>0){
            while($filas = $resultado->fetch_assoc()){
                $nombreAvance = $filas['nombre_detalle'];
                $fecha = $filas['fecha'];
                $detalles = $filas['detalle_avance'];
                $texto = $texto . '
                <div class="card">
                    <h5 class="card-header text-center">'.$nombreAvance.'</h5>
                    <div class="card-body">
                        <h5 class="card-title ">'.$fecha.'</h5>
                        <p class="text-card text-justify">'.$detalles.'</p>
                        <div class="card-footer">
                            <a href="#" class="btn btn-info rounded-0 w-100">Editar avance</a>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-danger rounded-0 w-100">Eliminar avance</a>
                        </div>
                    </div>
                </div>
                ';
            }
        }
        else{
            $texto ='<h3 class="w-100 text-center">Sin avances registrados</h3>';
        }
        return $texto;
        mysqli_close($conn);
    }



?>
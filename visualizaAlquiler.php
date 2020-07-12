<?php
    include 'encabezado.php';
    include 'conexion.php';

    echo('
        <div align="center" class="container"> 
        <br>
            <h3> Listado de Alquileres </h3>
    ');

    $sql = "SELECT * FROM alquiler";
    

    if ($resultado = $conexion->query($sql)) {
        echo('
            <table class="table">
                <thead class="blue white-text">
                    <tr>
                        <th scope="col">Id Alquiler</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Auto</th>
                        <th scope="col">Fecha Prestamo</th>
                        <th scope="col">Fecha Devolucion</th>
                        <th scope="col">Estado</th>
                        
                    </tr>
                </thead>
        ');

        while($row = $resultado->fetch_array()){ //cedula->'123', nombre->'maria',telefono ->'39293']
            $id_al= $row['idAlquiler'];
            $cliente = $row['cliente'];
            $auto = $row['auto'];
            $fecha_P = $row['fechaPrestamo'];
            $fecha_D = $row['fechaDevolución'];   
            if($row['estadoAlquiler'] == 1) {
                $estado = 'Activo' ; 
            }
            else{
                $estado = 'Terminado' ; 
            }
            echo('
                <tbody>
                    <tr>
                        <td>'.$id_al.'</td>
                        <td>'.$cliente.'</td>
                        <td>'.$auto.'</td>
                        <td>'.$fecha_P.'</td>
                        <td>'.$fecha_D.'</td>
                        <td>'.$estado.'</td>
                        
                    </tr>
                </tbody>
            ');                        
        }

        echo('
                
            </table>
        </div>
        ');   
    }
    
    include 'pie.php'
?>
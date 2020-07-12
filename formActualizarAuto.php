<?php
    include 'encabezado.php';
    include 'conexion.php';

    $placa = $_GET["id"];  // obtiene el codigo de la base de datos enviado por medio del boton Editar a traves de get 
    // Luego realiza la consulta en la base de datos de ese registro cuyo id coincida
    $sql = "SELECT * FROM autos where placa = '$placa'"; 
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array();  //cedula->'123', nombre->'maria',telefono ->'39293']
?>


<div class="container">
    <form id="formActualizarAuto"  method="POST">
        <br> <br>
        
        <div align= "center">  
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Actualizacion de Auto </h3>
        </div>    
        <!-- Material input -->
        <div class="md-form">
            <input type="hidden" id="placa" name="placa" value="<?php echo $row['placa'] ?>" class="form-control"> 
        </div>

        <div class="md-form">
             <label for="id">Placa Auto  : <?php echo $row['placa'] ?></label>
        </div>
        <br> <br>

        <select class="browser-default custom-select" id="marca" name="mark" required>
            <option value="" disabled selected>
            <?php if( $row['mark']==1) echo 'Ford';
                if( $row['mark']==2) echo 'Chevrolet';
                if( $row['mark']==3) echo 'Hyundai';
                 
            ?></option>
            <option value="1">Ford</option>
            <option value="2">Chevrolet</option>
            <option value="3">Hyundai</option>
        </select>
       

        <div class="md-form">
            <input  type="text" id="modelo" name="modelo"  value="<?php echo $row['modelo'] ?>"class="form-control" required>
            <label for="modelo">Modelo</label>
        </div>

        <input type="submit" class="btn btn-primary" value = "Actualizar"> 
        <a href="visualizaAutos.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


<?php
    include 'pie.php'
?>
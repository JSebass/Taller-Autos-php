<?php
    include 'encabezado.php';
    include 'conexion.php';

    $consulta = "SELECT * from clientes";
    $ejecutar = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
    $consulta1 = "SELECT * from autos";
    $ejecutar1 = mysqli_query($conexion,$consulta1) or die (mysqli_error($conexion));
?>

<div class="container">
    <br> <br>
    <form  id="formRegistroAlquiler" method="GET">
        
        <div align= "center">   
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Datos de Alquiler </h3>
        </div>  

        <!-- Material input -->
        <div class="md-form">
            <input type="text" id="id_Al" name="codAl" class="form-control" required>
            <label for="id_Al">Codigo Alquiler</label>
        </div>

        <div class="md-form">
            <select class="form-control" id="cliente" name="cliente" required>
                <option value="" disabled selected>Seleccione Cliente</option>
                <?php foreach($ejecutar as $opciones):?>
                    <option value="<?php echo $opciones['cedula'] ?>"><?php echo $opciones['cedula'] ?></option>
                    
                <?php endforeach ?>
            </select>
        </div>
        <div class="md-form">
            <select class="form-control" id="auto" name="auto" required>
                <option value="" disabled selected>Seleccione Auto</option>
                <?php foreach($ejecutar1 as $opciones1):?>
                    <option value="<?php echo $opciones1['placa'] ?>"><?php echo $opciones1['placa'] ?></option>
                    
                <?php endforeach ?>
            </select>
        </div>
        

        <div class="md-form">
            <input  type="date" id="fecha_al" name="fecha_al" class="form-control" required>
            <label for="modelo">Fecha De Alquiler</label>
        </div>

       <input type="submit" class="btn btn-primary"  value="Registrar"> 
        <a href="" class="btn btn-danger">Cancelar </a>
    </form>
</div>

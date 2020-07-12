<?php
    include 'encabezado.php';
    include 'conexion.php';

    $consulta = "SELECT * from alquiler";
    $ejecutar = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
    
?>

<div class="container">
    <br> <br>
    <form  id="formDevolver" method="GET">
        
        <div align= "center">   
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Datos de Alquiler </h3>
        </div>  

        <!-- Material input -->
        
        <div class="md-form">
            <select class="form-control" id="id_al" name="id_al" required>
                <option value="" disabled selected>Seleccione Codigo Alquiler</option>
                <?php foreach($ejecutar as $opciones):?>
                    <option value="<?php echo $opciones['idAlquiler'] ?>"><?php echo $opciones['idAlquiler'] ?></option>
                    
                <?php endforeach ?>
            </select>
        </div> 
                
        <?php 
        $idalquiler= $opciones['idAlquiler'];
        ?>
    
    
        <a href= "formAlquilerDevolver.php?id='. $idalquiler.'"  class="btn btn btn-secondary"> Devolver </a>
        <a href="" class="btn btn-danger">Cancelar </a>
    </form>
</div>
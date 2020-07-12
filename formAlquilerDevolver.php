<?php
    include 'encabezado.php';
    include 'conexion.php';

    $id_alq = $_GET["id"];  // obtiene el codigo de la base de datos enviado por medio del boton Editar a traves de get 
    // Luego realiza la consulta en la base de datos de ese registro cuyo id coincida
    $sql = "SELECT * FROM alquier where idAlquiler = '$id_alq'"; 
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array();  //cedula->'123', nombre->'maria',telefono ->'39293']
?>


<div class="container">
    <form action="./devolver.php" method="POST">
        <br> <br>
        
        <div align= "center">  
            <i class="far fa-id-card fa-lg black-text mr-md-5 mr-3 fa-2x"> </i>
            <h3> Devolver Auto </h3>
        </div>    
        <!-- Material input -->
        <div class="md-form">
            <input type="hidden" id="auto" name="auto" value="<?php echo $row['auto'] ?>" class="form-control"> 
        </div>

        

        <button type="submit" class="btn btn-primary" >Devolver </button>
        <a href="visualizaClientes.php" class="btn btn-danger">Cancelar </a>
    </form>
</div>


<?php
    include 'pie.php';
?>
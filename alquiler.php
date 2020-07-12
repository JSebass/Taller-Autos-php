<?php
    include 'encabezado.php';
    include 'conexion.php';
    $idAlquiler = $_GET["codAl"];
    $cliente = $_GET["cliente"];
    $fecha_Al= $_GET["fecha_al"];
    $fecha_Dev= NULL;
    $estado = 2; 
    $auto = $_GET["auto"];
    
    $sql="INSERT INTO alquiler (idAlquiler, fechaPrestamo, fechaDevolución, estadoAlquiler, cliente, auto)
          values('$idAlquiler','$fecha_Al','$fecha_Dev', '$estado','$cliente', '$auto')";
    $sql2 = "UPDATE autos SET estado=2  WHERE placa ='$auto'";

    mysqli_close($conexion);  // Cierra la conexion

?>

<?php
    include 'pie.php'
?>
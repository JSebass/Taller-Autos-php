<?php
    include 'encabezado.php';
    include 'conexion.php';
    $idAlquiler = $_GET["id_al"];
    
    

    mysqli_close($conexion);  // Cierra la conexion

?>

<?php
    include 'pie.php'
?>
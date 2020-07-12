<?php
    include 'encabezado.php';
    include 'conexion.php';
    $placa = $_POST["placa"];
    $marca = $_POST["mark"];
    $modelo = $_POST["modelo"];
    $estado = 1;

    $sql = "UPDATE autos SET mark='$marca', modelo='$modelo'
    WHERE placa ='$placa'";

    if($conexion->query($sql) === TRUE) {
        echo 1;
    }
    else{
        echo 0; 
    }
    mysqli_close($conexion);  // Cierra la conexion

    include 'pie.php'
?>
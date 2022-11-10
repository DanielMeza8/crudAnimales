<?php 
    include "../conexion.php";

    $conexion = conexion();
    $nombre = $_POST['nombre'];
    $region = $_POST['region'];
    $comida = $_POST['comida'];

    $query = "INSERT INTO t_animales (nombre, region, comida) VALUES ('$nombre','$region','$comida')";
    $respuesta = mysqli_query($conexion, $query);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "No se puedo agregar";
    }


?>
<?php 

    include "../conexion.php";

    $conexion = conexion();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $region = $_POST['region'];
    $comida = $_POST['comida'];
    $query = "UPDATE t_animales SET nombre = '$nombre', region = '$region', comida = '$comida' WHERE id_animal = '$id'";
    $respuesta = mysqli_query($conexion, $query);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "No se puede actualizar";
    }


?>
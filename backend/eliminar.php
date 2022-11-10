<?php 

    include "../conexion.php";

    $conexion = conexion();
    $id = $_GET['idanimal'];

    $query = "DELETE FROM t_animales WHERE id_animal = '$id'";
    $respuesta = mysqli_query($conexion, $query); 

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "No se puedo eliminar";
    }


?>
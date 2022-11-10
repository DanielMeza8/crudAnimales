<?php
    function conexion(){
        $servidor = 'localhost'; //127.0.0.1 loopback
        $usuario = 'root';
        $password = '123Yandari';
        $bd = 'webconexion1';
        $puerto = 3306;

        $conexion = mysqli_connect($servidor, $usuario, $password, $bd, $puerto);

        return $conexion;
    }

    // if(conexion()){
    //     echo "Estas conectado";
    // }else{
        //     echo "no estas conectado";
        // }
?>
<?php
include_once('conexion.php');
session_start();
$id = $_SESSION['id'];

    //Extraer imagen de la BD mediante GET
    $result = $conexion->query("SELECT * FROM usuarios WHERE id = $id");
    if ($result->num_rows > 0) {
        $imgDatos = $result->fetch_assoc();

        //Mostrar Imagen
        header("Content-type: image/jpg");
        echo $imgDatos['pixel'];
    } else {
       echo'no hay';
    }














$conexion->close();
?>
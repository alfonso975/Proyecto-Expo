<?php
    include_once('conexion.php');
    session_start();
    $id = $_SESSION['id'];

    $datos = $_GET['puntuacion'];
    $game = $_GET['game'];
    echo $datos;


    //CREAR TABLE............................
    $sql = "CREATE TABLE IF NOT EXISTS puntuaciones (
    id_Game INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    puntuacion INT(2) NOT NULL,
    juego VARCHAR(50) NOT NULL,
    id_user INT(5)
    )";
    // Condicional PHP que creará la tabla
    if (mysqli_query($conexion, $sql)) {
        // Mostramos mensaje si la tabla ha sido creado correctamente!
        echo "Table MyGuests created successfully";
    } else {
        // Mostramos mensaje si hubo algún error en el proceso de creación
        echo "Error al crear la tabla: " . mysqli_error($conexion);
    }
    //crear nuevo usuario
    $sql2 = "insert into puntuaciones 
    values(NULL,
    '$datos',
    '$game',  
    '$id')";
    if ($conexion->query($sql2) === TRUE) {
        echo "Registro ingresado correctamente.";
        header("Location: puntuar.php");
    } else {
    echo $conexion->error;
    }
    // Cerramos la conexión
    $conexion->close();
    //header("Location: index.php");
?>
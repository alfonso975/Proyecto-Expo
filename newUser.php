<?php
    include_once('conexion.php');
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $pais = $_POST["pais"];
    //CREAR TABLE............................
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pixel longblob NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    email VARCHAR(50),
    nombre VARCHAR(50) NOT NULL,
    edad INT(50) NOT NULL,
    sexo VARCHAR(50) NOT NULL,
    pais VARCHAR(50) NOT NULL 
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
    $sql2 = "insert into usuarios 
    values(NULL,
    '$imgContenido',
    '$user', 
    '$pass', 
    '$email',
    '$nombre',
    '$edad',
    '$sexo', 
    '$pais')";
    if ($conexion->query($sql2) === TRUE) {
        echo "Registro ingresado correctamente.";
    } else {
    echo $conexion->error;
    }
    // Cerramos la conexión
    $conexion->close();
    header("Location: inicio.html");
?>
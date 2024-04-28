<?php
//incluimos la conexion a la base de datos
    include_once('conexion.php');
    //iniciamos sesion php
    session_start();
    //validamos que quien haga los cambios sea un adminUser
    if ($_SESSION['usuario'] === 'admin') {
        $id = $_GET['id'];
        $type = $_GET['type'];
        if ($type === 'e') {
            $sql = "DELETE FROM usuarios WHERE id=$id;";
            if ($conexion->query($sql) === TRUE) {
                //de ser asi buscamos al usuario que se desea editar y hacemos los cambios
                $sql2 = "DELETE FROM puntuaciones WHERE id_user=$id;";
                if ($conexion->query($sql2) === TRUE) {
                    echo "Eliminación de registro exitosa";
                    header("Location: admin.php");
                } else {
                    echo "Eliminación de registro exitosa";
                    header("Location: admin.php");
                    $conexion->error;
                }
            } else {
                $conexion->error;
            }
            $conexion->close();
        } else {
            if ($type === 'c') {
                $usuarioU = $_GET['u'];
                $contraU = $_GET['c'];
                $name = $_GET['n'];
                $edad = $_GET['e'];
                $sql = "UPDATE usuarios SET usuario = '$usuarioU',
                pass = '$contraU',nombre = '$name',edad = '$edad'
                 WHERE id = $id";
                if ($conexion->query($sql) === TRUE) {
                    echo "Registro actualizado correctamente";
                    header("Location: admin.php");
                } else {
                    $conexion->error;
                };
                $conexion->close();
            }
        }
    } else {
        header("Location: inicio.html");
    }
?>

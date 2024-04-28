<?php
include_once("conexion.php");
session_start();
//creamos sesion y asignamos variables temporales de php para usarlas en la ejecucion global del programa
$userInput = $_POST["user"];
$contraInput = $_POST["pass"];
$result = $conexion->query("SELECT * FROM usuarios WHERE usuario = '$userInput' and pass='$contraInput'");
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    $_SESSION['active']=true;
    $_SESSION['id']=$data['id'];
    $_SESSION['usuario'] = $data['usuario'];
    $_SESSION['name'] = $data['nombre'];
    echo $_SESSION['id'];
    header('location: index.php');
} else {
    echo 'Nombre de usuario/contraseña inválidos';
    session_destroy();
}
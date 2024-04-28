<?php
    session_start();
    session_destroy();
    echo 'sesion cerrada correcatmente';
    header("Location: index.php");
?>
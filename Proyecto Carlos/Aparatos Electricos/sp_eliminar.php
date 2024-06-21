<?php
$id = $_GET['id'];


$db_host = "localhost";
$db_nombre = "dbaparatos";
$db_usuario = "root";
$db_password = "";
    $cnx = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
    $sql = "DELETE FROM aparatos where id like $id";
    $rta = mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Elimino!";
    }
    else {
        header("Location: index.php");
    }
?>
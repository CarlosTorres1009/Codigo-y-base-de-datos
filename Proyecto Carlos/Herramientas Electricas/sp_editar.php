<?php
$id = $_POST['id'];
$Nombre = $_POST['Nombre'];
$Referencia = $_POST['Referencia'];
$Entrada = $_POST['Entrada'];
$Salida = $_POST['Salida'];
$Total = $_POST['Total'];
$Precio = $_POST['Precio'];



$db_host = "localhost";
$db_nombre = "dbherramientase";
$db_usuario = "root";
$db_password = "";
    $cnx = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
    $sql = "UPDATE herramientase set Nombre='$Nombre', Referencia='$Referencia', Entrada='$Entrada', Salida='$Salida', Total='$Total', Precio='$Precio' where id like $id";
    $rta = mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se Actualizo!";
    }
    else {
        header("Location: index.php");
    }
?>
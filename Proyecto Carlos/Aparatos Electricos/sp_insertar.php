<?php
$Nombre = $_POST['Nombre'];
$Referencia = $_POST['Referencia'];
$Entrada = $_POST['Entrada'];
$Salida = $_POST['Salida'];
$Total = $_POST['Total'];
$Precio = $_POST['Precio'];



$db_host = "localhost";
$db_nombre = "dbaparatos";
$db_usuario = "root";
$db_password = "";
    $cnx = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
    $sql = "INSERT INTO aparatos (Nombre, Referencia, Entrada, Salida, Total, Precio )VALUES('$Nombre','$Referencia', '$Entrada', '$Salida', '$Total', '$Precio')";
    $rta = mysqli_query($cnx, $sql);
    if (!$rta) {
        echo "No se logro registrar";
    }
    else {
        header("Location: index.php");
    }
?>
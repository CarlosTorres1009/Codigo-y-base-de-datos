<?php
session_start();
include 'conexion_be.php';

$Correo = isset($_POST['Correo']) ? $_POST['Correo'] : '';
$Contrasena = isset($_POST['Contrasena']) ? $_POST['Contrasena'] : '';


if (empty($Correo) || empty($Contrasena)) {
    echo '
    <script>
        alert("Todos los campos son obligatorios.");
        window.location = "http://localhost/proyecto%20carlos/login/";
    </script>';
    exit;
}

$Contrasena = hash('sha512', $Contrasena);

$validar_login = mysqli_query($conexion, "SELECT * FROM login_db WHERE correo='$Correo' AND Contrasena='$Contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario'] = $Correo;
    header("Location: http://localhost/proyecto%20carlos/Indexx/Inventario.html");
    exit;
} else {
    echo '
    <script>
        alert("Correo o contraseña no existe, por favor verifique los datos introducidos.");
        window.location = "http://localhost/proyecto%20carlos/login/";
    </script>';
    exit;
}
?>

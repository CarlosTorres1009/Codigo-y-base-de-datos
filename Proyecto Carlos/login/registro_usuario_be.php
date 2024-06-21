<?php

include 'conexion_be.php';

$nombre_completo = isset($_POST['nombre_completo']) ? $_POST['nombre_completo'] : '';
$Telefono = isset($_POST['Telefono']) ? $_POST['Telefono'] : '';
$Correo = isset($_POST['Correo']) ? $_POST['Correo'] : '';
$Contrasena = isset($_POST['Contrasena']) ? $_POST['Contrasena'] : '';
$Contrasena = hash('sha512', $Contrasena);


$query = "INSERT INTO login_db (nombre_completo, Telefono, Correo, Contrasena) 
           VALUES('$nombre_completo','$Telefono', '$Correo', '$Contrasena')";


$verificar_correo = mysqli_query($conexion, "SELECT * FROM login_db WHERE correo='$Correo'");

if(mysqli_num_rows($verificar_correo)> 0){
    echo '
    <script>
    alert("Este correo ya esta registrado, intenta con uno diferente");
    window.location = "http://localhost/proyecto%20carlos/login/";
</script>
';
exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '
<script>
    alert("Usuario almacenado exitosamente");
    window.location = "http://localhost/proyecto%20carlos/login/";
</script>
';
}else{
echo '
<script>
    alert("Intentalo de nuevo, usuario no almacenado" );
    window.location = "http://localhost/proyecto%20carlos/login/";
</script>
';
}

mysqli_close($conexion)

?>
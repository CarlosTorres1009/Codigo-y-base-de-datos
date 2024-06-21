<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass="";
$dbname="login_db";

     $conexion = mysqli_connect("$dbhost", "$dbuser", "$dbpass", "$dbname");

     if($conexion){
        echo'conectado exitosamente a la base de datos';
     }else{
        echo'no se ah podido conectar a la base de datos';
     }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editar.css">
    <title>Herramientas E</title>
    <link rel="stylesheet" href="iluminacion.css">
    
</head>
<body>
<h1>INVENTARIO HERRAMIENTAS ELECTRICAS</h1>
<table class="styled-table">
<?php
$id = $_GET['id'];
$Nombre = $_GET['Nombre'];
$Referencia = $_GET['Referencia'];
$Entrada = $_GET['Entrada'];
$Salida = $_GET['Salida'];
$Total = $_GET['Total'];
$Precio = $_GET['Precio'];
?>


    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">
                <tr>
                    <td>Corregir Datos:</td>
                    <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td> Nombre: </td>
                    <td><input type="text" name="Nombre" id="" value="<?=$Nombre?>"></td>
                </tr>
                <tr>
                    <td> Referencia: </td>
                    <td><input type="text" name="Referencia" id="" value="<?=$Referencia?>"></td>
                </tr>
                <tr>
                    <td> Cantidad Ingresada: </td>
                    <td><input type="text" name="Entrada" id="" value="<?=$Entrada?>"></td>
                </tr>
                <tr>
                    <td> Cantidad Vendida: </td>
                    <td><input type="text" name="Salida" id="" value="<?=$Salida?>"></td>
                </tr>
                <tr>
                    <td> Cantidad Total: </td>
                    <td><input type="text" name="Total" id="" value="<?=$Total?>"></td>
                </tr>
                <tr>
                    <td> Precio: </td>
                    <td><input type="text" name="Precio" id="" value="<?=$Precio?>"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
               
            </table>
        </form>
</body>
</html>
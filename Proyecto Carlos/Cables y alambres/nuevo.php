<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nuevo.css">
    <title>Cables</title>
</head>
<body>
<h1>CABLES Y ALAMBRES</h1>
<h3>Nuevos Registros<h3>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border ="1">
                <tr>
                    <td>Ingresar Datos:</td>
                </tr>
                <tr>
                    <td> Nombre: </td>
                    <td><input type="text" name="Nombre" id=""></td>
                </tr>
                <tr>
                    <td> Referencia: </td>
                    <td><input type="text" name="Referencia" id=""></td>
                </tr>
                <tr>
                    <td> Cantidad Ingresada: </td>
                    <td><input type="text" name="Entrada" id=""></td>
                </tr>
                <tr>
                    <td> Cantidad Vendida: </td>
                    <td><input type="text" name="Salida" id=""></td>
                </tr>
                <tr>
                    <td> Cantidad Total: </td>
                    <td><input type="text" name="Total" id=""></td>
                </tr>
                <tr>
                    <td> Precio: </td>
                    <td><input type="text" name="Precio" id=""></td>
                </tr>
                
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
             
                   
            </table>
        </form>
</body>
</html>
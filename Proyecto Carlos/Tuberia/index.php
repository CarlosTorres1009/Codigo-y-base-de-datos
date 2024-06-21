<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <title>Tuberia</title>
  
</head>
<body>
<h1>INVENTARIO TUBERIA</h1>

        <div>
            <form action= "buscar.php" method="post">
                <input type="text" name="buscar" id="">
                <input type="submit" value="Buscar">
                <a href="nuevo.php">Nuevo</a>
            </form>
         </div>

         <div>
            <table border = "1">
                <tr>
                    <td>ID producto</td>
                    <td>Nombre</td>
                    <td>Referencia</td>
                    <td>Cantidad Ingresada</td>
                    <td>Cantidad Vendida</td>
                    <td>Cantidad Total</td>
                    <td>Precio</td>
                    <td>OPCIONES</td>
                    
                </tr>

                <?php
                $db_host = "localhost";
                $db_nombre = "dbtuberia";
                $db_usuario = "root";
                $db_password = "";
                    $cnx = mysqli_connect($db_host, $db_usuario, $db_password, $db_nombre);
                    $sql = "SELECT * FROM tuberia";
                    $rta = mysqli_query($cnx, $sql);
                    while ($mostrar = mysqli_fetch_row($rta)) {
                        ?>
                        <tr>
                            <td><?php echo $mostrar['0'] ?></td>
                            <td><?php echo $mostrar['1'] ?></td>
                            <td><?php echo $mostrar['2'] ?></td>
                            <td><?php echo $mostrar['3'] ?></td>
                            <td><?php echo $mostrar['4'] ?></td>
                            <td><?php echo $mostrar['5'] ?></td>
                            <td><?php echo $mostrar['6'] ?></td>
                            <td>
                                <a href="editar.php?
                                id=<?php echo $mostrar['0'] ?> &
                                Nombre=<?php echo $mostrar['1'] ?> &
                                Referencia=<?php echo $mostrar['2'] ?> &
                                Entrada=<?php echo $mostrar['3'] ?> &
                                Salida=<?php echo $mostrar['4'] ?> &
                                Total=<?php echo $mostrar['5'] ?> &
                                Precio=<?php echo $mostrar['6'] ?> 
                                ">Editar</a>
                                <a href="sp_eliminar.php? id=<?php echo $mostrar['0'] ?>">Eliminar</a>
                            </td>

                           
                        </tr>
                        <?php
                        }
                        ?>
                        
            </table>
            <a href="http://localhost/proyecto%20carlos/Indexx/Inventario.html">Tabla Principal</a>
        </div>
        
</body>
</html>
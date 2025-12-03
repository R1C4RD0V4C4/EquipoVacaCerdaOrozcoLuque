<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "AlisonQueen";  
    $baseDeDatos = "login";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos</title>

    <style>
        th, td{
    border: 1px black solid;
    padding: 10px;
    }

    table{
        width: 80%;
        margin: 20px auto;
        border-collapse:collapse ;
    }
    </style>

</head>
<body>

<h1>Base de datos</h1>

<ul>
    <li><a href="registro.php">Registro de datos</a></li>
    <li><a href="index.html">Inicio</a></li>

<table>

    <tr>

        <td>id</td>
        <td>nombre</td>
        <td>correo</td>
        <td>telefono</td>
        <td>Acciones</td>

    </tr>

    <?php 
    
        $sql= "SELECT * FROM datos";
        $result= mysqli_query($enlace, $sql);

        while($mostrar = mysqli_fetch_array($result)){
            
        ?>

    <tr>

        <td><?php echo $mostrar['id']; ?></td>
        <td><?php echo $mostrar['nombre']; ?></td>
        <td><?php echo $mostrar['correo']; ?></td>
        <td><?php echo $mostrar['telefono']; ?></td>
        <td>
            <form action="Eliminacion.php" method="post" onsubmit="return confirm('¿Desea eliminar este registro?');">
                <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
                <input type="submit" value="Eliminar">
            </form>
        </td>

    </tr>

<?php
    }
?>

</table>
    
</body>
</html>
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
    <title>LogIn Ejemplo</title>
</head>
<body>

<h1>Registro de datos</h1>

<ul>
    <li><a href="DB.php">Base de datos</a></li>
    <li><a href="index.html">Inicio</a></li>
</ul>

    <form action="#" name="login" method="post">

        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="correo" placeholder="correo">
        <input type="text" name="telefono" placeholder="telefono">

        <input type="submit" name="registro">

        <input type="reset">

        <input type="button" value="Regresar" onclick="regresar()">

    </form>



    <script>
        function regresar() {
            window.location.href = "index.html";
        }
    

</body>

<?php

        if(isset($_POST['registro'])) {

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $insertarDatos = "INSERT INTO datos VALUES('$nombre', '$correo', '$telefono', '')";

            $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

        }
    
    ?>

</html>
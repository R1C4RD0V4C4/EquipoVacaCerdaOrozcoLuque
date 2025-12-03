<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "AlisonQueen";  
    $baseDeDatos = "login";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if (!$enlace) {
        header('Location: DB.php');
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];

        if (!filter_var($id, FILTER_VALIDATE_INT)) {
            header('Location: DB.php');
            exit;
        }

        $stmt = mysqli_prepare($enlace, "DELETE FROM datos WHERE id = ?");
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }

    header('Location: DB.php');
    exit;
?>

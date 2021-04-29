<?php

include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tareas WHERE id = $id";
    $result = mysqli_query($conexion, $query);


    if (!$result) {
        die("La consulta fallo");
    }

    $_SESSION['message'] = 'tarea eliminada exitosamente';
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}

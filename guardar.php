<?php

include("db.php");

if (isset($_POST['guardar'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("Consulta Fallida");
    }

    $_SESSION['message'] = 'tarea guardada con exito';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");
}

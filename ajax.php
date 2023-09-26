<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];


    $sql = "INSERT INTO Productos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

if (DEBUG) {
    error_log("Datos guardados: " . print_r($datos, true));
}

?>

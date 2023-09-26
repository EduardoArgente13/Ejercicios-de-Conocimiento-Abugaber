<?php
include 'db.php';

$sql = "SELECT * FROM Productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Descripción: " . $row["descripcion"]. " - Precio: " . $row["precio"]. "<br>";
    }
} else {
    echo "No hay productos";
}
$conn->close();
?>

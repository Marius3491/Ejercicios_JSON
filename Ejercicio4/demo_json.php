<?php
if (isset($_GET['x'])) {
    // Obtener el valor del parámetro 'x' de la URL
    $jsonString = $_GET['x'];

    // Decodificar el JSON string a un objeto PHP
    $decodedObject = json_decode($jsonString);

    // Aquí puedes realizar cualquier operación con el objeto PHP si es necesario

    // Por ejemplo, imprimir el nombre en el servidor
    echo "Nombre en el servidor: " . $decodedObject->nombre;
} else {
    // Manejar la falta de parámetro 'x' en la URL
    echo "Error: No se proporcionó el parámetro 'x'.";
}
?>

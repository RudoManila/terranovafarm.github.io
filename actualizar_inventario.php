<?php
// Archivo que almacenará el inventario
$archivo_inventario = 'inventario.txt';

// Obtener los datos enviados desde LSL
$datos = $_POST;

// Convertir el array de datos a una cadena
$contenido = "";

foreach($datos as $nombre => $cantidad) {
    $contenido .= $nombre . "," . $cantidad . "\n";
}

// Guardar los datos en un archivo
file_put_contents($archivo_inventario, $contenido);

// Respuesta al script LSL
echo "Inventario actualizado correctamente.";
?>

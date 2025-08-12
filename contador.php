<?php
// Ruta al archivo donde se guarda el contador
$ruta_archivo = __DIR__ . "/../privado/contador.txt"; // fuera de la carpeta pública

// Si no existe, crearlo en 0
if (!file_exists($ruta_archivo)) {
    file_put_contents($ruta_archivo, "0");
}

// Leer visitas actuales
$visitas = (int)file_get_contents($ruta_archivo);

// Sumar 1 y guardar
$visitas++;
file_put_contents($ruta_archivo, $visitas);

// No mostramos nada, solo registra
?>

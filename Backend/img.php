<?php
// Ruta del archivo TIFF
$ruta_tiff = 'ruta/a/tu/archivo.tiff';

// Verificar si el archivo TIFF existe
if (file_exists($ruta_tiff)) {
    try {
        // Crear una nueva instancia de Imagick con el archivo TIFF
        $imagen = new Imagick($ruta_tiff);

        // Convertir la imagen a formato JPEG
        $imagen->setImageFormat('jpg');

        // Ruta de salida para la imagen JPEG
        $ruta_jpg = 'ruta/a/guardar/imagen.jpg';

        // Guardar la imagen JPEG
        $imagen->writeImage($ruta_jpg);

        // Liberar recursos
        $imagen->clear();
        $imagen->destroy();

        echo 'La conversión se ha completado con éxito.';

    } catch (ImagickException $e) {
        echo 'Error al procesar la imagen: ' . $e->getMessage();
    }
} else {
    echo 'El archivo TIFF no existe en la ubicación especificada.';
}
?>
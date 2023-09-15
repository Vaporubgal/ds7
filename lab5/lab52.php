<?php
if (isset($_FILES['nombre_archivo_cliente'])) {
    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;
    $tamanoMaximo = 1048576;
    $extensionesPermitidas = array("jpg", "jpeg", "gif", "png");

    $extension = pathinfo($nombrearchivo, PATHINFO_EXTENSION);

    if ($_FILES['nombre_archivo_cliente']['size'] <= $tamanoMaximo &&
        in_array(strtolower($extension), $extensionesPermitidas) &&
        move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreCompleto)) {

        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    } else {
        echo "Hubo un problema al subir el archivo. Asegúrate de que sea una imagen válida y que no exceda el tamaño máximo permitido (1MB).<br>";
    }
} else {
    echo "No se ha podido subir el archivo <br>";
}
?>


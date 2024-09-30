<?php
include_once("conexion-organizar.php");

// Recibir datos del formulario
$salon_seleccionado = $_POST['salon_seleccionado'];
$catering_seleccionado = $_POST['catering_seleccionado'];
$dj_seleccionado = $_POST['dj_seleccionado'];
$id_usuario = 1; // Supongamos que obtienes el id de usuario de alguna manera

// Insertar en la base de datos
$consulta = "INSERT INTO selecciones_evento (id_usuario, salon_seleccionado, catering_seleccionado, dj_seleccionado)
             VALUES ('$id_usuario', '$salon_seleccionado', '$catering_seleccionado', '$dj_seleccionado')";

$resultado = pg_query($con, $consulta);

if ($resultado) {
    echo "Selecciones guardadas correctamente";
} else {
    echo "Error al guardar las selecciones";
}
?>

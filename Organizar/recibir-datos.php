<?php 

$inv_tot = $_POST['totalinvitados'];
$inv_may = $_POST['invitadosmayores'];
$inv_men = $_POST['invitadosmenores'];

include("organizar-salones.php");

function consultar_salones($con, $inv_tot) {
    // Consulta sin usar medidas de seguridad
    $consulta_salones = "SELECT nombre FROM salones WHERE capacidad >= $inv_tot";
    $resultado_salones = mysqli_query($con, $consulta_salones);

    // Inicializo una variable para guardar los resultados
    $salida_salones = "";

    // Si se recupera algún registro de la consulta
    if (mysqli_num_rows($resultado_salones) > 0) {
        // Mientras haya registros...
        while ($fila_salones = mysqli_fetch_assoc($resultado_salones)) {
            $salida_salones .= "Nombre: " . $fila_salones["nombre"] . "<br> <hr>";
        }
    } else {
        $salida_salones = "Sin datos";
    }

    return $salida_salones;
}
?>
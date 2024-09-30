<?php

//agarra los invitados que vienen del formulario de organizar-invitados
$inv_tot = $_POST['totalinvitados'];

include("organizar-salones.php");
require("conexion-organizar.php");

//definición de función que toma conexión de base de datos e invitados
function consultar_salones($con, $inv_tot)
{
    //consulta SQL que trae nombre e imagen de la tabla salones mientras la capacidad sea mayor al valor ingresado
    $consulta_salones = "SELECT nombre_salon, fotos FROM salon WHERE capacidad_maxima >= $inv_tot";

    //ejecuta la consulta en pgAdmin y la guarda en $resultado_salones
    $resultado_salones = pg_query($con, $consulta_salones);

    //inicia una variable
    $salida_img_salones = "";

    //si hay salones con la capacidad ingresada
    if (pg_num_rows($resultado_salones) > 0) {
        $formato_img = ".png"; //define los formatos de imagen
        $name_radio_group = "salon_seleccionado"; //nombre de grupo de botones (para futuro uso en realizar presupuesto)

        //recorre cada salon obtenido
        while ($fila_salones = pg_fetch_assoc($resultado_salones)) {
            //crea un contenedor entero para una variable sola
            $salida_img_salones .= "<div class='contenedor-imagen-nombre'>";
            $salida_img_salones .= "<img src='" . $fila_salones['fotos'] . $formato_img . "' class='imagen-salones'> <br> "; //trae la imagen de la bdd
            $salida_img_salones .= "<div class='contenedor-texto-boton'>";
            $salida_img_salones .= "<p class='texto-salones'>" . $fila_salones["nombre_salon"] . "</p>"; //trae el nombre de la bdd
            $salida_img_salones .= "<input type='radio' id='salon1' name='$name_radio_group' value='" . $fila_salones['nombre_salon'] . "'>";
            $salida_img_salones .= "</div>";
            $salida_img_salones .= "</div>";
        }
    } else {
        $salida_img_salones = "No hay salones con la capacidad ingresada"; //si no hay salones guarda esa linea de texto para mostrarla
    }

    return array('imagenes' => $salida_img_salones);
}



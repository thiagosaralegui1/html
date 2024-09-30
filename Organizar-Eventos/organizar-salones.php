<?php

include("header.php");
include_once("conexion-organizar.php");  // Asegúrate de que la ruta sea correcta
include_once("recibir-datos-salones.php");       // Incluye el archivo solo una vez

// Uso de la función
$resultado = consultar_salones($con, $inv_tot);

// Accede a las imágenes y nombres correctamente
$imagenes_salones = $resultado['imagenes'];
?>
<div class="contenedor">
    <div class="header">
        <header>
            <nav class="navbar navbar-expand-lg fondo">
                <img src="logo.png" class="logo-header">
                <div class="container-fluid">
                    <nav class="navbar2 navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav">
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                    <a class="nav-link" href="#button3">Crea tu evento</a>
                                    <a class="nav-link" href="uso.html">Cómo se usa</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="botones-header">
                    <button class="boton1"><a href="ingreso_login.php">Iniciar Sesión</a></button>
                    <button class="boton2"><a href="Registro_usuario.php">Registrarse</a></button>
                </div>
            </nav>
        </header>
    </div>
    <h2 class="titulo-organizar">Organizar</h2>
    <div class="grupo-boton" role="group" aria-label="Basic outlined example">
        <button type="button" class="boton boton-outline-primary used"><a href="organizar-invitados.php">Invitados</a></button>
        <button type="button" class="boton boton-outline-primary active"><a href="organizar-salones.php">Salones</a></button>
        <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Catering</a></button>
        <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">DJ</a></button>
        <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Camarografo</a></button>
        <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Bebidas</a></button>
        <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Cotillon</a></button>
    </div>
    <div class="contenedor-funciones">
        <h3 class="tit-org">Salones</h3>
        <?php echo "En base a $inv_tot invitados te reomendamos:" ?>
        <p class="opac"> (Debes seleccionar al menos un salón)</p>
        <hr>
        <form id="evento-form" action="guardar-seleccion.php" method="post">
            <div class="contenedor-salones">
                <?php
                $salones = consultar_salones($con, $inv_tot);
                echo $salones['imagenes'];
                ?>
            </div>
            <div class="cont-botones">
                <div class="anterior">
                    <button class="ant">
                        <i class="fa-solid fa-left-long"></i>
                        <a href="organizar-invitados.php">Anterior</a>
                    </button>
                </div>
                <div class="siguiente">
                    <button class="sig" id="siguiente-btn" type="submit">
                        <i class="fa-solid fa-right-long"></i>
                        Siguiente
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script src="app-organizar.js"></script>
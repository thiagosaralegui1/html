<?php

include("header.php");
require("recibir-datos-salones.php")

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
        <h3 class="tit-org">Catering</h3>
        <?php echo 'Para ' .$inv_tot. ' te recomendamos los siguientes catering'?>
        <p class="opac"> (Debes seleccionar al menos un salón)</p>
        <hr>
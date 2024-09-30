<?php include("header.php"); ?>


<h2 class="titulo-organizar">Organizar</h2>
<div class="grupo-boton" role="group" aria-label="Basic outlined example">
    <button type="button" class="boton boton-outline-primary active"><a href="organizar-invitados.php">Invitados</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-invitados.php">Salones</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-invitados.php">Catering</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-invitados.php">DJ</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-invitados.php">Camarografo</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-invitados.php">Bebidas</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-invitados.php">Cotillon</a></button>
</div>
<div class="contenedor-padre">
    <div class="contenedor-funciones">
        <form action="recibir-datos.php" method="post">
            <h3 class="tit-org">Necesitamos saber sobre los invitados de tu evento</h3>
            <p class="info">Estos datos son importantes para la recomendación de servicios en base a la cantidad de invitados.</p>
            <p class="opac"> (Los valores pueden ser aproximados)</p>
            <hr>
            <div class="grupo-input">
                <label for="totalinvitados">Ingrese la cantidad de invitados total: </label>
                <input type="number" name="totalinvitados" id="totalinvitados" placeholder="Ingresa cantidad" min="0"><br>

                <label for="invitadosmenores">Ingrese la cantidad de invitados menores: </label>
                <input type="number" name="invitadosmenores" id="invitadosmenores" placeholder="Ingresa cantidad"><br>

                <label for="invitadosmayores">Ingrese la cantidad de invitados mayores: </label>
                <input type="number" name="invitadosmayores" id="invitadosmayores" placeholder="Ingresa cantidad"><br>

                <div class="grupo-botones">
                    <input type="submit" class="envio" value="Enviar">
                    <input type="reset" class="cancelar" value="Cancelar">
                </div>
        </form>
    </div>
</div>
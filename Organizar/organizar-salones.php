<?php

include("header.php");
?>

<h2 class="titulo-organizar">Organizar</h2>
<div class="grupo-boton" role="group" aria-label="Basic outlined example">
    <button type="button" class="boton boton-outline-primary active"><a href="organizar-invitados.php">Invitados</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Salones</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Catering</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">DJ</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Camarografo</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Bebidas</a></button>
    <button type="button" class="boton boton-outline-primary"><a href="organizar-salones.php">Cotillon</a></button>
</div>
<div class="contenedor-funciones">
    <h3 class="tit-org">Salones</h3>
    <?php echo "En base a $inv_tot invitados," ?>
    <?php echo " $inv_may mayores y $inv_men menores te recomendamos:" ?>
    <hr>
</div>
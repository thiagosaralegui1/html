<?php require("header.php"); ?>

<header class="contenedorDatos">
    <a href="inicio.php"> <img src="imagenes/logo.png"> </a>
</header>

<main class="main2">
    <div class="contieneFormulario">
        <div class="formulario2">
            <h1>Cambiar Datos de Usuario</h1>
            <form action="actualizar_datos_usr.php" method="POST">
                <div class="datos2">
                    <input type="text" name="nombre" id="nombre" required>
                    <label for="nombre">Nombre</label>
                </div>
                <div class="datos2">
                    <input type="text" name="apellido" id="apellido" required>
                    <label for="apellido">Apellido</label>
                </div>
              
                <div class="datos2">
                    <input type="text" name="telefono" id="telefono" required>
                    <label for="telefono">Telefono</label>
                </div>
             
                <div class="datos2">
                    <input type="password" name="pass" id="pass" required>
                    <label for="pass">Contraseña</label>
                </div>

                <input type="submit" value="Guardar Cambios" name="envio" class="cargar">
            </form>
        </div>
    </div>
</main>

<?php require("footer.php"); ?>
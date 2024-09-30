<?php require("header.php"); ?>

<header>
        <div class="contenedorDatos">
            <a href="inicio.php"> <img src="imagenes/logo.png"> </a>
        </div>
    </header>
    <main>
    
        <div class="formulario">
            <h1>Por favor, inicia sesión</h1>

            <form action="RF_login_usr.php" method="POST">
                <div class="datos2">
                    <input type="text" name="email" id="email" required>
                    <label for="email">Correo electrónico</label>
                </div>
                <input type="submit" value="Recuperar contraseña" name="envio">
            </form>
        </div>
    </main>
    <?php require("footer.php"); ?>
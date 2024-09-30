<?php require("header.php"); ?>



<header class="contenedorDatos">
    <a href="inicio.php"><img src="imagenes/logo.png" alt=""> </a>
</header>
<main>


    <div class="contieneFormulario">
        <div class="formulario">
            <h1> Inicio de Sesion</h1>
            <form action="RF_login_usr.php" method="POST">
                <div class="datos">
                    <input type="text" name="email" id="email" required>
                    <label for="email"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="grey">
                            <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                        </svg> Email</label>
                </div>
                <div class="datos">
                    <input type="password" name="pass" id="pass" required>
                    <label for="pass"> <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="grey">
                            <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                        </svg> Contraseña</label>
                </div>
                <div class="recordar"><a href="olvidarpass.php">¿Olvidaste tu contraseña?</a></div>
                <!--  <div class="g-recaptcha" data-sitekey="6LfkhjcqAAAAAKqKDB4Qv1u3ShIUAbdAMPXHBf3t"></div> -->
                <?php
                session_start();
                if (isset($_SESSION["error_login"])) {
                    echo "<p style='color:red'>" . $_SESSION["error_login"] . "</p>"; //muestra mensaje de error de sesion y
                    //despues se elimana el mensaje para  que no se muestre en otra ocasion

                    unset($_SESSION["error_login"]);
                }
                ?>

                <input type="submit" value="Ingresar" name="envio">


                <div class="registrarse">
                    No tienes cuenta? <a href="Registro_usuario.php">Registrate!</a>
                </div>
                <script src="app.js"></script>
            </form>
        </div>
    </div>
</main>

<?php require("footer.php"); ?>
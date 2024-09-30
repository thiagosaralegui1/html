<?php require("header.php");

session_start();
if (!isset($_SESSION['email'])) {
    header("location:ingreso_login.php");
    exit();
} else {

    $email = $_SESSION["email"];
}






?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>TuEvento</title>
</head>

<body>


    <div class="contenedor">
        <div class="header">
            <header>
                <nav>
                    <div class="logo">
                        <img src="imagenes/logo.png" alt="">
                    </div>
                    <ul class="listaMenu" id="menuList">
                        <li><a class="inicio" href="">Inicio</a></li>
                        <li><a class="crearEvento" href="#button3">Crea tu evento</a></li>
                        <button class="buttonPerfil" id="menuButton">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="black">
                                <path d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm560 40-12-60q-12-5-22.5-10.5T584-204l-58 18-40-68 46-40q-2-14-2-26t2-26l-46-40 40-68 58 18q11-8 21.5-13.5T628-460l12-60h80l12 60q12 5 22.5 11t21.5 15l58-20 40 70-46 40q2 12 2 25t-2 25l46 40-40 68-58-18q-11 8-21.5 13.5T732-180l-12 60h-80Zm40-120q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z" />
                            </svg>
                        </button>
                        <div class="menu" id="userMenu">
                            <?php echo $email ?>
                            <a href="editarPerfil.php">Editar Perfil</a>
                            <a href="logout.php">Cerrar sesión</a>
                        </div>
                    </ul>
                    <div class="menu-icon">
                        <i class="fa-solid fa-bars" onclick="toggleMenu()"></i>
                    </div>
                </nav>
            </header>
        </div>


        <div class="contenedor2">
            <h1>CREA TU EVENTO<br>EN MINUTOS</h1>
        </div>
        <h5>Obtén un presupuesto de manera rápida y sencilla tan solo con unos clics</h5>

        <div class="contenedor3">
            <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">¿Qué es TuEvento?</div>
                <div class="card-body">
                    <p class="card-text">
                        Este sitio simplifica la organización de eventos importantes,
                        como cumpleaños de quince, bodas y fiestas en general. Genera
                        un presupuesto aproximado basado en las preferencias seleccionadas
                        y proporciona el contacto directo de los propietarios de los salones
                        para facilitar la comunicación.
                    </p>
                </div>
            </div>
            <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">¿Cómo funciona TuEvento?</div>
                <div class="card-body">
                    <p class="card-text">
                        Al crear tu evento, se te pedirá la cantidad de invitados y,
                        con base en ello, se te recomendarán servicios como salones,
                        catering, y DJ. Una vez seleccionados todos los servicios, podrás
                        calcular el presupuesto final, detallando todo lo necesario para
                        tener tu evento completamente organizado.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="contenedor-servicios">
        <div class="titulo1">
            <h4>Algunos servicios que puedes encontrar</h4>
            <hr>
        </div>
        <h4>Salones</h4>
        <div class="serv1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Casa Puerto</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <img src="imagenes/c3.jpg" class="card-img-bottom" alt="...">
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">El rancho</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <img src="imagenes/c1.jpg" class="card-img-bottom" alt="...">
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">La chacra eventos</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <img src="imagenes/c4.jpg" class="card-img-bottom" alt="...">
            </div>
        </div>
        <hr>
        <h4>Catering</h4>
        <div class="serv2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Salado</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="conte-img">
                    <img src="imagenes/s1.jpg" class="card-img-bottom1" alt="...">
                    <img src="imagenes/s2.webp" class="card-img-bottom1" alt="...">
                    <img src="imagenes/s3.webp" class="card-img-bottom1" alt="...">
                    <img src="imagenes/s4.webp" class="card-img-bottom1" alt="...">
                </div>
            </div>



            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dulce</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="conte-img">
                    <img src="imagenes/d1.webp" class="card-img-bottom1" alt="...">
                    <img src="imagenes/d2.webp" class="card-img-bottom1" alt="...">
                    <img src="imagenes/d3.webp" class="card-img-bottom1" alt="...">
                    <img src="imagenes/d4.webp" class="card-img-bottom1" alt="...">
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lunchs</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="conte-img">
                <img src="imagenes/launch-1.png" class="card-img-bottom1" alt="...">
                    <img src="imagenes/launch-2.png" class="card-img-bottom1" alt="...">
                    <img src="imagenes/launch-3.png" class="card-img-bottom1" alt="...">
                    <img src="imagenes/launch-4.png" class="card-img-bottom1" alt="...">
                </div>
            </div>
        </div>
        <hr>

        <h4>DJ</h4>
        <div class="serv3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DJ MICHEL</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <img src="imagenes/dj1.jpg" class="card-img-bottom" alt="...">
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Discotheque</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <img src="imagenes/d3.jpg" class="card-img-bottom" alt="...">
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aty dj</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <img src="imagenes/d4.jpg" class="card-img-bottom" alt="...">
            </div>
        </div>



        <div class="contenedor4">
            <h3>Comenzar a crear<br>tu evento con tan solo un click</h3>
            <div id="button3">
                <a href="Organizar-Eventos/organizar-invitados.php" class="btn shadow-effect"> Crear evento </a>
            </div>
        </div>
    </div>




<div>







<h2>Formulario de contacto</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea><br>
        <input type="submit" value="enviar" name="enviar">
    </form>
   
   <?php
if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"]; #correo de la persona que escribe el mensaje
    $mensaje = $_POST["mensaje"];

    $destinatario = "tueventouy0@gmail.com"; #aqui insertar el correo al que deseas que llegue el mensaje que envies en el formulario
    $asunto = "nuevo mensaje de $email";

    $contenido = "Nombre: $nombre \n";
    $contenido .= "Email: $email \n";
    $contenido .= "Mensaje: $mensaje";

    $header = "From: http://3.139.66.230/"; #aqui insertas el correo del remitente en el encabezado del correo.

    $mail = mail($destinatario, $asunto, $contenido, $header);

    if ($mail) {
        echo "<script>alert('El correo se envio correctamente :)')</script>";
    } else {
        echo "<script>alert('El correo no se pudo enviar, intente nuevamente :(')</script>";
    }
}
?>




</div>










    <footer>
        <div class="conte-footer">
            <div class="logo-footer">
                <img src="imagenes/logo.png" class="img2">
            </div>

            <div class="conte-nav">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    <a class="nav-link" href="#button3">Crea tu evento</a>
                </div>
            </div>
            <div class="redes">
                <h5>Redes sociales</h5>
                <a href="https://www.facebook.com/share/3JXpmysz1DGpNMsb/?mibextid=qi2Omg" target="_blank" rel="noopener noreferrer">
                    <img src="imagenes/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/tueventouy_?utm_source=qr&igsh=MTFybG5rYnJmeDMxaA==" target="_blank" rel="noopener noreferrer">
                    <img src="imagenes/instagram.png" alt="Instagram">
                </a>


            </div>
        </div>
        <p>&copy; 2024 TuEvento. Todos los derechos reservados.</p>

    </footer>
    <script>
        const menuButton = document.getElementById("menuButton");
        const userMenu = document.getElementById("userMenu");

        // Asegurarse de que el menú comience cerrado
        userMenu.style.display = "none";

        menuButton.addEventListener("click", function() {
            userMenu.style.display = userMenu.style.display === "block" ? "none" : "block"; // Alternar visibilidad
        });

        // Cerrar el menú si se hace clic fuera de él
        window.addEventListener("click", function(event) {
            if (!menuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.style.display = "none";
            }
        });
    </script>
    <script>
        // Obtiene el elemento HTML con el id "menuList" y lo guarda en la variable "menuList"
let menuList = document.getElementById("menuList");

// Inicialmente, establece la altura máxima (maxHeight) del menú como "0px".
// Esto significa que el menú estará "colapsado" (oculto) cuando se cargue la página.
menuList.style.maxHeight = "0px";

// Define una función llamada "toggleMenu" que se ejecutará cada vez que el usuario haga clic en el icono del menú.
// Esta función alterna (abre o cierra) el menú dependiendo de su estado actual.
function toggleMenu() {
    
    // Comprueba si la altura máxima (maxHeight) del menú es actualmente "0px".
    // Si es "0px", significa que el menú está cerrado/oculto, por lo tanto, lo vamos a abrir.
    if (menuList.style.maxHeight == "0px") {
        
        // Si el menú está cerrado, establece la altura máxima (maxHeight) en "300px",
        // lo que significa que el menú se expandirá y mostrará su contenido.
        menuList.style.maxHeight = "300px";
    
    } else {
        
        // Si el menú no está cerrado (es decir, ya está abierto), 
        // establece la altura máxima (maxHeight) de nuevo en "0px" para ocultarlo.
        menuList.style.maxHeight = "0px";
    }
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap

</body>
</html>
<?php require("footer.php"); ?>
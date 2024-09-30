<?php
session_start();

if (isset($_SESSION['email'])  == true) {
    header('Location: inicio_usuario.php');  // valida si esta iniciado sesion y te redirige al usuario parab
    exit;
}



?>

<?php
include("header.php")
?>

<body>
    <div class="contenedor">
        <div class="header">
            <header>
                <nav>
                    <div class="logo">
                        <img src="imagenes/logo.png" alt="">
                    </div>
                    <ul id="menuList">
                        <li><a class="inicio" href="">Inicio</a></li>
                        <li><a class="crearEvento" href="#crearEvento">Crea tu evento</a></li>
                        <li><a class="usuario" href="ingreso_login.php">Inicia Sesión</a></li>
                        <li><a class="usuario" href="Registro_usuario.php">Registrate</a></li>
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
                        en base en ello, se te recomendarán servicios como salones,
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
        <!-- Presentacion -->
        <div class="contenedor-presentacion">

            <!-- Imagenes con width 100% -->
            <div class="diapositivas desvanecer">
                <div class="numerotexto">1 / 3</div>
                <img src="imagenes/c4.jpg" style="width:100%">
                <div class="text">La chacra eventos</div>
            </div>

            <div class="diapositivas desvanecer">
                <div class="numerotexto">2 / 3</div>
                <img src="imagenes/egeo.jpg" style="width:100%">
                <div class="text">EGEO</div>
            </div>

            <div class="diapositivas desvanecer">
                <div class="numerotexto">3 / 3</div>
                <img src="imagenes/castellana.jpg" style="width:100%">
                <div class="text">La castellana</div>
            </div>

            <!-- Botones de siguiente/anterior -->
            <a class="presentacion-anterior" onclick="plusSlides(-1)">&#10094;</a>
            <a class="presentacion-siguiente" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- Puntos de el slide en el que se encuentra -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <div class="contenedor-boton-detalles">
                <button class="boton-detalles">
                    <a href="">Ver más detalles</a>
                </button>
            </div>
        </div>
        <hr>
        <h4>Servicios</h4>
        <!-- Presentacion -->
        <div class="contenedor-presentacion" id="servicios">

            <!-- Imagenes con width 100% -->
            <div class="diapositivas2 desvanecer">
                <div class="numerotexto">1 / 3</div>
                <img src="imagenes/oliva-y-miel.jpg" style="width:100%">
                <div class="text">Oliva y miel</div>
            </div>

            <div class="diapositivas2 desvanecer">
                <div class="numerotexto">2 / 3</div>
                <img src="imagenes/s2.webp" style="width:100%">
                <div class="text">Catering B</div>
            </div>

            <div class="diapositivas2 desvanecer">
                <div class="numerotexto">3 / 3</div>
                <img src="imagenes/s3.webp" style="width:100%">
                <div class="text">DJ Z</div>
            </div>

            <!-- Botones de siguiente/anterior -->
            <a class="presentacion-anterior" onclick="plusSlides2(-1)">&#10094;</a>
            <a class="presentacion-siguiente" onclick="plusSlides2(1)">&#10095;</a>
        </div>
        <br>

        <!-- Puntos de el slide en el que se encuentra -->
        <div style="text-align:center">
            <div class="contenedor-boton-detalles">
                <button class="boton-detalles">
                    <a href="">Ver más detalles</a>
                </button>
                
            </div>
        </div>
        <hr>


        <div class="contenedor4">
            <h3>Comenzar a crear<br>tu evento con tan solo un click</h3>
            <div id="button3">
                <a href="ingreso_login.php" class="btn shadow-effect" id="crearEvento"> Crear evento </a>
            </div>
        </div>
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
                    <a class="nav-link" href="nosotros.php">Sobre nosotros</a>
                </div>
            </div>
            <div class="redes">
                <h5>Redes sociales</h5>
                <a href="https://www.facebook.com/share/3JXpmysz1DGpNMsb/?mibextid=qi2Omg" target="_blank" rel="noopener noreferrer"">
                <img src=" imagenes/facebook.png" alt="Facebook">
                </a>
                <a href="https://www.instagram.com/tueventouy_?utm_source=qr&igsh=MTFybG5rYnJmeDMxaA==" target="_blank" rel="noopener noreferrer">
                    <img src="imagenes/instagram.png" alt="Instagram">
                </a>

            </div>
        </div>
        <p>&copy; 2024 TuEvento. Todos los derechos reservados.</p>

    </footer>

    <script>
        let menuList = document.getElementById("menuList")
        menuList.style.maxHeight = "0px";

        function toggleMenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "300px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>
    <script>
        let slideIndex1 = 1; // Carrusel 1
showSlides(slideIndex1);

let slideIndex2 = 1; // Carrusel 2
showSlides2(slideIndex2); // Asegúrate de tener una función para este carrusel

// Next/previous controls para el primer carrusel
function plusSlides(n) {
  showSlides(slideIndex1 += n);
}

// Thumbnail image controls para el primer carrusel
function currentSlide(n) {
  showSlides(slideIndex1 = n);
}

// Muestra las diapositivas del primer carrusel
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("diapositivas");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex1 = 1}
  if (n < 1) {slideIndex1 = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; // Oculta todas las diapositivas
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", ""); // Remueve la clase activa de todos los puntos
  }
  slides[slideIndex1 - 1].style.display = "block"; // Muestra la diapositiva actual
  dots[slideIndex1 - 1].className += " active"; // Marca el punto actual como activo
}

// Next/previous controls para el segundo carrusel
function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

// Thumbnail image controls para el segundo carrusel
function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

// Muestra las diapositivas del segundo carrusel
function showSlides2(n) {
  let i;
  let slides2 = document.getElementsByClassName("diapositivas2");
  let dots2 = document.getElementsByClassName("dot2"); // Asegúrate de tener diferentes puntos para el segundo carrusel
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none"; // Oculta todas las diapositivas
  }
  for (i = 0; i < dots2.length; i++) {
    dots2[i].className = dots2[i].className.replace(" active", ""); // Remueve la clase activa de todos los puntos
  }
  slides2[slideIndex2 - 1].style.display = "block"; // Muestra la diapositiva actual
  dots2[slideIndex2 - 1].className += " active"; // Marca el punto actual como activo
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap"> </script>



</body>

</html>
<?php require("footer.php"); ?>
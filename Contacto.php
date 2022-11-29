<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/HomeStyle.css" rel="stylesheet" type="text/css" />
    <link href="CSS/ContactoStyle.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fifa World Cup 2022</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="contenedor-menu">
                <div class="contenedor-imagen-mundial">
                    <a href=""><img src="IMGs\qatar2022.png" alt=""></a>
                </div>
                <ul class="menu">
                    <li><a href="Home.php" class="seleccion">Inicio</a></li>
                    <li><a href="Equipos.php">Equipos</a></li>
                    <li><a href="Posiciones.php">Posiciones</a></li>
                    <li><a href="Resultados.php">Resultados</a></li>
                    <li><a href="#clasificacion">Clasificación</a></li>
                    <li><a href="Favoritos.php">Favoritos</a></li>
                </ul>
                <div class="contenedor-usuario">
                    <div class="contenedor-registrarse">
                        <a href="Sign.php" class="registrarse">Registrarse</a>
                    </div>
                    <hr class="linea-usuario">
                    <div class="contenedor-iniciarsesion">
                        <a href="Sign.php" class="iniciar-sesion">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="contenedor-titulo-contacto">
        <span class="texto-contacto">Contacto</span>
        <span class="texto-sugerencia">Envíanos tus sugerencias:</span>
    </div>
    <div class="contenedor-mensaje-contacto">
        <textarea id="area-texto" name="" rows="10" cols="150"></textarea>
        <div class="mensaje-envio-sugerencia" id="contenedor-mensaje-fantasma">
          <span>¡Listo! Gracias por ayudarnos a mejorar</span>
        </div>
        <div class="contenedor-botones">
          <button id="envio" onclick="envio()">Enviar</button>
          <a href="Home.php"><button>Volver al inicio</button></a>
        </div>
    </div>
    <div class="contenedor-soporte-general">
        <div class="contenedor-titulo-soporte">
            <span>Preguntas de soporte</span>
        </div>
        <div class="contenedor-parrafo-soporte">
            <span>En caso de tener dudas adicionales referentes con el equipo de soporte,
                 otra sugerencia o algún inconveniente que se haya presentado, envíanos un
                 correo electrónico a: wayoyo@utp.ac.pa
            </span>
        </div>
    </div>
    <div class="contenedor-direccion-general">
        <div class="contenedor-titulo-direccion">
            <span>Contactar con</span>
        </div>
        <div class="contenedor-parrafo-direccion">
            <span class="texto-direccion">Dirección</span>
            <span>Universidad Tecnológica de Panamá,<br>
                Campus Victor Levi Sasso,<br>
                Avenida Ricardo J. Alfaro,<br>
                Ciudad de Panamá,<br>
                Panamá
            </span>
        </div>
    </div>
    <footer class="footer">
    <div class="footer__addr">
      <img class="footer__logo" src="https://www.pngplay.com/wp-content/uploads/10/FIFA-Logo-Transparent-Images.png" alt="">

      <h2>Dirección</h2>

      <address>
        Universidad Tec. de Panamá, Panamá, Panamá
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Cuenta</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Administrar Cuenta</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Explorar</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Sobre Nosotros</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Apoyo</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Contacto</a>
          </li>
        </ul>
      </li>
    </ul>
    </footer>
    <script src="JS\ContactoJS.js" charset="utf-8"></script>
</body>
</html>
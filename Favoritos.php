<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/HomeStyle.css" rel="stylesheet" type="text/css" />
    <link href="CSS/FavStyle.css" rel="stylesheet" type="text/css" />
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
                    <li><a href="Home.php">Inicio</a></li>
                    <li><a href="Equipos.php">Equipos</a></li>
                    <li><a href="#partidos">Partidos</a></li>
                    <li><a href="Resultados.php">Resultados</a></li>
                    <li><a href="#clasificacion">Clasificación</a></li>
                    <li><a href="Favoritos.php" class="seleccion">Favoritos</a></li>
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
    <div class="contenedor-texto-favoritos">
        <span>Favoritos</span>
    </div>
    <div class="contenedor-general-equipos">
        <div class="contenedor-equipo-favorito">
            <div class="contenedor-bandera-nombre">
                <img src="" alt="">
                <span>País</span>
            </div>
            <hr class="separador-bandera-partidos">
            <div class="contenedor-partidos-equipo-fav">
                <div class="partido-independiente">
                    <span>País X</span>
                    <span>Marcador1</span>
                    <span>Marcador2</span>
                    <span>País A</span>
                </div>
                <div class="partido-independiente">
                    <span>País X</span>
                    <span>Marcador1</span>
                    <span>Marcador2</span>
                    <span>País B</span>
                </div>
                <div class="partido-independiente">
                    <span>País X</span>
                    <span>Marcador1</span>
                    <span>Marcador2</span>
                    <span>País C</span>
                </div>
            </div>
            <hr class="separador-partidos-eliminar">
            <div class="contenedor-boton-eliminar">
                <a href=""><button>Eliminar</button></a>
            </div>
        </div>
    </div>
    <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo">Your Logo</h1>

      <h2>Contact</h2>

      <address>
        Your address, 123 Avenue, Country<br>

        <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Rewards</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Join Now</a>
          </li>

          <li>
            <a href="#">Learn More</a>
          </li>

          <li>
            <a href="#">Manage Account</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">News & Info</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Press Releases</a>
          </li>

          <li>
            <a href="#">About Our Products</a>
          </li>

          <li>
            <a href="#">Product Support</a>
          </li>

          <li>
            <a href="#">Product Manuals</a>
          </li>

          <li>
            <a href="#">Product Registration</a>
          </li>

          <li>
            <a href="#">Newsletter Sign Up</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Support</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">FAQ</a>
          </li>

          <li>
            <a href="#">Help Desk</a>
          </li>

          <li>
            <a href="#">Forums</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="legal">
      <p>&copy; 2022 Copyright.</p>

    </div>
    </footer>
</body>
</html>
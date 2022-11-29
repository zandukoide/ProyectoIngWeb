<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/HomeStyle.css" rel="stylesheet" type="text/css" />
    <link href="CSS/PagEquipoStyle.css" rel="stylesheet" type="text/css" />
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
                    <li><a href="Equipos.php" class="seleccion">Equipos</a></li>
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
    <div class="contenedor-nombre-favorito">
      <div  class="contenedor-bandera-nombre">
        <div class="imagen">
          <img src="IMGs\banderaespaña.webp" alt="">
        </div>
        <div class="equipo-grupo">
          <span id="pais">España</span>
          <span id="grupo">Grupo E</span>
        </div>
      </div>
      <div class="contenedor-boton-favorito">
        <a href="">
          <div class="imagensita-favorita">
            <img src="https://cdn-icons-png.flaticon.com/512/1721/1721922.png" alt="">
            <span>Añadir como favorito</span>
          </div>
        </a>
      </div>
    </div>
    <div class="contenedor-estadisticas-general">
      <div class="contenedor-titulo-partidos">
        <div class="texto-dato">
          <span>Datos</span>
        </div>
        <div class="partidos-general">
          <span>3</span>
          <span class="partidito">Partidos Jugados</span>
          <span>2</span>
          <span class="partidito">Partidos Ganados</span>
          <span>1</span>
          <span class="partidito">Partidos Perdidos</span>
          <span>0</span>
          <span class="partidito">Partidos Empatados</span>
        </div>
      </div>
      <div class="contenedor-tarjetas-goleador">
        <div class="tarjeta-amarilla">
          <div class="imagen-numero">
            <div class="tarjetita-amarilla"></div>
            <span>3</span>
          </div>
          <div class="texto">
            <span>Tarjetas amarillas</span>
          </div>
        </div>
        <div class="tarjeta-roja">
          <div class="imagen-numero">
            <div class="tarjetita-rojita"></div>
            <span>1</span>
          </div>
          <div class="texto">
            <span>Tarjetas<br>rojas</span>
          </div>
        </div>
        <div class="max-goleador">
          <div class="imagen-numero">
            <img src="https://cdn-icons-png.flaticon.com/512/4245/4245087.png" alt="">
          </div>
          <div class="texto">
            <span>Máx. gol:</span>
            <span>Neymar</span>
          </div>
        </div>
      </div>
    </div>
    <div class="contenedor-jugadores-general">
      <span id="texto-jugador">Jugadores</span>
      <div class="contenedor-jugadores-interno">
        <div class="contenedor-porteros">
          <span id="posicion">Porteros</span>
          <div class="portero-individual">
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Portero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Portero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Portero</span>
            </div>
          </div>
        </div>
        <div class="contenedor-defensas">
          <span id="posicion">Defensas</span>
          <div class="defensa-individual">
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Defensa</span>
            </div>
          </div>
        </div>
        <div class="contenedor-mediocampo">
          <span id="posicion">Mediocampistas</span>
          <div class="mediocampista-individual">
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
          </div>
        </div>
        <div class="contenedor-delanteros">
          <span id="posicion">Delanteros</span>
          <div class="delantero-individual">
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="IMGs\usuario.png" alt="">
              <span id="nombre-jugador">Jugador</span>
              <span id="posicion-2">Delantero</span>
            </div>
          </div>
        </div>
        <div class="contenedor-director">
          <span id="posicion">Entrenador</span>
          <div class="entrenador-individual">
            <img src="IMGs\usuario.png" alt="">
            <span id="nombre-jugador">Jugador</span>
            <span id="posicion-2">Entrenador</span>
          </div>
        </div>
      </div>
    </div>
    <div class="contenedor-titulo-logros-general">
      <div class="texto-titulo-logros">
        <span>Logros</span>
      </div>
      <div class="contenedor-logros">
        <div class="contenedor-mundial-participacion">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/120/120119.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Participación en mundiales:</span>
            <span id="contenido-logro">4</span>
          </div>
        </div>
        <div class="contenedor-mundial-resultado">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/274/274268.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Resultado más alto en mundial:</span>
            <span id="contenido-logro">Semifinal (Brasil, 2014)</span>
          </div>
        </div>
        <div class="contenedor-regional-participacion">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/52/52349.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Participación en torneo regional:</span>
            <span id="contenido-logro">8</span>
          </div>
        </div>
        <div class="contenedor-regional-resultado">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/274/274268.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Resultado más alto en torneo regional:</span>
            <span id="contenido-logro">Campeón (Copa América, 2019)</span>
          </div>
        </div>
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
            <a href="Nosotros.php">Sobre Nosotros</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Apoyo</h2>

        <ul class="nav__ul">
          <li>
            <a href="Contacto.php">Contacto</a>
          </li>
        </ul>
      </li>
    </ul>
    </footer>
</body>
</html>
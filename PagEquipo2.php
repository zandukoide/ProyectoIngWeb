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
          <img src="IMGs\banderaecuador.jpg" alt="">
        </div>
        <div class="equipo-grupo">
          <span id="pais">Ecuador</span>
          <span id="grupo">Grupo A</span>
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
          <span>1</span>
          <span class="partidito">Partidos Ganados</span>
          <span>1</span>
          <span class="partidito">Partidos Perdidos</span>
          <span>1</span>
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
            <span>0</span>
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
            <span>Valencia</span>
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
              <img src="https://digitalhub.fifa.com/transform/fd6dd52d-7dac-4c1c-91cf-647674ffcc3d/1442153514?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">H. Galindez</span>
              <span id="posicion-2">Portero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/45effb51-3759-4443-86c4-1adda359aaa8/1442153543?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">M. Ramirez</span>
              <span id="posicion-2">Portero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/51c7eafe-59db-4234-a9d6-04bc8081d32b/1442153558?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">A. Dominguez</span>
              <span id="posicion-2">Portero</span>
            </div>
          </div>
        </div>
        <div class="contenedor-defensas">
          <span id="posicion">Defensas</span>
          <div class="defensa-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/c2158847-1ebb-4af1-a676-739485cdb191/1442157061?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">F. Torres</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/d1dcc9c6-75a0-47ce-b9f8-f28a71a76ad1/1442153769?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">P. Hincapie</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/15266fa6-2c23-48ff-9a63-36d068c3fe58/1442157021?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">R. Arboleda</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/91932a10-5782-4307-874e-597f62ec9385/1442158666?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">W. Pacho</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/990f62e0-0ac5-41ef-a43c-cc4354e63f27/1442158380?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">P. Estupiñán</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/eb538dd3-559b-494d-9e61-26ae40627351/1442157377?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">X. Arreaga</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/c0ab58e9-0b9c-4f71-9bf4-1e82d77f67e9/1442158606?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">A. Preciado</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/5c914ef0-1413-434c-b2f0-d686f2d8c6ba/1442157042?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">D. Palacios</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/a7aaa188-ac74-4109-9fc4-68c87db5e861/1442157465?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">J. Porozo</span>
              <span id="posicion-2">Defensa</span>
            </div>
          </div>
        </div>
        <div class="contenedor-mediocampo">
          <span id="posicion">Mediocampistas</span>
          <div class="mediocampista-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/961c1a40-a931-4e14-b057-1e8382aa4e5a/1442157398?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">J. Cifuentes</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/48f6672a-4213-4ba2-8d1a-c29525f49291/1442153578?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">C. Gruezo</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/e3fd1b6f-923a-4b98-b3ea-791a8e88fca7/1442153978?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">E. Preciado</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/59ffee8e-f7db-4304-86ea-ce51fbd17552/1442157555?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">R. Ibarra</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/85a2f7b4-8153-4c04-89e4-46c8555bb5bb/1442153920?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">A. Mena</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/59b0fcdc-5cbf-4e78-8221-a2a28e651702/1442153740?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">J. Sarmiento</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/ce5dbf75-83be-4165-b855-4d31b1e310b0/1442153965?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">G. Plata</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/de46491e-7d8a-4df4-8779-a7946b2f97c3/Jhegson-Mendez?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">J. Mendez</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/9df2306e-4148-44ff-9c26-4891e064015e/1442158410?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">A. Franco</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
          </div>
        </div>
        <div class="contenedor-delanteros">
          <span id="posicion">Delanteros</span>
          <div class="delantero-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/5bcc7446-5816-4603-9aa8-882fa357f6e3/1442154004?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">M. Estrada</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/e9817141-9985-4b8a-818e-3a06260d7a8c/1442153993?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">E. Valencia</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/82842310-8c94-469d-9e9c-c83b0de4eec2/1442158458?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">D. Reasco</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/92e86609-09f6-41ff-ac88-78f31085d820/1442157538?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">K. Rodríguez</span>
              <span id="posicion-2">Delantero</span>
            </div>
          </div>
        </div>
        <div class="contenedor-director">
          <span id="posicion">Entrenador</span>
          <div class="entrenador-individual">
            <div class="jugador">
                <img src="https://digitalhub.fifa.com/transform/466a18b8-68f4-46e6-a476-9756aa9142a2/1442153500?io=transform:fill,width:264,height:300" alt="">
                <span id="nombre-jugador">G. Alfaro</span>
                <span id="posicion-2">Entrenador</span>
            </div>
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
            <span id="contenido-logro">Octavos de final (2006)</span>
          </div>
        </div>
        <div class="contenedor-regional-participacion">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/52/52349.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Participación en torneo regional:</span>
            <span id="contenido-logro">29</span>
          </div>
        </div>
        <div class="contenedor-regional-resultado">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/274/274268.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Resultado más alto en torneo regional:</span>
            <span id="contenido-logro">Cuarto lugar (1959 y 1993)</span>
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
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
          <span>2</span>
          <span class="partidito">Partidos Jugados</span>
          <span>1</span>
          <span class="partidito">Partidos Ganados</span>
          <span>0</span>
          <span class="partidito">Partidos Perdidos</span>
          <span>1</span>
          <span class="partidito">Partidos Empatados</span>
        </div>
      </div>
      <div class="contenedor-tarjetas-goleador">
        <div class="tarjeta-amarilla">
          <div class="imagen-numero">
            <div class="tarjetita-amarilla"></div>
            <span>1</span>
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
            <span>Morata</span>
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
              <img src="https://digitalhub.fifa.com/transform/501a7b8c-121a-450a-8da1-04768e3b239c/1442546780?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Sanchez</span>
              <span id="posicion-2">Portero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/99bac8dc-3541-42aa-9ee7-c2062dab21c5/1442550384?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Raya</span>
              <span id="posicion-2">Portero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/3996caf6-8de6-4cc9-b320-43269c6a8b68/1442550448?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Simon</span>
              <span id="posicion-2">Portero</span>
            </div>
          </div>
        </div>
        <div class="contenedor-defensas">
          <span id="posicion">Defensas</span>
          <div class="defensa-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/2a40ece5-6fa5-423e-81e4-b8f404480d7c/1442552014?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Azpilicueta</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/765d6a9d-4f5d-42af-a187-6fceb77f7076/1442550812?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">García</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/8f710499-fba6-4d2e-b512-e0c1c242379e/1442551864?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Torres</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/7214e635-be61-40c0-9a18-9432b2e8bfdf/447862?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Balde</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/e35f29a4-1613-4259-9671-af391c2329a2/1442550948?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Guillamon</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/bef08b26-042b-4a7c-a517-f29e1c937c39/1442550649?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Alba</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/e4f534e2-d24e-4d69-aae7-970fe7bcbf54/1442550925?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Carvajal</span>
              <span id="posicion-2">Defensa</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/2b44baf6-3e19-42b0-b982-427f88c56334/1442551021?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Laporte</span>
              <span id="posicion-2">Defensa</span>
            </div>
          </div>
        </div>
        <div class="contenedor-mediocampo">
          <span id="posicion">Mediocampistas</span>
          <div class="mediocampista-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/2dec5173-d2fd-4a06-8715-398332b2cc44/1442551723?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Busquets</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/bc994cd1-cfcd-4de7-ad0b-182b16a6ebd5/1442551339?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Llorente</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/87132c4b-85cb-4eeb-add2-06ea6489d9ec/1442552127?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Koke</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/3accf767-b78f-4bf4-87f8-25ab808366c4/1442551912?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Gavi</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/5e614c86-4c65-4d3a-b211-7ca38710187c/1442551426?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Rodri</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/422d4d27-2116-480f-9651-80561352a2b2/1442551423?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Soler</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/103c93e3-a3d4-4022-9bde-1285f4677ba8/1442551614?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Pedri</span>
              <span id="posicion-2">Mediocamp.</span>
            </div>
          </div>
        </div>
        <div class="contenedor-delanteros">
          <span id="posicion">Delanteros</span>
          <div class="delantero-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/a6d1d8b4-a559-4c7f-aed3-095126b60e1c/1442552095?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Morata</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/a28c5f8b-ef3b-4fb0-9cd3-a59c0c10c8f9/1442551256?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Asensio</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/405abbab-5e5d-4277-905f-6bbdf618bad5/1442551768?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Torres</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/0c54f295-1459-4e47-b2ce-d40500aedbf4/1442551969?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Williams</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/8cec67ff-34d6-48eb-84a2-438f6dbad67a/1442552155?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Pino</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/fe13d81b-073b-4657-a210-de2b48e2b449/1442551204?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Olmo</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/e93bb879-a521-4d0e-9201-1260c25895f0/1442551078?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Sarabia</span>
              <span id="posicion-2">Delantero</span>
            </div>
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/c18616da-8431-4a85-b6ce-d706b85e8095/1442552066?io=transform:fill,width:792,height:900" alt="">
              <span id="nombre-jugador">Ansu Fati</span>
              <span id="posicion-2">Delantero</span>
            </div>
          </div>
        </div>
        <div class="contenedor-director">
          <span id="posicion">Entrenador</span>
          <div class="entrenador-individual">
            <div class="jugador">
              <img src="https://digitalhub.fifa.com/transform/a6708aef-dfb7-40c2-9cd2-f02a1ec1bb0e/1442541442?io=transform:fill,width:264,height:300" alt="">
              <span id="nombre-jugador">Luis Enrique</span>
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
            <span id="contenido-logro">16</span>
          </div>
        </div>
        <div class="contenedor-mundial-resultado">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/274/274268.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Resultado más alto en mundial:</span>
            <span id="contenido-logro">Campeón (2010)</span>
          </div>
        </div>
        <div class="contenedor-regional-participacion">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/52/52349.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Participación en torneo regional:</span>
            <span id="contenido-logro">1 (Liga de Naciones)</span>
          </div>
        </div>
        <div class="contenedor-regional-resultado">
          <div class="imagensita">
            <img src="https://cdn-icons-png.flaticon.com/512/274/274268.png" alt="">
          </div>
          <div class="textito">
            <span id="subtitulo-logro">Resultado más alto en torneo regional:</span>
            <span id="contenido-logro">Subcampeón (2021)</span>
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
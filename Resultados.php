<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/HomeStyle.css" rel="stylesheet" type="text/css" />
    <link href="CSS/ResultStyle.css" rel="stylesheet" type="text/css" />
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
                    <li><a href="Posiciones.php">Posiciones</a></li>
                    <li><a href="Resultados.php" class="seleccion">Resultados</a></li>
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
    <div class="contenedor-titulo-menu">
        <div class="contenedor-titulo">
            <span>Partidos - </span>
            <span id="texto-dia">Día de Encuentro</span>
        </div>
        <div class="contenedor-menu-desplegable">
            <select name="" id="seleccionar" onchange="seleccionar()">
                <option id="dia1">Domingo 20/11</option>
                <option id="dia2">Lunes 21/11</option>
                <option id="dia3">Martes 22/11</option>
                <option id="dia4">Miércoles 23/11</option>
                <option id="dia5">Jueves 24/11</option>
                <option id="dia6">Viernes 25/11</option>
                <option id="dia7">Sábado 26/11</option>
                <option id="dia8">Domingo 27/11</option>
                <option id="dia9">Lunes 28/11</option>
                <option id="dia10">Martes 29/11</option>
                <option id="dia11">Miércoles 30/11</option>
                <option id="dia12">Jueves 1/12</option>
                <option id="dia13">Viernes 2/12</option>
                <option id="dia14">Sábado 3/12</option>
                <option id="dia15">Domingo 4/12</option>
                <option id="dia16">Lunes 5/12</option>
                <option id="dia17">Martes 6/12</option>
                <option id="dia18">Viernes 9/12</option>
                <option id="dia19" selected>Sábado 10/12</option>
                <option id="dia20">Martes 13/12</option>
                <option id="dia21">Miércoles 14/12</option>
                <option id="dia22">Sábado 17/12</option>
                <option id="dia23">Domingo 18/12</option>
            </select>
        </div>
    </div>
    <div class="contenedor-resultados-general">
        <span id="texto-fase">Fases</span>
        <div class="contenedor-resultados-partidos">
            <div class="resultado-1" id="primer-contenedor">
                <div class="seccion-a">
                    <span class="texto-paisx">País X</span><span>1</span><br>
                    <span class="texto-paisy">País Y</span><span>2</span>
                    <div>
                        <span>Estadio: </span>
                        <span>Esto cambia también</span>
                    </div>
                </div>
                <hr>
                <div class="seccion-b">
                    <span>5:00 AM</span>
                </div>
            </div>
            <div class="resultado-2" id="segundo-contenedor">
                <div class="seccion-a">
                    <span class="texto-paisx">País X</span><span>1</span><br>
                    <span class="texto-paisy">País Y</span><span>2</span>
                    <div>
                        <span>Estadio: </span>
                        <span>Esto cambia también</span>
                    </div>
                </div>
                <hr>
                <div class="seccion-b">
                    <span>5:00 AM</span>
                </div>
            </div>
            <div class="resultado-3" id="tercer-contenedor">
                <div class="seccion-a">
                    <span class="texto-paisx">País X</span><span>1</span><br>
                    <span class="texto-paisy">País Y</span><span>2</span>
                    <div>
                        <span>Estadio: </span>
                        <span>Esto cambia también</span>
                    </div>
                </div>
                <hr>
                <div class="seccion-b">
                    <span>5:00 AM</span>
                </div>
            </div>
            <div class="resultado-4" id="cuarto-contenedor">
                <div class="seccion-a">
                    <span class="texto-paisx">País X</span><span>1</span><br>
                    <span class="texto-paisy">País Y</span><span>2</span>
                    <div>
                        <span>Estadio: </span>
                        <span>Esto cambia también</span>
                    </div>
                </div>
                <hr>
                <div class="seccion-b">
                    <span>5:00 AM</span>
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
    <script src="JS\ResultadoJS.js" charset="utf-8"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/HomeStyle.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="CSS/EquipoStyle.css" type="text/css">
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
                    <li><a href="./index.php" class="<?php echo $inicio ? 'seleccion' : ''; ?>">Inicio</a></li>
                    <li><a href="./Equipos.php" class="<?php echo$equipo ? 'seleccion' : ''; ?>">Equipos</a></li>
                    <li><a href="./partidos.php" class="<?php echo $partido ? 'seleccion' : ''; ?>">Partidos</a></li>
                    <li><a href="./posiciones.php" class="<?php echo $posicion ? 'seleccion' : ''; ?>">Posiciones</a></li>
                    <li><a href="./clasificacion.php" class="<?php echo $clasificacion ? 'seleccion' : ''; ?>">Clasificación</a></li>
                    <li><a href="./favoritos.php" class="<?php echo $favorito ? 'seleccion' : ''; ?>">Favoritos</a></li>
                </ul>
                <div class="contenedor-usuario">
                    <div class="contenedor-registrarse">
                        <a href="" class="registrarse">Registrarse</a>
                    </div>
                    <hr class="linea-usuario">
                    <div class="contenedor-iniciarsesion">
                        <a href="./sign.php" class="iniciar-sesion">Iniciar sesión</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
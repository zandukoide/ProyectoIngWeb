<!DOCTYPE html>
<html lang="en">
<head>
    <link href="CSS/LogSign.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login/SignUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenedor-general" id="contenedor">
        <div class="contenedor-formulario contenedor-registro">
            <form action="">
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="email" name="correo" placeholder="Correo Electrónico">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <button>Registrarse</button>
            </form>
        </div>
        <div class="contenedor-formulario contenedor-sesion">
            <form action="">
                <input type="email" name="correo" placeholder="Correo Electrónico">
                <input type="password" name="contraseña" placeholder="Contraseña">
                <a href="">¿Olvidaste tu contraseña?</a>
                <button>Iniciar Sesión</button>
            </form>
        </div>
        <div class="contenedor-pestaña">
            <div class="pestaña">
                <div class="panel-pestaña pestaña-izquierda">
                    <h1>¡Bienvenido otra vez!</h1>
                    <p>Para mantenerte conectado, debes iniciar sesión nuevamente</p>
                    <button class="desaparecer" id="login">Iniciar Sesión</button>
                </div>
                <div class="panel-pestaña pestaña-derecha">
                    <h1>¡Bienvenido!</h1>
                    <p>Para poder registrarte, necesitamos que ingreses tus datos</p>
                    <button class="desaparecer" id="registro">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const BotonRegistro = document.getElementById('registro');
        const BotonLogin = document.getElementById('login');
        const contenedor = document.getElementById('contenedor');

        BotonRegistro.addEventListener('click', ()=>{
            container.classList.add("panel-derecha-activo");
        })
        BotonLogin.addEventListener('click', ()=>{
            container.classList.remove("panel-derecha-activo");
        })
    </script>
</body>
</html>
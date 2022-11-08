<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link href="CSS/SignStyle.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login/SignUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>

<body>


<div class="contenedor-global" id="container">
	<div class="contenedor-form contenedor-signup">
		<form action="#">
			<h1>¡Regístrate!</h1>
			<!--<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>-->
			<!--<span>or use your email for registration</span>-->
			<input type="text" placeholder="Nombre" />
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<button>Registrarse</button>
		</form>
	</div>
	<div class="contenedor-form contenedor-login">
		<form action="#">
			<h1>Iniciar Sesión</h1>
			<!--<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>-->
			<!--<span>or use your account</span>-->
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<a href="#">¿Olvidaste tu contraseña?</a>
			<button>Iniciar Sesión</button>
		</form>
	</div>
	<div class="contenedor-superposicion">
		<div class="superposicion">
			<div class="panel-superpuesto superposicion-izquierda">
				<h1>¡Hola de Nuevo!</h1>
				<p>Para mantenerte conectado, necesitas ingresar tus datos de inicio de sesión</p>
				<button class="fantasma" id="signIn">Iniciar Sesión</button>
			</div>
			<div class="panel-superpuesto superposicion-derecha">
				<h1>¡Bienvenido!</h1>
				<p>¿Aún no tienes cuenta? No te preocupes, crearla es rápido y sencillo</p>
				<button class="fantasma" id="signUp">Registrarse</button>
			</div>
		</div>
	</div>
</div>

<script src="JS\SignJS.js" charset="utf-8"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/boots.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/estilos02.css">
	<!--esto ver jquery no reconoce correctamente-->
	<script src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous"></script>
	 <!--para agregar font-awesome iconos
	 https://fontawesome.com/icons?d=gallery-->
	 <script src="js/all.js"></script>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="flotanteizquierda">
					<h1>Esta es mi Pagina</h1>
					<a href="#" class="btn-menu"> <i class="glyphicon glyphicon-align-justify"></i> Menu </a>
				</div>
				<div class="user flotantederecha">
					<span class="glyphicon glyphicon-user"></span> 
					Nombre Usuario 
					<span class="glyphicon glyphicon-off"></span>
				</div>
			</div>
		</div>
	</header>
	<div class="sidebar">
		<div class="menudiv">
			<nav>
				<ul class="menu">
					<li><a href="#"> <span class="icono izquierda glyphicon glyphicon-user"></span> Nosostros</a></li>
					<li><a href="#"> <span class="icono izquierda glyphicon glyphicon-envelope"></span> La carta</a></li>
					<li class="submenu">
						<a href="#"> <span class="icono izquierda glyphicon glyphicon-pencil"></span> La barra
						<span class="icono derecha glyphicon glyphicon-chevron-down"></span></a>
							<ul>
								<li><a href="uno.html">Uno</a></li>
								<li><a href="https://www.youtube.com">321</a></li>
								<li><a href="dos.php">DOs</a></li>
							</ul>
					</li>
					<li class="submenu">
						<a href="#" class=""> <span class="icono izquierda glyphicon glyphicon-user"></span> Reservas
						<span class="icono derecha glyphicon glyphicon-chevron-down"></span></a>
							<ul>
								<li><a href="#">123</a></li>
								<li><a href="#">321</a></li>
								<li><a href="#">213</a></li>
							</ul>
					</li>
					<li><a href="#"> <span class="icono izquierda glyphicon glyphicon-user"></span> El blog</a></li>
					<li><a href="#"> <span class="icono izquierda glyphicon glyphicon-user"></span> Contactos</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="main">
		<div class="container-fluid">
			<form action="" class="">
			<div class="form-group">
				<label for="nombre">Nombre :</label>
				<input type="text" id="nombre" class="form-control" placeholder="Nombre:">
			</div>
			<div class="form-group has-success">
				<label for="" id="nombre" class="control-label col-md-2">Nombre :</label>
				<div class="col-md-10">
					<input type="text" class="form-control" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label for="option">Elige una Opcion:</label>
				<select name="" id="option" class="form-control">
					<option value="">Opcion #1</option>
					<option value="">Opcion #2</option>
					<option value="">Opcion #3</option>
					<option value="">Opcion #4</option>
					<option value="">Opcion #5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="mensaje">Mensaje:</label>
				<textarea class="form-control" name="" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
			</div>
			<div class="form-group">
				<label for="archivo">Archivo :</label>
				<input type="file" id="archivo">
				<p class="help-block">Maximo 50mb</p>
			</div>

			<div class="form-group">
				<button class="btn btn-primary">Enviar</button>
			</div>
	 
		</form>
		<div class="panel-primary">
			<div class="panel-heading">
				<h1>Titulo del Panel</h1>
			</div>
			<div class="panel-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="panel-footer">
				Pie de pagina
			</div>			
		</div>
			<h1>titulo</h1>
			<table class="table table-striped">
			<tr>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>USUARIO</th>
				<th>GLIPHICON</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Nombre 1</td>
				<td>Username 1</td>
				<td><i class="fas fa-home"></i></td>
			</tr>
			<tr>
				<td>2</td>
				<td>Nombre 2</td>
				<td>Username 2</td>
				<td><i class="fas fa-angle-double-down"></i></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Nombre 3</td>
				<td>Username 3</td>
				<td><i class="fas fa-calendar-alt"></i></td>
			</tr>
		</table>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/main02.js"></script>
</body>
</html>
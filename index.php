
<html>
	<head>
		<? include('header.php');?>	
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="index.php">Agregador de Noticias</a>
					<div class="nav-collapse">
						<ul class="nav pull-right">
							<? session_start();
							if(empty($_SESSION['id'])):
							?>
							<li><a href="index.php?page=registro.php">Registro</a></li>
							<li><a href="index.php?page=login.php">Login</a></li>
							<?else:?>
							<li><a href="index.php?page=addarticulo.php">Añadir articulo</a></li>
							<li><a href="index.php?page=perfil.php">Perfil</a></li>
							<li><a href="index.php?page=Logout.php">Logout</a></li>
							<?endif;?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
		 	<?php
				if (!isset($_GET['page'])||$_GET['page']=="index.php") {
					include ('menu.php');
		 			include ('portada.php');
				} elseif($_GET['page']=="users.php"||$_GET['page']=="portada.php"||$_GET['page']=="pendientes.php") {
					include ('menu.php');
 					include ($_GET['page']);
				}else{
					include ($_GET['page']);
				}
			?>

		</div>
	
		<script src="/js/bootstrap.js"></script>
	<body>
</html>
<div class="span10">

		<ul class="nav nav-tabs">
		  <li <?if(!isset($_GET['page'])||(isset($_GET['page'])&&$_GET['page']=="portada.php")||(isset($_GET['page'])&&$_GET['page']=="index.php")){echo 'class="active"';} ?>>
		    <a href="index.php">Portada</a>
		  </li>
		  <li <?if((isset($_GET['page'])&&$_GET['page']=="pendientes.php")){echo 'class="active"';} ?>>
		 	<a href="index.php?page=pendientes.php">Pendientes</a>
		  </li>
		  <li <?if((isset($_GET['page'])&&$_GET['page']=="users.php")){echo 'class="active"';} ?>>
		  	<a href="index.php?page=users.php">Usuarios</a>
		  </li>
		</ul>
</div>
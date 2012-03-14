<?
include('connection.php');

function connect($DBHost,$DBUser,$DBPass){
	$id_connection =@mysql_connect($DBHost,$DBUser,$DBPass) or die("conexion fallida");
	mysql_select_db('news',$id_connection);
	return $id_connection;
}

function desconnect($id_connection){
	mysql_close($id_connection);
}

function all_articles_page($num_inicial_limt=0){
	$select="SELECT * FROM `articles` LIMIT ".$num_inicial_limt.",5";
	$query=mysql_query($select);
	while ($row = mysql_fetch_array($query)) {
		$result[]=$row;
	}
	return $result;
}

function articles_page_mas_votados($num_inicial_limt=0){
	$select="SELECT * FROM `articles` WHERE `public`=1 LIMIT ".$num_inicial_limt.",5";
	$query=mysql_query($select);
	while ($row = mysql_fetch_array($query)) {
		$result[]=$row;
	}
	return $result;
}

function paginacion($pagina){
	$select="SELECT COUNT( `id` ) AS total FROM `articles` ";
	$query=mysql_query($select);
	$row = mysql_fetch_array($query);
	$total=$row['total'];
	$resultados_pagina=5;
	$total_paginas=ceil($total/$resultados_pagina);
	$num_inicial=($pagina-1)*$resultados_pagina;

	$result['paginas_total']=$total_paginas;
	$result['num_inicial_limt']=$num_inicial;

	return $result;
}
function registro($datos){
	$insert="INSERT INTO `news`.`users` (`id`, `user_name`, `password`, `mail`, `bio`) VALUES (NULL, '".$datos['user_name']."', '".$datos['password']."', '".$datos['mail']."', '".$datos['bio']."');";
	$query=mysql_query($insert);
}

function login($datos){
	$select="SELECT * FROM `users` ";
	$query=mysql_query($select);
	$row = mysql_fetch_array($query);
	if ($datos['user_name']=&&$) {
		# code...
	}
}

$id_connection=connect($DBHost,$DBUser,$DBPass);
$_POST['password'] =  md5($_POST['password']);
registro($_POST);
desconnect($id_connection);
?>
<form action="" method="post">
	<input type="text" name="user_name">
	<input type="password" name="password">
	<input type="text" name="mail">
	<input type="text" name="bio">
	<input type="submit" value="">
</form>

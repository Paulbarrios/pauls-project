<?

class connection{

	private $DBHost="localhost:3306";
	private $DBUser="root";
	private $DBPass="root";


	function connect(){
		$id_connection =@mysql_connect($this->DBHost,$this->DBUser,$this->DBPass) or die("conexion fallida");
		mysql_select_db('news',$id_connection);
			return $id_connection;
	}

	function desconnect($id_connection){
		mysql_close($id_connection);
	}

}


class articulos{

	private $resultados_pagina=5;

	function all_articles_page($num_inicial_limt=0){
		$select="SELECT articles.id, `title`, `description`, `link`, `image`, `total_votes`, `total_coment`, `user_id`, `public`,`user_name` FROM `articles` INNER JOIN `users` ON articles.user_id = users.id LIMIT ".$num_inicial_limt.",".$this->resultados_pagina;
		$query=mysql_query($select);
		while ($row = mysql_fetch_array($query)) {
			$result[]=$row;
		}
		return $result;
	}

	function top_articles_page($num_inicial_limt=0){
		$select="SELECT articles.id, `title`, `description`, `link`, `image`, `total_votes`, `total_coment`, `user_id`, `public`,`user_name` FROM `articles` INNER JOIN `users` ON articles.user_id = users.id WHERE `public`=1 LIMIT ".$num_inicial_limt.",".$this->resultados_pagina;
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
		$total_paginas=ceil($total/$this->resultados_pagina);
		$num_inicial=($pagina-1)*$this->resultados_pagina;

		$result['paginas_total']=$total_paginas;
		$result['num_inicial_limt']=$num_inicial;

		return $result;
	}

	function paginacion_portada($pagina){
		$select="SELECT COUNT(  `id` ) AS total FROM  `articles` WHERE  `public` =1 ";
		$query=mysql_query($select);
		$row = mysql_fetch_array($query);
		$total=$row['total'];
		$total_paginas=ceil($total/$this->resultados_pagina);
		$num_inicial=($pagina-1)*$this->resultados_pagina;

		$result['paginas_total']=$total_paginas;
		$result['num_inicial_limt']=$num_inicial;

		return $result;
	}

	function comentar($user_id=0,$article_id,$content){
		$insert="INSERT INTO `news`.`comments` (`id`, `article_id`, `user_id`, `content`) VALUES (NULL, '".$user_id."', '".$article_id."', '".$content."')";
		$query=mysql_query($insert);
	}

	function votar($article_id,$user_id=0,$ip){
		$insert="INSERT INTO `news`.`votes` (`id`, `article_id`, `user_id`, `ip`) VALUES (NULL, '".$article_id."', '".$user_id."', '".$ip."')";
		$query=mysql_query($insert);
		$this->incremnto_columna("total_votes",$article_id);
		$this->salir_portada($article_id);
	}

	function verificacion_votar($article_id,$ip){
		$select="SELECT * FROM `votes` WHERE `ip` =".$ip." `article_id`= ".$article_id;
		$query=mysql_query($select);
		if($query=false){
			$mensaje="Ya ha votado este articulo.";
		}
	}

	private function incremnto_columna($columna,$article_id){
		$insert="UPDATE `news`.`articles` SET `".$columna."` = `".$columna."`+1 WHERE `articles`.`id` =".$article_id;
		$query=mysql_query($insert);
	}

	private function salir_portada($article_id){
		$select="SELECT `total_votes` FROM `articles` WHERE `id` =".$article_id;
		$query=mysql_query($select);
		$row = mysql_fetch_array($query);
		if($row['total_votes']>=10){
			$insert="UPDATE `news`.`articles` SET `public` = 1 WHERE `articles`.`id` =".$article_id;
			$query=mysql_query($insert);
		}
	}

	function mostrar_articulo($article_id){
		$select="SELECT articles.id, `title`, `description`, `link`, `image`, `total_votes`, `total_coment`, `user_id`, `public`,`user_name` FROM `articles` INNER JOIN `users` ON articles.user_id = users.id WHERE articles.id=".$article_id['article_id'];
		$query=mysql_query($select);
		$row = mysql_fetch_array($query);

		return $row;
	}

	function mostrar_comentarios($article_id){
		$select="SELECT `content`, `user_name` FROM `comments` INNER JOIN `users` ON comments.user_id=users.id WHERE comments.article_id=".$article_id['article_id'];
		$query=mysql_query($select);
		$result=array();
		while ($row = mysql_fetch_array($query)) {
			$result[]=$row;
		}
		return $result;
	}

	function add_article($datos){
		$insert="INSERT INTO `news`.`articles` (`id`, `title`, `description`, `link`, `image`, `user_id`) VALUES (NULL, '".$datos['title']."', '".$datos['description']."', '".$datos['link']."', '".$datos['image']."', '".$datos['user_id']."')";
		$query=mysql_query($insert);
	}
}

class usuario{

	function registro($datos){
		$insert="INSERT INTO `news`.`users` (`id`, `user_name`, `password`, `mail`, `bio`) VALUES (NULL, '".$datos['user_name']."', '".$datos['password']."', '".$datos['mail']."', '".$datos['bio']."')";
		$query=mysql_query($insert);
		$select="SELECT MAX( `id` ) AS id FROM `users`";
		$query=mysql_query($select);
		$row = mysql_fetch_array($query);
		$id=$row['id'];
		$insert="INSERT INTO `news`.`badges` (`id`, `user_id`) VALUES (NULL, '".$id."')";
		$query=mysql_query($insert);
		$mensaje="El registro se realizo con exito";
		if ($query==false) {
			$mensaje= "Este nombre de usuario ya existe.";
		}
		return $mensaje;
	}

	function login($datos){
		$select="SELECT * FROM `users` WHERE `user_name`= '".$datos['user_name']."'";
		$query=mysql_query($select);
		$row = mysql_fetch_array($query);
		if($row==false){
			$mensaje="Este usuario no esta registrado.";
		}elseif ($datos['user_name']==$row['user_name'] && $datos['password']==$row['password']){
			//session_start();
			$_SESSION['id']=$row['id'];
			$mensaje="Se ha logeado correctamente.";
		}else{
			$mensaje="El usuario o la contraseña no son correctos.";
		}
		return $mensaje;
	}

	function logout(){
		session_destroy();
	}

	function mostrar_perfil($user_id){
		$select="SELECT * FROM `users` WHERE `user_name`= '".$user_id['user_id']."'";
		$query=mysql_query($select);
		$row = mysql_fetch_array($query);

		return $row;
	}

	function edit_perfil($datos){
		$insert="UPDATE `news`.`users` SET 
		`user_name` = '".$datos['user_name']."',
		`password` = '".$datos['password']."',
		`mail` = '".$datos['mail']."',
		`bio` = '".$datos['bio']."' 
		WHERE `users`.`id` =".$datos['id'];
		$query=mysql_query($insert);
	}

	function code_pass($datos){
		$datos['password'] =  md5($datos['password']);
		return $datos;
	}

	function mostrar_usuarios(){
		$select="SELECT * FROM `users` INNER JOIN `badges` ON users.id=badges.user_id";
		$query=mysql_query($select);
		while ($row = mysql_fetch_array($query)) {
			$result[]=$row;
		}
		return $result;
	}

	function badges($user_id,$badge){
		$insert="UPDATE `news`.`badges` SET `badge".$badge."` = '1' WHERE `user_id`=".$user_id;
		$query=mysql_query($insert);
	}

}
?>
<?
include 'functions.php';
$id=$_GET['id'];
$connection= new connection;
$id_connection=$connection->connect();
$articulos= new articulos;
$usuario= new usuario;
if(!empty($_POST)){
	$articulos->comentar($id,$_SESSION['id'],$_POST['content']);
	$usuario->badges($_SESSION['id'],"2");
}
if(!empty($_SESSION['id'])){
	$user=$usuario->mostrar_perfil($_SESSION['id']);
}
$mostrar=$articulos->mostrar_articulo($id);
$comentarios=$articulos->mostrar_comentarios($id);
$connection->desconnect($id_connection);
?>
<div class="span10">
	<div class="row">
			<div class="span1">
				<div>
							<p class="center">
								<span class="badge badge-info"><?echo $mostrar['total_votes'];?></span>
							</p>
							<p class="center espacio">
								<a href="votar.php?article_id=<?echo $mostrar['id'];?>&page=articulo.php">
									<span class="label label-info">Votar</span>
								</a>
							</p>
					</div>
			</div>
			<div class="span2">
				<div class="thumbnail height">
					<img class="height" alt="Medium" src="<?echo $mostrar['image'];?>" width="210">
			    </div>
		   </div>
		<div class="span7">
			<div class="line">
				<a class="link8" href="<?echo $mostrar['link'];?>"><h3><?echo $mostrar['title'];?></h3></a>
				<footer>
					Puablicado por: <?echo $mostrar['user_name'];?> | Link: <a href="<?echo $mostrar['link'];?>"><?echo $mostrar['link'];?></a>
				</footer>
			</div>
			<div>
				<?echo $mostrar['description'];?>
			</div>
		</div>
	</div>
</div>

<div class="span10">
	<div class="row">
		<div class="line">
				<h2>Comentarios</h2>
		</div>
	</div>
	<?foreach($comentarios as $comentario):?>
		<div class="row">
			<pre class="comment">
				<p class="p"><h2><?echo $comentario['user_name'];?></h2></p>
				<p class="p2"><?echo $comentario['content'];?></p>
			</pre>
		</div>
	<?endforeach;?>
</div>
<?if(!empty($_SESSION['id'])):?>
	<div class="span10">
		<div class="row">
		    <h3>Comentar</h3>
		      <form class="well" method="post" action="index.php?page=articulo.php&id=<?echo $id;?>">
		        <p class="p3"><h4><?echo $user['user_name'];?></h4></p>
	    		<label>Contenido</label>
	    		<textarea rows="3" class="span10" name="content"></textarea>
	          	<input type="hidden" name="user_id" value="<?echo $_SESSION['id']?>">
	          	<input type="hidden" name="article_id" value="<?echo $id?>">
	          <div>
	            <button type="submit" class="btn">Añadir comentario</button>
	          </div>
	  		</form>
	   	</div>
	</div>
<?endif;?>
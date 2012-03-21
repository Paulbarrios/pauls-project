<?
include 'functions.php';
$id=$_GET['id'];
$connection= new connection;
$id_connection=$connection->connect();
$articulos= new articulos;
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
							<span class="label label-info">Votar</span>
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
				<h3><?echo $mostrar['title'];?></h3>
				<footer>
					Puablicado por: <?echo $mostrar['user_name'];?> | Link: <?echo $mostrar['link'];?>
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
				<p class="p"><h3><?echo $comentario['user_name'];?></h3></p>
				<p class="p2"><?echo $comentario['content'];?></p>
			</pre>
		</div>
	<?endforeach;?>
</div>	
<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$articulos= new articulos;
$inicio=0;
$pagina=1;
$paginacion=$articulos->paginacion_portada($pagina);
if(isset($_GET['pagina'])){
	$paginacion=$articulos->paginacion_portada($_GET['pagina']);
	$inicio=$paginacion['num_inicial_limt'];
	$pagina=$_GET['pagina'];
}
$mostrar=$articulos->top_articles_page($inicio);
$connection->desconnect($id_connection);
?>
<?foreach($mostrar as $articulo):?>
	<div class="span10 margin_articulos">
		<div class="row">
				<div class="span1">
					<div>
							<p class="center">
								<span class="badge badge-info"><?echo $articulo['total_votes'];?></span>
							</p>
							<p class="center espacio">
								<a href="votar.php?article_id=<?echo $articulo['id'];?>&page=index.php&pagina=<?echo $pagina;?>">
									<span class="label label-info">Votar</span>
								</a>
							</p>
					</div>
				</div>
				<div class="span2">
					<div class="thumbnail height">
						<img class="height" alt="Medium" src="<?echo $articulo['image'];?>" width="210">
				    </div>
			   </div>
			<div class="span7">
				<div class="line">
					<a class="link8" href="<?echo $articulo['link'];?>"><h3><?echo $articulo['title'];?></h3></a>
					<footer>
						Puablicado por: <?echo $articulo['user_name'];?> | Link: <a href="<?echo $articulo['link'];?>"><?echo $articulo['link'];?></a>
					</footer>
				</div>
				<div>
					<?echo $articulo['description'];?>
				</div>
				<footer class="pull-right">
						<a href="index.php?page=articulo.php&id=<?echo $articulo['id'];?>">Comentarios</a> <span class="badge badge-info"><?echo $articulo['total_coment'];?></span>
				</footer>
			</div>
		</div>
	</div>
<?endforeach;?>

<div class="row">
	<div class="span2 offset9">
		<div class="pagination">
		  <ul>
		  	<?for($i=1;$i<=$paginacion['paginas_total'];$i++):?>
		    <li <?if($pagina==$i):?>class="active"<?endif;?>>
		      	<a href="index.php?pagina=<?echo $i;?>"><?echo $i;?></a>
		    </li>
		    <?endfor;?>
		  </ul>
		</div>
	</div>
</div>
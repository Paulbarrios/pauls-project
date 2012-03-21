<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$usuario= new usuario;
$mostrar=$usuario->mostrar_usuarios();
$connection->desconnect($id_connection);
?>
<?foreach($mostrar as $user):?>
	<div class="span10">
		<div class="row">
			<div class="span6">
					<div class="line">
						<h3><?echo $user['user_name'];?></h3>
						<footer>
							<?echo $user['mail'];?>
						</footer>
					</div>
					<div>
						<?echo $user['bio'];?>
					</div>
			</div>
			<?if($user['badge1']=='1'):?>
			<div class="span1">
				<div class="thumbnail">
					<img alt="Medium" src="/img/publicador.jpg" width="120">
				</div>
			</div>
			<?endif;?>
			<?if($user['badge2']=='1'):?>
			<div class="span1">
				<div class="thumbnail">
					<img  alt="Medium" src="/img/comentador.jpg" width="120">
				</div>
			</div>
			<?endif;?>
			<?if($user['badge3']=='1'):?>
			<div class="span1">
				<div class="thumbnail">
					<img alt="Medium" src="/img/portada.jpg" width="120">
				</div>
			</div>
			<?endif;?>
			<?if($user['badge4']=='1'):?>
			<div class="span1">
				<div class="thumbnail">
					<img alt="Medium" src="/img/noticias.jpg" width="120">
				</div>
			</div>
			<?endif;?>
		</div>
	</div>
<?endforeach;?>
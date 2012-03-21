<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$usuario= new usuario;
if (!empty($_POST)) {
  $_POST=$usuario->code_pass($_POST);
  $login=$usuario->login($_POST);
}
$connection->desconnect($id_connection);
?>
<?if(!empty($_POST)):?>
  <div class="span6 offset2">
    <div class="well center">
      <?if($login=="ok"){
        header('location: index.php?page=perfil.php');
      }else{
         echo $login;
      }?>
    </div>
  </div>
<?else:?>
	<div class="span4 offset3">
 		<h2>Login</h2>
 		<form class="form-horizontal" method="post" action="index.php?page=login.php">
  			<label>Nombre de usuario</label>
  			<input type="text" class="span3" name="user_name">
  			<label>Contraseña</label>
  			<input type="password" class="span3" name="password">
  			<button type="submit" class="btn pull-right">Login</button>
		</form>
	</div>
<?endif;?>
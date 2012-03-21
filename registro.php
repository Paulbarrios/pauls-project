<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$usuario= new usuario;
if (!empty($_POST)) {
  $_POST=$usuario->code_pass($_POST);
  $registro=$usuario->registro($_POST);
}
$connection->desconnect($id_connection);
?>
<?if(!empty($_POST)):?>
  <div class="span6 offset2">
    <div class="well center">
      <?echo $registro;?>
    </div>
  </div>
<?else:?>
  <div class="span6 offset2">
   		<h2>Registro</h2>
   		<form method="post" class="well" action="index.php?page=registro.php">
    			<label>Nombre de usuario</label>
    			<input type="text" class="span3" placeholder="Escriba su nickname" name="user_name">
    			<span class="help-inline">*</span>
    			<label>Contraseña</label>
    			<input type="password" class="span3" name="password">
    			<span class="help-inline">*</span>
    			<label>Repite tu contraseña</label>
    			<input type="password" class="span3">
    			<span class="help-inline">*</span>
    			<label>Email</label>
    			<input type="text" class="span3" name="mail">
    			<label>Biografia</label>
    			<input type="text" class="span5" placeholder="Escribe algo sobre ti" name="bio">  			
    			<button type="submit" class="btn">Registro</button>
    			<p class="pull-right">* Campos obligatorios.</p>
  		</form>
   </div>
<?endif;?>
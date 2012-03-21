<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$usuario= new usuario;
if (!empty($_POST)) {
  $_POST=$usuario->code_pass($_POST);
  $edit=$usuario->edit_perfil($_POST);
}
$mostrar=$usuario->mostrar_perfil($_SESSION['id']);
$connection->desconnect($id_connection);
?>
<div class="span6 offset2">
 		<h2>Editar perfil</h2>
 		<form class="well" method="post" action"index.php?page=perfil.php">
  			<label>Contraseña</label>
        <input type="hidden" name="id" value="<?echo $_SESSION['id'];?>">
  			<input type="password" class="span3" name="password">
  			<span class="help-inline">*</span>
  			<label>Repite tu contraseña</label>
  			<input type="password" class="span3">
  			<span class="help-inline">*</span>
  			<label>Email</label>
  			<input type="text" class="span3" name="mail" value="<?echo $mostrar['mail'];?>">
  			<span class="help-inline">*</span>
        <label>Biografia</label>
  			<input type="text" class="span5" name="bio" value="<?echo $mostrar['bio'];?>">
        <span class="help-inline">*</span>
        <div class="row">
          <div  class="badge1">
            <label>Badges</label>
          </div>
          <?if($mostrar['badge1']=='1'):?>
              <div class="span1">
                <div class="thumbnail">
                  <img alt="Medium" src="/img/publicador.jpg" width="120">
                </div>
              </div>
          <?endif;?>
          <?if($mostrar['badge2']=='1'):?>
          <div class="span1">
            <div class="thumbnail">
             <img  alt="Medium" src="/img/comentador.jpg" width="120">
            </div>
          </div>
          <?endif;?>
          <?if($mostrar['badge3']=='1'):?>
          <div class="span1">
            <div class="thumbnail">
              <img alt="Medium" src="/img/portada.jpg" width="120">
            </div>
          </div>
           <?endif;?>
        </div>
        <div class="boton">
          <button type="submit" class="btn">Confirmar</button>
          <p class="pull-right">* Para editar tu perfil rellena todos los campos. La contraseña es necesaria.</p>
        </div>
		</form>
 </div>

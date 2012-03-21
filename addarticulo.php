<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$articulos= new articulos;
$usuarios= new usuario;
if (!empty($_POST)) {
  $articulos->add_article($_POST);
  $usuarios->badges($_SESSION['id'],1);
}
$connection->desconnect($id_connection);

?>
<?if(empty($_POST)):?>
  <div class="span6 offset2 add">
    <h2>Añadir articulo</h2>
      <form class="well" method="post" action="index.php?page=addarticulo.php">
          <label>Titulo</label>
    			<input type="text" class="span3" name="title">
    			<label>Descripción</label>
    			<textarea rows="5" class="span5" name="description"></textarea>
    			<label>link</label>
    			<input type="text" class="span5" name="link">
    			<label>Imagen</label>
    			<input type="text" class="span5" name="image">
          <input type="hidden" name="user_id" value="<?echo $_SESSION['id']?>">
          <div class="boton">
            <button type="submit" class="btn">Añadir</button>
          </div>
  		</form>
   </div>
<?else:
  header('location: index.php');
  endif;?>

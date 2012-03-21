<?
include 'functions.php';
session_start();
$ip=$_SERVER['REMOTE_ADDR'];
$connection= new connection;
$id_connection=$connection->connect();
$articulos= new articulos;
$articulos->votar($_GET['article_id'],$_SESSION['id'],$ip);
$connection->desconnect($id_connection);
$article_id=$_GET['article_id'];
$page=$_GET['page'];
$pagina=$_GET['pagina'];
header('location:  index.php?page='.$page.'&pagina='.$pagina.'&id='.$article_id);
?>
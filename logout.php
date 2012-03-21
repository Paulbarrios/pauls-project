<?
include 'functions.php';
$connection= new connection;
$id_connection=$connection->connect();
$usuario= new usuario;
session_start();
$usuario->logout();
header('location: index.php');
$connection->desconnect($id_connection);
?>
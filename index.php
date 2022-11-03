<?php 

$id = $_GET['id'];

try {
	$conexion = new PDO('mysql:host=localhost;dbname=copiadoraslobo','root','');

	echo "Conexión exitosa a la base de datos 'copiadoraslobo' index.php";
	print_r($conexion);

} catch (PDOException $e) {
	echo "Error:". $e->getMessage();
	die();
	print_r($e);
}


require 'index.view.php';

 ?>
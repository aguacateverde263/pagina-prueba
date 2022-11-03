<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Paginacion</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="contenedor">
		<h1>Genera tu Reporte</h1>
		<h1>¿Que problemas tienes con el equipo?</h1>
		<section class="articulos">
			<ul>
					<li>Lorem ipsum dolor sit amet,<?php 
						print_r($conexion);
						echo "la variable resultados está en el archivo index.php.....";

					/*$resultados = $conexion->query('SELECT * FROM equipos ');
					print_r($resultados);
					foreach ($resultados as $fila) {
						echo $fila['id'].'-'.$fila['dependencia']; 
					}*/

					$statement = $conexion->prepare('SELECT * FROM equipos WHERE id = :id');
					$statement -> execute( array(':id' => $id) );

					$resultados = $statement->fetchAll();

					echo "<pre>";
					print_r($resultados);
					echo "</pre>";

					foreach ($resultados as $equipo) {
						echo $equipo['area'];
				
					


		 		 ?></li>

		 		<li>Lorem ipsum dolor sit amet, id= <?php echo $equipo['id']; ?></li>	
		 		<li>Lorem ipsum dolor sit amet, folio= <?php echo $equipo['folio']; ?></li>	
		 		<li>Lorem ipsum dolor sit amet, dependencia= <?php echo $equipo['dependencia']; ?></li>	
		 		<li>Lorem ipsum dolor sit amet, area=<?php echo $equipo['area']; ?></li>	
		 		<li>Lorem ipsum dolor sit amet, Lectura =<?php echo $equipo['lectura']; ?></li>		
		 	<?php } ?>
			</ul>
		</section>

		<section class="paginacion">
			<ul>
				<li class="disable">&laquo</li>
				<li class="active"><a href="">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">&raquo</a></li>
			</ul>
			
		</section>
	</div>

</body>
</html>
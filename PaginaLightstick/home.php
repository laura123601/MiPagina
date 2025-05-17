<!doctype html>
<html lang="en">
<?php include("includes/templates/configuracion.php")?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<style>
		.bg-gris {
			background: #ededed;
		}

		.bg-white {
			background: white;
		}

		body {
			background-color: #173161;
		}

		.white-text {
			color: white;
		}

		.separator {
			/* border: solid red 10px; */
			padding-top: 100px;
			padding-bottom: 100px;
		}

		#imagen {
			display: block;
			/* Para eliminar márgenes innecesarios */
			margin: auto;
			/* Centra horizontalmente */
			width: 920px;
			/* Tamaño ajustable */
			height: auto;
			/* Mantiene proporción */
		}
		.testimonial-container {
			background: white;
			border-radius: 10px;
			box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
		}

		.testimonial-img {
			width: 80px; /* Reduce el tamaño de las imágenes */
			border-radius: 50%;
		}
		#testimonials {
			margin-bottom: 50px;
		}
		.testimonial-header {
			display: flex;
			align-items: center;
			gap: 15px; /* Espacio entre imagen y texto */
		}

		.testimonial-img {
			width: 80px;
			height: 80px;
			border-radius: 50%;
			object-fit: cover;
		}

		.testimonial-info h3, .testimonial-info h4 {
			margin: 0;
			text-align: left; /* Asegura que el texto esté alineado a la izquierda */
		}
		.btn-warning {
			background-color: #ffc107;
			border: none;
			color: #000;
			font-weight: bold;
			padding: 12px 20px;
		}

		.btn-warning:hover {
			background-color: #e0a800;
		}




	</style>
	<div class="text-center p-4">
		<img src="https://preview.redd.it/yboxxsuwozb71.jpg?width=640&crop=smart&auto=webp&s=df7e9f0442e6d4bdf07ca27931b481da9543bd2a"
			width="150">
	</div>
	<?php include("includes/templates/intro.php")?>
	<?php include("includes/templates/info.php")?>
	<?php include("includes/templates/imagenes_mov.php")?>
	<?php include("includes/templates/testimoniales.php")?>
	
	
	
	<?php include("includes/templates/info_gr_em.php")?>
	<?php include("includes/templates/fotos_gr.php")?>

	<?php
	mysqli_free_result($resultado);
	mysqli_close($conexion);
	?>
</body>

</html>
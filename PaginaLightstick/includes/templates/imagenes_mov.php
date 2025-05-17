<section class="d-flex flex-column justify-content-center align-items-center bg-gris">
		<div class="text-center p-4">
			<h1>Échale un vistazo a algunas fotos👇🏼:</h1>
		</div>
		<div class="container text-center row separator bg-gris">
			<img id="imagen" src="assets/img/imagen1.jpg" alt="Imagen dinámica">

			<script>
				$(document).ready(function () {
					let imagenes = ["assets/img/imagen1.jpg", "assets/img/imagen2.jpg", "assets/img/imagen3.jpg", "assets/img/imagen4.jpg"]; // Lista de imágenes
					let indice = 0;

					setInterval(function () {
						indice = (indice + 1) % imagenes.length; // Cambia el índice de la imagen
						$("#imagen").fadeOut(500, function () { // Desvanecer antes de cambiar
							$(this).attr("src", imagenes[indice]).fadeIn(500); // Cambia la imagen y la muestra nuevamente
						});
					}, 5000); // Cambia cada 5 segundos
				});


			</script>

		</div>
		<div class="text-center p-4">
			<h1></h1>
		</div>
	</section>
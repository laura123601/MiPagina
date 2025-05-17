<section class="d-flex justify-content-center bg-white">
		<div class="container text-center row separator">
			<div class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-center text-start">
				<img id="imagen" src="assets/img/imagen6.jpg" class="img-fluid" width="650">
			</div>
			<div class="col-12  col-md-6 d-flex flex-column align-items-start justify-content-center text-start"
				style="padding-left: 30px;">
				<h1>Conoce a TXT</h1>
				<p id="frase">
					Tomorrow X Together (en hangul, 투모로우바이투게더; romanización revisada del coreano, Tumoroubaitugedeo),
					abreviado frecuentemente como TXT,
					<br>
					es una boy band surcoreana de K-pop formada por Big Hit Music en 2019.
					<br>
					El grupo está compuesto por cinco integrantes: Yeonjun, Soobin, Beomgyu, Taehyun y Huening Kai.
					<br>
					TXT debutó el 4 de marzo de 2019 con el EP, The Dream Chapter: Star.
					<br>
					​El nombre oficial de su fanclub es MOA que significa "Moments Of Alwaysness" (Momentos de
					eternidad).
					<br>
					Son considerados los líderes de la cuarta generación del K-pop por la Recording Academy, la misma
					que otorga los premios Grammy.
				</p>
				<a class="btn btn-primary" id="cambiarTexto"> INFO DE SU EMPRESA </a>
				<script>
					// TODO: Al hacer clic, cambiar el texto del párrafo con id "frase"
					$(document).ready(function () {
						let estadoOriginal = true;
						let textoantiguo = `
							Tomorrow X Together (en hangul, 투모로우바이투게더; romanización revisada del coreano, Tumoroubaitugedeo),<br>
							abreviado frecuentemente como TXT,<br>
							es una boy band surcoreana de K-pop formada por Big Hit Music en 2019.<br>
							El grupo está compuesto por cinco integrantes: Yeonjun, Soobin, Beomgyu, Taehyun y Huening Kai.<br>
							TXT debutó el 4 de marzo de 2019 con el EP, The Dream Chapter: Star.<br>
							El nombre oficial de su fanclub es MOA que significa "Moments Of Alwaysness" (Momentos de eternidad).<br>
							Son considerados los líderes de la cuarta generación del K-pop por la Recording Academy, la misma que otorga los premios Grammy.
						`;
						let textonuevo = `
							HYBE Labels es una red de sellos discográficos propiedad de HYBE Corporation, anteriormente conocido como Big Hit Entertainment.<br>
							Estos sellos se encargan de la gestión y producción de artistas de K-Pop, incluyendo Big Hit Music,<br> 
							BELIFT LAB, Source Music, Pledis Entertainment, KOZ Entertainment, ADOR, y más.<br>
							HYBE Labels también tiene divisiones en Japón y América, con proyectos como HYBE Japan y HYBE Latin America. 
						`;





						$("#cambiarTexto").click(function () {
							if (estadoOriginal) {
								$("#frase").html(textonuevo);
							} else {
								$("#frase").html(textoantiguo);
							}
							estadoOriginal = !estadoOriginal;
						});
					});
				</script>
			</div>
		</div>
	</section>
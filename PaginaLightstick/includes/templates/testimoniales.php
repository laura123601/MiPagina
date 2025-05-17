<section id="testimonials" class="testimonials section light-background mb-5">
    
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h1 class="white-text text-center">Comentarios</h1>
        <p class="white-text text-center">Lee lo que otros opinan sobre el producto</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row g-5">
            <?php
            // Realizar la consulta
            $query = "SELECT * FROM comentarios";
            $resultado = mysqli_query($conexion, $query);

            // Verificar si la consulta tuvo éxito
            if (!$resultado) {
                die('Error en la consulta: ' . mysqli_error($conexion));
            }
            ?>

            <?php while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-container p-4">
                    <div class="testimonial-item">

                        <!-- Nuevo contenedor para imagen + nombre -->
                        <div class="testimonial-header">
                            <img src="assets/img/testimonials/testimonio.jpg" class="testimonial-img" alt="">
                            <div class="testimonial-info">
                                <h3><?php echo $row['nombre']; ?></h3>
                                <h5><?php echo $row['cargo']; ?></h5>
                            </div>
                        </div>

                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span><?php echo $row['comentario']; ?></span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div>
            </div><!-- End testimonial item -->
            <?php } ?>
        </div>
        <!-- Botón para acceder a la página de administración -->
        <div class="text-center mt-4">
            <a href="includes/admin/comentarios.php" class="btn btn-warning btn-lg">Acceder a la Administración</a>
        </div>

    </div>
</section>
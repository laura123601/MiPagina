<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Comentario</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">      
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4">Agregar Nuevo Comentario</h1>

                <!-- Formulario para agregar comentario -->
                <form action="comentarios-update.php" method="POST" enctype="multipart/form-data"> <!-- en action="", pon la ruta de tu archivo update -->
                   

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre"  required>
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Cargo</label>
                        <input type="text" class="form-control" name="cargo"  required>
                    </div>


                    <div class="mb-3">
                        <label for="comentario" class="form-label">Comentario</label>
                        <textarea class="form-control" name="comentario"  rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="puntuacion" class="form-label">Puntuación</label>
                        <select class="form-select" name="puntuacion"  required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar Comentario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JS (Opcional, solo si usas componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
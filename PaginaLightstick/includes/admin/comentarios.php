<?php

// Conectar con la Base de datos
include('../templates/configuracion.php');

// Consultar los registros de la tabla

$query = "SELECT * FROM comentarios";
$resultado = mysqli_query($conexion, $query);
// Verificar si hay registros
if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Comentarios</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
      <div class="row">
        <div class="col">
            <h1 class="text-center mb-4">Listado de Comentarios</h1>
            <div class="text-center mb-4">
                <a href="comentarios-form.php" class="btn btn-primary btn-lg">Nuevo Comentario</a> <!-- url a vuestro archivo form -->
            </div>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Cargo</th>
                        <th>Comentario</th>
                        <th>Puntuación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($fila['id']); ?></td>
                            <td>
                                <img src="uploads/<?php echo htmlspecialchars($fila['foto']); ?>" 
                                     alt="Foto de <?php echo htmlspecialchars($fila['foto']); ?>" 
                                     class="img-thumbnail" 
                                     style="max-width: 100px;">
                            </td>
                            <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                            <td><?php echo htmlspecialchars($fila['cargo']); ?></td>
                            <td><?php echo htmlspecialchars($fila['comentario']); ?></td>
                            <td><?php echo htmlspecialchars($fila['puntuacion']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- Enlace a Bootstrap JS (Opcional, solo si usas componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
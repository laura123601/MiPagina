<?php
// Conectar con la Base de datos
include('../templates/configuracion.php');

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesar los datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $cargo = mysqli_real_escape_string($conexion, $_POST['cargo']);
    $comentario = mysqli_real_escape_string($conexion, $_POST['comentario']);
    $puntuacion = (int) $_POST['puntuacion'];

    // Procesar el archivo de la foto
    $foto = $_FILES['foto']['name'];
    $rutaDestino = 'uploads/' . basename($foto);
   if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $foto = $_FILES['foto']['name'];
    $rutaDestino = 'uploads/' . basename($foto);
    if (!move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino)) {
        die('Error al subir la foto.');
    }
} else {
    // Si no hay foto subida, puedes poner un valor por defecto o manejar el error
    $foto = 'default.jpg'; // o ''
}


    // Insertar los datos en la tabla
    $query = "INSERT INTO comentarios (foto, nombre, cargo, comentario, puntuacion)
              VALUES ('$foto', '$nombre', '$cargo', ' $comentario', '$puntuacion')";
    if (mysqli_query($conexion, $query)) {
        header('Location: http://localhost/AplicacionesWeb/PaginaLightstick/');  // Redirige a la página comentarios.php
        exit(); // Asegura que no se ejecute código adicional
    } else {
        echo "Error al agregar el comentario: " . mysqli_error($conexion);
    }
}

// Cerrar la conexión
mysqli_close($conexion);
?>

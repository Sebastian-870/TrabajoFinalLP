<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario de manera segura
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $segundo_nombre = htmlspecialchars($_POST['segundo_nombre'] ?? '');
    $apellido = htmlspecialchars($_POST['apellido'] ?? '');
    $fecha_nacimiento = htmlspecialchars($_POST['fecha_nacimiento'] ?? '');
    $genero = htmlspecialchars($_POST['genero'] ?? '');
    
    $direccion = htmlspecialchars($_POST['direccion'] ?? '');
    $direccion_linea2 = htmlspecialchars($_POST['direccion_linea2'] ?? '');
    $ciudad = htmlspecialchars($_POST['ciudad'] ?? '');
    $estado = htmlspecialchars($_POST['estado'] ?? '');
    $codigo_postal = htmlspecialchars($_POST['codigo_postal'] ?? '');
    
    $email = htmlspecialchars($_POST['email'] ?? '');
    $telefono = htmlspecialchars($_POST['telefono'] ?? '');
    $cursos_previos = htmlspecialchars($_POST['cursos_previos'] ?? 'No especificado');
    $empresa = htmlspecialchars($_POST['empresa'] ?? '');
    $curso = htmlspecialchars($_POST['curso'] ?? '');
    $comentarios = htmlspecialchars($_POST['comentarios'] ?? '');

    // Si todo está correcto, respondemos con éxito para que JS muestre la alerta
    http_response_code(200);
    echo "Procesado correctamente";
} else {
    http_response_code(403);
    echo "Acceso no permitido";
}
?>
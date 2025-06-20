<?php
// Configuración de acceso a base de datos
$db_host = 'localhost';
$db_user = 'TU_USUARIO';
$db_pass = 'TU_CONTRASEÑA';
$db_name = 'TU_BASE_DE_DATOS';

// Conexión a la base de datos
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error de conexión a la base de datos.']);
    exit();
}

// Leer datos JSON del cuerpo de la petición
$data = json_decode(file_get_contents('php://input'), true);

// Sanitizar y validar campos
$name = filter_var($data['name'] ?? '', FILTER_SANITIZE_STRING);
$email = filter_var($data['email'] ?? '', FILTER_VALIDATE_EMAIL);
$date = $data['date'] ?? '';
$showType = $data['showType'] ?? '';
$comments = filter_var($data['comments'] ?? '', FILTER_SANITIZE_STRING);

// Validar campos obligatorios
if (!$name || !$email || !$date || !$showType) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Faltan datos obligatorios o son inválidos.']);
    exit();
}

// Insertar en la base de datos
$stmt = $conn->prepare("INSERT INTO reservas (nombre, email, fecha, tipo_show, comentarios) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $date, $showType, $comments);

if ($stmt->execute()) {
    // Enviar correo con PHPMailer
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'TU_CORREO@gmail.com';
        $mail->Password = 'TU_CONTRASEÑA_DE_APP';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('TU_CORREO@gmail.com', 'UnderTango');
        $mail->addAddress($email, $name);
        $mail->Subject = 'Confirmación de Reserva';
        $mail->Body = "Hola $name,\n\nTu reserva para el $date ha sido confirmada.\nTipo de show: $showType\nComentarios: $comments\n\n¡Gracias por elegirnos!\nUnderTango";

        $mail->send();
    } catch (Exception $e) {
        // Aquí podrías registrar el error si es necesario
    }

    echo json_encode(['success' => true, 'message' => 'Reserva completada y correo enviado.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Error al guardar la reserva.']);
}

$stmt->close();
$conn->close();

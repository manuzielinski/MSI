<?php
header("Content-Type: application/json");
require_once("/db.php");

$data = json_decode(file_get_contents("php://input"), true);
$name = htmlspecialchars(trim($data['name'] ?? ''));
$email = htmlspecialchars(trim($data['email'] ?? ''));
$password = password_hash($data['password'] ?? '', PASSWORD_BCRYPT);

if (!$name || !$email || !$password) {
    http_response_code(400);
    echo json_encode(["error" => "Datos incompletos."]);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
try {
    $stmt->execute([$name, $email, $password]);
    echo json_encode(["success" => true]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Error al registrar usuario."]);
}
?>

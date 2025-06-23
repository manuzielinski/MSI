<?php
header("Content-Type: application/json");
require_once("/db.php");

$data = json_decode(file_get_contents("php://input"), true);
$name = htmlspecialchars(trim($data['name'] ?? ''));
$date = htmlspecialchars(trim($data['date'] ?? ''));
$comment = htmlspecialchars(trim($data['comment'] ?? ''));

if (!$name || !$date) {
    http_response_code(400);
    echo json_encode(["error" => "Faltan datos obligatorios."]);
    exit;
}

$stmt = $pdo->prepare("INSERT INTO reservas (name, date, comment) VALUES (?, ?, ?)");
try {
    $stmt->execute([$name, $date, $comment]);
    echo json_encode(["success" => true]);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Error al guardar la reserva."]);
}
?>

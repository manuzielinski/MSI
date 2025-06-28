<?php
// api/deleteEvent.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

// --- CONFIGURACIÓN DE BASE DE DATOS ---
$host = 'localhost';
$db   = 'c2840725_underT';
$user = 'c2840725_underT';
$pass = '01viZUdutu';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
];

$input = json_decode(file_get_contents('php://input'), true);

if (!isset($input['id'])) {
    echo json_encode(['success' => false, 'message' => 'No se proporcionó un ID de evento.']);
    exit;
}

$id = $input['id'];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    $stmt = $pdo->prepare("DELETE FROM calendario WHERE id = :id");
    $stmt->execute(['id' => $id]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Evento eliminado correctamente.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'No se encontró el evento para eliminar.']);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
}
?>
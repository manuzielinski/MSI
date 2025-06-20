<?php
header("Content-Type: application/json");
require_once("../db.php");

try {
    $stmt = $pdo->query("SELECT * FROM eventos ORDER BY date ASC");
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($events);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Error al obtener eventos."]);
}
?>
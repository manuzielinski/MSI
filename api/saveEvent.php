<?php
// api/saveEvent.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, PATCH, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Manejar la solicitud OPTIONS de pre-vuelo para CORS
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
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// Obtener los datos enviados en el cuerpo de la solicitud
$input = json_decode(file_get_contents('php://input'), true);

// Validar datos básicos
if (!$input || !isset($input['fecha']) || !isset($input['hora']) || !isset($input['lugar']) || !isset($input['interprete'])) {
    echo json_encode(['success' => false, 'message' => 'Datos incompletos.']);
    exit;
}

$id = $input['id'] ?? null;
$fecha = $input['fecha'];
$hora = $input['hora'];
$lugar = $input['lugar'];
// El intérprete viene como un array, lo convertimos a una cadena separada por comas
$interprete = is_array($input['interprete']) ? implode(', ', $input['interprete']) : $input['interprete'];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    if ($id) {
        // --- ACTUALIZAR EVENTO EXISTENTE ---
        $sql = "UPDATE calendario SET fecha = :fecha, hora = :hora, lugar = :lugar, interprete = :interprete WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'fecha' => $fecha,
            'hora' => $hora,
            'lugar' => $lugar,
            'interprete' => $interprete,
            'id' => $id
        ]);
        $message = 'Evento actualizado correctamente.';
    } else {
        // --- CREAR NUEVO EVENTO ---
        $sql = "INSERT INTO calendario (fecha, hora, lugar, interprete) VALUES (:fecha, :hora, :lugar, :interprete)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'fecha' => $fecha,
            'hora' => $hora,
            'lugar' => $lugar,
            'interprete' => $interprete
        ]);
        $id = $pdo->lastInsertId(); // Obtenemos el ID del nuevo evento
        $message = 'Evento creado correctamente.';
    }

    echo json_encode(['success' => true, 'message' => $message, 'id' => $id]);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
}
?>
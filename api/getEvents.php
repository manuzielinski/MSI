<?php
// Este archivo debe guardarse como: api/getEvents.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Content-Type');

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

// --- OBTENER PARÁMETROS DE FECHA ---
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');

// Validar parámetros
if ($year < 1900 || $year > 2100) {
    echo json_encode([
        "success" => false,
        "message" => "Año inválido"
    ]);
    exit;
}

if ($month < 1 || $month > 12) {
    echo json_encode([
        "success" => false,
        "message" => "Mes inválido"
    ]);
    exit;
}

$startDate = sprintf('%04d-%02d-01', $year, $month);
$endDate = date('Y-m-t', strtotime($startDate));

// --- DEBUG: Mostrar parámetros recibidos ---
$debug = [
    "conexion" => "iniciando",
    "year" => $year,
    "month" => $month,
    "startDate" => $startDate,
    "endDate" => $endDate
];

try {
    // --- INTENTAR CONEXIÓN A BASE DE DATOS ---
    $pdo = new PDO($dsn, $user, $pass, $options);
    $debug["conexion"] = "exitosa";
    
    // --- PREPARAR Y EJECUTAR CONSULTA ---
    $stmt = $pdo->prepare("SELECT id, fecha, hora, lugar, interprete FROM calendario WHERE fecha BETWEEN :start AND :end ORDER BY fecha ASC, hora ASC");
    $stmt->execute(['start' => $startDate, 'end' => $endDate]);
    $rows = $stmt->fetchAll();
    
    $debug["filas_encontradas"] = count($rows);
    $debug["consulta_sql"] = "SELECT id, fecha, hora, lugar, interprete FROM calendario WHERE fecha BETWEEN '$startDate' AND '$endDate'";
    
    // --- MAPEAR RESULTADOS (CORREGIDO) ---
    $events = array_map(function ($row) {
    return [
        "id" => $row['id'],
        "fields" => [
            // El campo se debe llamar 'interprete' para que coincida con el JS
            "interprete" => $row['interprete'] ?? 'Sin intérprete', // <-- BIEN
            "fecha" => $row['fecha'],
            "hora" => $row['hora'] ?? '',
            "lugar" => $row['lugar'] ?? 'Sin lugar'
        ]
        ];
    }, $rows);
    
    // --- RESPUESTA EXITOSA ---
    echo json_encode([
        "success" => true,
        "debug" => $debug,
        "events" => $events,
        "total_events" => count($events)
    ], JSON_PRETTY_PRINT);
    
} catch (PDOException $e) {
    // --- ERROR EN LA CONEXIÓN O EJECUCIÓN ---
    echo json_encode([
        "success" => false,
        "debug" => $debug,
        "message" => "Error en la base de datos: " . $e->getMessage(),
        "error_code" => $e->getCode()
    ]);
} catch (Exception $e) {
    // --- ERROR GENERAL ---
    echo json_encode([
        "success" => false,
        "debug" => $debug,
        "message" => "Error general: " . $e->getMessage()
    ]);
}
?>
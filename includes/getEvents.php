<?php
header('Content-Type: application/json');

// Configuración de la base de datos Supabase (PostgreSQL)
$host = 'db.kisorxidfihpxlumdoiu.supabase.co';
$db   = 'postgres';
$user = 'postgres';
$pass = 'underPass3452PM112klk3op';
$port = '5432';
$charset = 'utf8';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;user=$user;password=$pass";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// Obtener año y mes desde la URL
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');

// Generar rango de fechas para la consulta
$startDate = sprintf('%04d-%02d-01', $year, $month);
$endDate = date('Y-m-t', strtotime($startDate));

try {
    $pdo = new PDO($dsn, null, null, $options);

    $stmt = $pdo->prepare("SELECT id, fecha, hora, lugar, interprete FROM calendario WHERE fecha BETWEEN :start AND :end");
    $stmt->execute(['start' => $startDate, 'end' => $endDate]);
    $rows = $stmt->fetchAll();

    // Estructura esperada por el JS
    $events = array_map(function ($row) {
        return [
            "id" => $row['id'],
            "fields" => [
                "nombre" => $row['interprete'],
                "fecha" => $row['fecha'],
                "hora" => $row['hora'],
                "lugar" => $row['lugar']
            ]
        ];
    }, $rows);

    echo json_encode([
        "success" => true,
        "events" => $events
    ]);

} catch (PDOException $e) {
    echo json_encode([
        "success" => false,
        "message" => "Error en la base de datos: " . $e->getMessage()
    ]);
}

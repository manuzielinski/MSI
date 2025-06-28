<?php
// api/getOptions.php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

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

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // --- OBTENER LUGARES ÚNICOS ---
    $stmtLugar = $pdo->query("SELECT DISTINCT lugar FROM calendario WHERE lugar IS NOT NULL AND lugar != '' ORDER BY lugar ASC");
    $lugares = $stmtLugar->fetchAll(PDO::FETCH_COLUMN);

    // --- OBTENER INTÉRPRETES ÚNICOS ---
    // Esto es más complejo porque están en una cadena. Los extraemos y procesamos.
    $stmtInterprete = $pdo->query("SELECT DISTINCT interprete FROM calendario WHERE interprete IS NOT NULL AND interprete != ''");
    $interpretes_raw = $stmtInterprete->fetchAll(PDO::FETCH_COLUMN);
    
    $interpretes_set = [];
    foreach ($interpretes_raw as $interprete_str) {
        $parts = explode(',', $interprete_str);
        foreach ($parts as $part) {
            $trimmed_part = trim($part);
            if (!empty($trimmed_part)) {
                $interpretes_set[$trimmed_part] = true; // Usar claves de array para unicidad
            }
        }
    }
    $interpretes = array_keys($interpretes_set);
    sort($interpretes); // Ordenar alfabéticamente

    echo json_encode([
        'success' => true,
        'data' => [
            'lugares' => $lugares,
            'interpretes' => $interpretes
        ]
    ]);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error en la base de datos: ' . $e->getMessage()]);
}
?>
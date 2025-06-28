<?php
// Define la ruta base del proyecto. La barra al final es importante.
$baseUrl = '/UnderTangoNEW/';

$page = 'calendar';
$pageTitle = 'Calendario de Tango | UnderTango';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  
  <!-- Usamos la variable $baseUrl para crear rutas absolutas correctas -->
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/calendario.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/week.css">
</head>
<body> <!-- Añadimos la etiqueta body que faltaba -->

<div class="container">
  <div class="months-header">
    <ul id="months-list">
      <li data-month="0">Enero</li>
      <li data-month="1">Febrero</li>
      <li data-month="2">Marzo</li>
      <li data-month="3">Abril</li>
      <li data-month="4">Mayo</li>
      <li data-month="5">Junio</li>
      <li data-month="6">Julio</li>
      <li data-month="7">Agosto</li>
      <li data-month="8">Septiembre</li>
      <li data-month="9">Octubre</li>
      <li data-month="10">Noviembre</li>
      <li data-month="11">Diciembre</li>
    </ul>
  </div>

  <div class="month">
    <div class="month-header">
      <h2 id="month-title">Enero 2025</h2>
    </div>
    
    <div class="week-header">
      <div class="week-day">Lunes</div>
      <div class="week-day">Martes</div>
      <div class="week-day">Miércoles</div>
      <div class="week-day">Jueves</div>
      <div class="week-day">Viernes</div>
      <div class="week-day">Sábado</div>
      <div class="week-day">Domingo</div>
    </div>
    
    <div class="calendar-grid" id="calendar-grid">
      <!-- Generado por JS -->
    </div>
  </div>
</div>

<script>
  const BASE_URL = '/UnderTangoNEW/'; 
</script>

<!-- Ahora cargamos el script de JavaScript -->
<script src="<?php echo $baseUrl; ?>assets/js/calendario.js"></script>

</body>
</html>
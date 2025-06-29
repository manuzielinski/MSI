<?php
// Este archivo se guarda como: pages/usersCalendar.php
$baseUrl = "/UnderTangoNEW"; // Ajustalo si cambia la carpeta raíz
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>UnderTango Club - Calendario</title>
  <!-- Estilos -->
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/navbar.css" />
  <link rel="stylesheet" href="<?= $baseUrl ?>/assets/css/usersCalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script>
    // Base URL para rutas absolutas desde cualquier archivo
    const BASE_URL = "<?= $baseUrl ?>";
  </script>
</head>
<body>
  <!-- Navbar -->
  <nav id="navbar">
    <div class="logo">
      <img src="<?= $baseUrl ?>/assets/images/Under-logo-transparente.png" alt="Logotipo de UnderTango Club en Iguazú" />
    </div>
    <button id="menu-toggle" aria-label="Toggle menu">
      <i class="fas fa-bars"></i>
    </button>
    <ul id="navbar-menu">
      <li><a href="<?= $baseUrl ?>/index.php">Inicio</a></li>
      <li><a href="<?= $baseUrl ?>/index.php#historia">Historia</a></li>
      <li><a href="<?= $baseUrl ?>/index.php#news">Noticias</a></li>
      <li><a href="<?= $baseUrl ?>/pages/reservas.php#reserva">Contacto</a></li>
      <li><a href="<?= $baseUrl ?>/pages/faq.php">Preguntas Frecuentes</a></li>
    </ul>
  </nav>
  <!-- Contenido principal -->
  <div class="tango-calendar">
    <header>
      <h1>Calendario de Tango</h1>
      <p class="subtitle">Eventos y milongas</p>
    </header>
    <div class="month-navigation">
      <button id="prev-month" class="nav-button">
        <i class="fas fa-chevron-left"></i> Anterior
      </button>
      <h2 class="month-title">
        <i class="fas fa-calendar-alt calendar-icon"></i>
        <span id="current-month-display">Mes Año</span>
      </h2>
      <button id="next-month" class="nav-button">
        Siguiente <i class="fas fa-chevron-right"></i>
      </button>
    </div>
    <div class="calendar-container">
      <div class="week-header">
        <div class="week-day">Lunes</div>
        <div class="week-day">Martes</div>
        <div class="week-day">Miércoles</div>
        <div class="week-day">Jueves</div>
        <div class="week-day">Viernes</div>
        <div class="week-day">Sábado</div>
        <div class="week-day">Domingo</div>
      </div>
      <div id="calendar-grid" class="calendar-grid">
        <div class="loading" id="loading-indicator">Cargando eventos...</div>
      </div>
    </div>
    <footer>
      <div class="legend">
        <h3>Lugares</h3>
        <div class="legend-items">
          <div class="legend-item"><div class="color-box" style="background-color: #1976d2;"></div><span>Cruceros</span></div>
          <div class="legend-item"><div class="color-box" style="background-color: #3949ab;"></div><span>Cruceros Nocturno</span></div>
          <div class="legend-item"><div class="color-box" style="background-color: #7b1fa2;"></div><span>Casa Malbec</span></div>
          <div class="legend-item"><div class="color-box" style="background-color: #00897b;"></div><span>Meliá</span></div>
          <div class="legend-item"><div class="color-box" style="background-color: #43a047;"></div><span>Clases</span></div>
        </div>
      </div>
    </footer>
  </div>
  <script src="<?= $baseUrl ?>/assets/js/usersCalendar.js"></script>
</body>
</html>
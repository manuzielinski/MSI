<?php
$page = 'clases';
$pageTitle = "Clases de Tango | UnderTango";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/clases-grupales.css"> 

  <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
</head>

<body>
  <nav id="navbar">
    <div class="logo">
      <img src="../assets/images/Under-logo-transparente.png" alt="UnderTango Logo">
    </div>
    <button id="menu-toggle" aria-label="Toggle menu">
      <i class="fas fa-bars"></i>
    </button>
    <ul id="navbar-menu">
      <li><a href="../index.php">Inicio</a></li>
      <li><a href="../index.php#shows">Shows</a></li>
      <li><a href="../index.php#classes">Clases</a></li>
      <li><a href="../index.php#fashion">Moda</a></li>  
      <li><a href="/pages/reservas.php">Reservas</a></li>
    </ul>
  </nav>

<section class="image-text-section">
  <div class="image-text-row">
    <div class="image-container">
      <img src="/assets/grupal1.png" alt="Imagen 1" class="animated-image" />
    </div>
    <div class="text-container animated-text">
      <h2>El Tango: Una Pasión que Une</h2>
      <p>El tango es más que un baile; es una expresión de emociones, una conexión entre dos personas y una cultura que trasciende fronteras.</p>
    </div>
  </div>

  <div class="image-text-row align-right">
    <div class="image-container">
      <img src="/assets/grupal2.png" alt="Imagen 2" class="animated-image" />
    </div>
    <div class="text-container animated-text">
      <h2>Aprende con Nosotros</h2>
      <p>En UnderTango, nuestras clases están diseñadas para todos los niveles. ¡Ven y descubre el placer de bailar tango!</p>
    </div>
  </div>

  <div class="image-text-row">
    <div class="image-container">
      <img src="/assets/grupal3.png" alt="Imagen 3" class="animated-image" />
    </div>
    <div class="text-container animated-text">
      <h2>Eventos y Milongas</h2>
      <p>Organizamos milongas y eventos sociales para que practiques lo aprendido y disfrutes de la comunidad tanguera.</p>
    </div>
  </div>
</section>

<section class="class-info" id="classes">
  <div class="container">
    <h2 class="section-title">Clases para todos los niveles</h2>
    <p class="section-text">
      En UnderTango, ubicados en Puerto Iguazú, Misiones, ofrecemos clases adaptadas a todos los niveles, desde principiantes hasta avanzados. Nuestro enfoque es personalizado y divertido.
    </p>
    <div class="class-highlights">
      <a href="/pages/clasesGrupales.php" class="highlight-card">
        <div>
          <i class="fas fa-users"></i>
          <h3>Clases Grupales</h3>
          <p>Aprende en un ambiente colaborativo y amigable.</p>
        </div>
      </a>

      <a href="/pages/clasesprivadas.php" class="highlight-card">
        <div>
          <i class="fas fa-user"></i>
          <h3>Clases Privadas</h3>
          <p>Recibe atención personalizada para mejorar tu técnica.</p>
        </div>
      </a>

      <a href="https://hotmart.com/es/marketplace/productos/20-lecciones-de-tango/F62016758K" class="highlight-card" target="_blank">
        <div>
          <i class="fas fa-globe"></i>
          <h3>Cursos Online</h3>
          <p>Aprende desde cualquier parte del mundo.</p>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="location" id="location">
  <div class="container">
    <h2 class="section-title">Nuestra Ubicación</h2>
    <div class="location-content">
      <p class="location-address">Avenida 3 Fronteras 454, Cabaña de los Muñecos, Puerto Iguazú, Misiones</p>
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.231144000000!2d-54.567890684977!3d-25.596083683635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDM1JzQ1LjkiUyA1NMKwMzQnMDMuOSJX!5e0!3m2!1ses!2sar!4v1633024000000!5m2!1ses!2sar" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>

<section class="gallery" id="gallery">
  <div class="container">
    <h2 class="section-title">Galería</h2>
    <div class="gallery-grid">
      <div class="gallery-item">
        <img src="/assets/tango-class-1.jpg" alt="Clase de tango 1" />
      </div>
      <div class="gallery-item">
        <img src="/assets/tango-class-2.jpg" alt="Clase de tango 2" />
      </div>
      <div class="gallery-item">
        <img src="/assets/tango-class-3.jpg" alt="Clase de tango 3" />
      </div>
      <div class="gallery-item">
        <img src="/assets/tango-class-4.jpg" alt="Clase de tango 4" />
      </div>
      <div class="gallery-item">
        <img src="/assets/2024-7-13.jpg" alt="Clase de tango 5" />
      </div>
      <div class="gallery-item">
        <img src="/assets/grupal6.png" alt="Clase de tango 6" />
      </div>
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <div class="container">
    <h2 class="section-title">Contáctanos</h2>
    <p class="section-text">¿Tienes preguntas o quieres reservar tu lugar? ¡Escríbenos!</p>
    <div class="whatsapp-button-container">
      <a href="https://wa.me/+5493757618270" class="contact-button">
        <i class="fab fa-whatsapp"></i>
        <span>WhatsApp</span>
      </a>
    </div>
  </div>
</section>

<?php 
include '../includes/footer.php'; 
?>

<script src="../assets/js/burguer.js"></script>

</body>
</html>
<?php
  $page = 'faq';
  $pageTitle = 'Preguntas Frecuentes | UnderTango Club';
  include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preguntas Frecuentes | UnderTango Club</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/navbar.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/faq.css">
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

  <header class="faq-header">
    <div class="header-content">
      <h1>Preguntas Frecuentes</h1>
      <p>Encuentra respuestas a las dudas más comunes sobre nuestros servicios</p>
    </div>
  </header>

  <section class="faq-filter">
    <div class="container">
      <h2>Preguntas frecuentes de</h2>
      <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">Todas</button>
        <button class="filter-btn" data-filter="shows">Shows</button>
        <button class="filter-btn" data-filter="clases">Clases</button>
        <button class="filter-btn" data-filter="moda">Moda</button>
      </div>
    </div>
  </section>

  <section class="faq-section">
    <div class="container">
      <div class="faq-container">
        <!-- Preguntas sobre Clases -->
        <div class="faq-item" data-category="clases">
          <div class="faq-question">
            <h3>¿Dónde están ubicados?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>En Puerto Iguazú, Misiones. Puedes encontrarnos en:</p>
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.1023694772166!2d-54.57342492394826!3d-25.600040141962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f6932c3aef0c97%3A0xd45b9e44e0110a6d!2sUndertango%20Club!5e0!3m2!1ses!2sar!4v1710805123456!5m2!1ses!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

        <div class="faq-item" data-category="clases">
          <div class="faq-question">
            <h3>¿Dan clases grupales?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Sí, los sábados de 9 a 10hs principiantes, de 10 a 11 avanzados y de 11 a 11:30 práctica danzante. Presencial en Iguazú, retransmitida por TikTok Live.</p>
          </div>
        </div>

        <div class="faq-item" data-category="clases">
          <div class="faq-question">
            <h3>¿Tienen otro horario además de los sábados?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Estamos viendo de armar un nuevo grupo los lunes de 19 a 20hs.</p>
          </div>
        </div>

        <div class="faq-item" data-category="clases">
          <div class="faq-question">
            <h3>¿Dan clases particulares?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Sí, con reserva previa al <a href="https://wa.me/+5493757618270" class="contact-link">+54 3757 618270</a></p>
          </div>
        </div>

        <div class="faq-item" data-category="clases">
          <div class="faq-question">
            <h3>¿Dan clases on-line?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Sí, con reserva previa o a través de nuestro <a href="https://hotmart.com/es/marketplace/productos/20-lecciones-de-tango/F62016758K" target="_blank" class="contact-link">curso online</a>.</p>
          </div>
        </div>

        <div class="faq-item" data-category="clases">
          <div class="faq-question">
            <h3>¿Hay milongas en Iguazú?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Sí, todos los domingos de 22 a 00:00 hacemos una práctica danzante con reserva previa.</p>
          </div>
        </div>

        <!-- Preguntas sobre Moda -->
        <div class="faq-item" data-category="moda">
          <div class="faq-question">
            <h3>¿Dónde puedo ver el catálogo de prendas?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Nuestro catálogo está en construcción. Pronto estará disponible.</p>
          </div>
        </div>

        <!-- Preguntas sobre Shows -->
        <div class="faq-item" data-category="shows">
          <div class="faq-question">
            <h3>¿Dónde puedo ver un show de tango en Puerto Iguazú?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>De martes a domingos de 17 a 19hs en Cruceros Iguazú, combinación de show de tango electrónico arriba de un catamarán + show de música internacional en vivo.</p>
            <p>Para más información, contacta al <a href="https://wa.me/+5493757618270" class="contact-link">+54 3757 618270</a></p>
          </div>
        </div>

        <div class="faq-item" data-category="shows">
          <div class="faq-question">
            <h3>¿Cuánto cuesta un show de tango de ustedes?</h3>
            <span class="faq-icon"><i class="fas fa-chevron-down"></i></span>
          </div>
          <div class="faq-answer">
            <p>Disponemos de diversas formaciones de músicos, bailarines y show de luces y sonidos.</p>
            <p>Por favor, comuníquese al <a href="https://wa.me/+5493757618270" class="contact-link">+54 3757 618270</a> para más información.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-section">
    <div class="container">
      <h2>¿No encontraste lo que buscabas?</h2>
      <p>Contáctanos directamente y responderemos todas tus dudas</p>
      <div class="contact-buttons">
        <a href="https://wa.me/+5493757618270" class="contact-button">
          <i class="fab fa-whatsapp"></i>
          <span>WhatsApp</span>
        </a>
        <a href="mailto:undertangoclub@gmail.com" class="contact-button email-button">
          <i class="fas fa-envelope"></i>
          <span>Email</span>
        </a>
      </div>
    </div>
  </section>


<?php include '../includes/footer.php'; ?>

<script src="../assets/js/burguer.js"></script>
<script src="../assets/js/faq.js"></script>

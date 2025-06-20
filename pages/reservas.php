<?php
$page = 'reservas';
$pageTitle = 'Reservas de Shows | Tango Triple Frontera';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="shows-section" id="shows">
    <div class="container">
      <h2 class="section-title">Nuestros Espectáculos</h2>
      <p class="section-text">
        Ofrecemos una amplia gama de espectáculos que se adaptan a las necesidades de nuestros clientes. Nos desenvolvemos principalmente en la Triple Frontera entre Paraguay, Brasil y Argentina, pero también llevamos nuestro arte más allá de estas fronteras. Nuestra pasión por el tango nos impulsa a crear experiencias únicas e inolvidables para cada ocasión.
      </p>
      <div class="show-highlights">
        <div class="highlight-card">
          <i class="fas fa-music"></i>
          <h3>Shows de Danza</h3>
          <p>Espectáculos de tango tradicional y fusión.</p>
        </div>
        <div class="highlight-card">
          <i class="fas fa-guitar"></i>
          <h3>Shows de Música en Vivo</h3>
          <p>Bandas y solistas de tango y géneros afines.</p>
        </div>
        <div class="highlight-card">
          <i class="fas fa-star"></i>
          <h3>Megaeventos</h3>
          <p>Producciones a gran escala para ocasiones especiales.</p>
        </div>
        <div class="highlight-card">
          <i class="fas fa-globe-americas"></i>
          <h3>Show Triplefrontera</h3>
          <p>Una fusión única de las artes y culturas de Argentina, Brasil y Paraguay.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="reserva-section" id="reserva">
    <div class="container">
      <h2 class="section-title">Reserva un Espectáculo</h2>
      <form id="bookingForm" class="reserva-form">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="date">Fecha Deseada:</label>
          <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
          <label for="show-type">Tipo de Espectáculo:</label>
          <div class="button-select">
            <button type="button" data-value="show-danza" class="select-button">Show de danza</button>
            <button type="button" data-value="show-musica" class="select-button">Show de música</button>
            <button type="button" data-value="show-hibrido" class="select-button">Show híbrido</button>
            <button type="button" data-value="show-triplefrontera" class="select-button">Show triplefrontera</button>
            <button type="button" data-value="megaevento" class="select-button">Megaevento</button>
            <button type="button" data-value="otros" class="select-button">Otros</button>
          </div>
          <input type="hidden" id="show-type" name="show-type" required>
        </div>
        <div class="form-group">
          <label for="comments">Comentarios:</label>
          <textarea id="comments" name="comments" maxlength="300"></textarea>
          <p id="char-count">0/300 caracteres</p>
        </div>
        <button type="submit" class="submit-button">Enviar Solicitud</button>
      </form>
      <div id="message"></div>
    </div>
  </section>

  <section class="contact" id="contacto">
    <div class="container">
      <h2 class="section-title">Contáctanos</h2>
      <p class="section-text">¿Tienes preguntas o quieres más información? ¡Escríbenos!</p>
      <div class="whatsapp-button-container">
        <a href="https://wa.me/+5493757618270" class="contact-button">
          <i class="fab fa-whatsapp"></i>
          <span>WhatsApp</span>
        </a>
      </div>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

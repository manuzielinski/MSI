<?php
$page = $page ?? '';
$pageTitle = $pageTitle ?? 'UnderTango Club | Milonga y Clases de Tango en Iguazú';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="facebook-domain-verification" content="lx79g9tyq6nhj3ef5u8m8vpwp39r6h" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="Descubre el auténtico tango en Iguazú con nuestras clases grupales y privadas, espectáculos de milonga y moda exclusiva. ¡Vive la pasión del tango en la triple frontera!">

  <link rel="stylesheet" href="./assets/css/navbar.css">
  <link rel="stylesheet" href="./assets/css/burguer.css">
  <link rel="icon" type="image/x-icon" href="./assets/images/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-MDX0M5KKDM"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-MDX0M5KKDM');
  </script>
</head>
<body>
  <nav id="navbar">
    <div class="logo">
      <img src="./assets/images/Under-logo-transparente.png" alt="Logotipo de UnderTango Club en Iguazú">
    </div>
    <button id="menu-toggle" aria-label="Toggle menu"><i class="fas fa-bars"></i></button>
    <ul id="navbar-menu">
      <li><a href="index.php#video-slider">Inicio</a></li>
      <li><a href="index.php#historia">Historia</a></li>
      <li><a href="index.php#news">Noticias</a></li>
      <li><a href="pages/reservas.php#reserva">Contacto</a></li>
      <li><a href="pages/faq.php">Preguntas Frecuentes</a></li>
    </ul>
  </nav>
    
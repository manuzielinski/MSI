<?php
$page = 'moda';
$pageTitle = 'Nuestro Taller | UnderTango';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header2.php';
?>
<link rel="stylesheet" href="../assets/css/navbar.css" />
<link rel="stylesheet" href="../assets/css/moda.css" />
<link rel="stylesheet" href="../assets/css/moda-fixes.css" />
<link rel="stylesheet" href="../assets/css/footer.css" />
<div class="hero">
    <h1>Nuestro Taller de Costuras</h1>
    <p>Donde la magia de la moda tanguera cobra vida</p>
</div>

<section class="main-section">
    <h2 class="section-title">Nuestro Taller</h2>
    <p class="taller-description">
        En UnderTango, nos enorgullece contar con nuestro propio taller de costuras, donde la magia de la moda tanguera cobra vida.
        Ubicado en el corazón del norte misionero, nuestro taller es el epicentro de la creatividad y la artesanía.<br>
        Trabajamos con un equipo talentoso de modistas, costureras y ayudantes provenientes del norte misionero. Su experiencia y dedicación se reflejan en cada prenda que creamos, fusionando la tradición del tango con la innovación en el diseño.
    </p>
    <div class="logo-container">
        <img src="../assets/images/moda-logo.png" alt="UnderTango Moda Logo" class="taller-logo">
    </div>
</section>

<section class="productos-section">
    <div style="text-align: center;">
        <h2 class="productos-title">Descubre Nuestros Productos</h2>
    </div>
    
    <div class="productos-container">
        <div class="producto">
            <figure class="producto-img">
                <img src="../assets/images/EclipseDeMedianoche.png" alt="Vestido Eclipse de Medianoche">
            </figure>
            <div class="producto-content">
                <h3>Eclipse de Medianoche</h3>
                <p>Una prenda de diseño sofisticado, ideal para eventos de gala u ocasiones especiales que exigen elegancia y distinción.</p>
            </div>
        </div>

        <div class="producto">
            <figure class="producto-img">
                <img src="../assets/images/BrumaDePlata.png" alt="Accesorios Bruma de Plata">
            </figure>
            <div class="producto-content">
                <h3>Bruma de Plata</h3>
                <p>Evoca la delicadeza y el misterio del tango. Su diseño fluido y los detalles plateados capturan la luz y crean un efecto deslumbrante en cada movimiento. Ideal para quienes buscan una prenda sofisticada y femenina que realce su belleza en la pista de baile.</p>
            </div>
        </div>

        <div class="producto">
            <figure class="producto-img">
                <img src="../assets/images/GalardonNocturno.png" alt="Remeras Galardón Nocturno">
            </figure>
            <div class="producto-content">
                <h3>Galardón Nocturno</h3>
                <p>Expresa la pasión y la fuerza del tango. Su diseño audaz y los detalles cuidadosamente elaborados reflejan la intensidad de este baile. Perfecto para quienes buscan una prenda que les permita destacar y expresar su personalidad en cada paso.</p>
            </div>
        </div>

        <div class="producto">
            <figure class="producto-img">
                <img src="../assets/images/GalanArgentino.png" alt="Zapatos Galán Argentino">
            </figure>
            <div class="producto-content">
                <h3>Galán Argentino</h3>
                <p>Inspirado en la elegancia atemporal del tango, el "Galán Argentino" es una prenda que irradia distinción. Confeccionado con materiales de primera calidad y un corte impecable, este diseño captura la esencia del caballero tanguero. Perfecto para milongas y eventos especiales donde la presencia y el estilo son fundamentales.</p>
            </div>
        </div>
    </div>
</section>

<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImg">
</div>

<div style="height: 0; margin: 0; padding: 0; line-height: 0;"></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

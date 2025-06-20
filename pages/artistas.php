<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Artistas</title>
    <link rel="stylesheet" href="../assets/css/artistas.css">
    <link rel="stylesheet" href="../assets/css/moda-fixes.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
</head>
<?php
$pageTitle = "Nuestros Artistas";
include '../includes/header2.php';
?>

<header>
    <div class="container">
        <h1>NUESTROS ARTISTAS</h1>
        <p>Talento y pasión por el tango argentino</p>
    </div>
</header>

<div class="container">
        <h2>Bailarines</h2>
        <div class="artist-container">
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Bianca Wagner</h3>
                    <div class="artist-style">Estilo: Tango Tradicional y Escenario</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Con más de 10 años en el mundo del tango, Bianca es una artista multifacética, destacándose tanto en la danza como en la gestión cultural.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Clases de tango, performances, dirección artística y organización de eventos culturales.
                    </div>
                    <a href="https://www.linkedin.com/in/bianca-wagner-/" class="social-link">LinkedIn: Bianca Wagner</a>
                </div>
            </div>
            
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Pablo Cieslik</h3>
                    <div class="artist-style">Estilo: Tango Electrónico y Tradicional</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Fundador de UnderTango, Pablo ha sido una figura clave en la promoción del tango moderno, combinando elementos electrónicos con el tango clásico.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Clases de tango, producción de espectáculos, desarrollo de proyectos culturales, y consultoría artística.
                    </div>
                    <a href="https://www.linkedin.com/in/pablo-cieslik/" class="social-link">LinkedIn: Pablo Cieslik</a>
                </div>
            </div>
            
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Melina Botana</h3>
                    <div class="artist-style">Estilo: Tango Tradicional y Fusión Contemporánea</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Melina es una reconocida bailarina y coreógrafa con más de 12 años de experiencia en la enseñanza y performance de tango.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Clases de tango, coreografía de espectáculos, workshops y asesoría para eventos artísticos.
                    </div>
                </div>
            </div>
            
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Cristian Galarza</h3>
                    <div class="artist-style">Estilo: Tango Escenario y Tradicional</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Con una carrera que abarca más de una década, Cristian es un destacado bailarín que ha participado en numerosas competiciones y festivales de tango a nivel mundial.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Clases de tango, presentaciones en vivo, y asesoramiento coreográfico.
                    </div>
                </div>
            </div>
        </div>
        
        <h2>Músicos</h2>
        <div class="artist-container">
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Gladys Fattore</h3>
                    <div class="artist-role">Rol: Cantante</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Gladys es una talentosa cantante de tango con una voz cautivadora y una presencia escénica impactante.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Actuaciones en vivo, colaboraciones musicales, y clases de canto tanguero.
                    </div>
                </div>
            </div>
            
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Diego Navarrete</h3>
                    <div class="artist-role">Rol: Guitarrista</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Diego es un virtuoso guitarrista que fusiona el tango tradicional con influencias contemporáneas.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Actuaciones en vivo, composición musical, y clases de guitarra tanguera.
                    </div>
                </div>
            </div>
            
            <div class="artist-card">
                <div class="artist-info">
                    <h3 class="artist-name">Coly Bareyro</h3>
                    <div class="artist-role">Rol: Bajista</div>
                    <div class="artist-description">
                        <strong>Trayectoria:</strong> Coly aporta la base rítmica y armónica con su bajo, dando profundidad y groove a las interpretaciones de tango.
                    </div>
                    <div class="artist-services">
                        <strong>Servicios:</strong> Actuaciones en vivo, sesiones de grabación, y clases de bajo para tango.
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include '../includes/footer.php';
?>

<?php
/**
 * Lab 3 - Blue Moon
 */

$page_title = "Blue Moon - Lab 3 - Pablo Cirre";
$page_description = "Experimento visual: Fondo de pantalla generado con CSS.";
$page_keywords = "css art, moon, blue moon, wallpaper, digital art";

$is_standalone = false;

if (!$is_standalone) {
    include '../../Components/header.php';
} else {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page_title; ?></title>
        <link rel="stylesheet" href="/PabloCirre/assets/css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@300;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php
}
?>

    <link rel="stylesheet" href="moon.css">

    <div class="back-nav">
        <a href="/PabloCirre/Labs/">← Back to Labs</a>
    </div>

    <main class="blue-moon-container">
        <div class="moon-info-overlay">
            <h1>Blue Moon<br>Generator</h1>
            <p class="description">
                Esta demo recrea las fases de la luna usando matemáticas y vectores.
                <br><br>
                La sombra no es un color, es una <strong>"máscara"</strong> transparente.
            </p>
            
            <!-- Alert Panel -->
            <div class="control-panel">
                <div class="panel-header">
                    <span class="panel-label">AVISO_SISTEMA</span>
                    <div class="light on"></div>
                </div>
                <div class="panel-content-center">
                    Requiere Modo Oscuro
                </div>
            </div>

            <!-- Opacity Control -->
            <div class="control-panel">
                <div class="panel-header">
                    <span class="panel-label">OPACIDAD</span>
                    <span class="slider-value" id="opacity-readout">5%</span>
                </div>
                <input type="range" class="custom-slider" id="opacity-slider" min="1" max="10" value="5">
            </div>

            <!-- Size Control -->
            <div class="control-panel">
                <div class="panel-header">
                    <span class="panel-label">TAMAÑO</span>
                    <span class="slider-value" id="size-readout">800px</span>
                </div>
                <input type="range" class="custom-slider" id="size-slider" min="400" max="1500" value="800">
            </div>
        </div>

        <div class="moon-wrapper" id="moon-wrapper">
            <svg class="moon-svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <mask id="moon-mask">
                        <rect x="0" y="0" width="1000" height="1000" fill="black" />
                        <circle cx="500" cy="500" r="400" fill="white" />
                        <circle id="shadow-circle" cx="200" cy="500" r="400" fill="black" />
                    </mask>
                </defs>
                <circle class="moon-body" id="moon-body" cx="500" cy="500" r="400" mask="url(#moon-mask)" />
            </svg>
        </div>
        
        <div class="lab-label">Blue Moon</div>

        <!-- Date Control -->
        <div class="moon-controls">
            <div class="control-line"></div>
            <div class="control-point" id="time-knob"></div>
            <div class="date-display" id="date-readout">TODAY</div>
            <input type="range" id="time-slider" min="0" max="100" value="0">
        </div>
    </main>

    <script src="moon.js"></script>

    <?php
    if (!$is_standalone) {
        include '../../Components/footer.php';
    } else {
        echo '</body></html>';
    }
    ?>
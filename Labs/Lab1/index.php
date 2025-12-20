<?php
/**
 * Lab 1 - Musical Grid
 */

$page_title = "Musical Grid - Labs - Pablo Cirre";
$page_description = "Un panel de control interactivo inspirado en sintetizadores modulares.";
$page_keywords = "musical grid, web audio api, synthesizer, pablo cirre labs";

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
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@300;500;700&display=swap"
            rel="stylesheet">
    </head>

    <body>
        <?php
}
?>

    <!-- Lab Specific CSS -->
    <link rel="stylesheet" href="css/knobs.css">

    <style>
        /* Lab Specific Overrides */
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .lab-container {
            grid-column: 1 / -1;
            /* Fix: Layout spans full width */
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            width: 100%;
        }

        .metrics-grid {
            max-width: 1200px;
            width: 100%;
        }

        /* Sub-Navigation */
        .back-nav {
            grid-column: 1 / -1;
            /* Fix: Layout spans full width */
            padding: 20px 0;
            text-align: right;
        }

        .back-nav a {
            text-decoration: none;
            color: var(--text-secondary);
            font-family: 'IBM Plex Mono', monospace;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .back-nav a:hover {
            color: var(--accent-color);
        }
    </style>

    <!-- Sub-Navigation -->
    <div class="back-nav">
        <a href="/PabloCirre/Labs/">← Back to Labs</a>
    </div>

    <!-- Lab Content -->
    <main class="lab-container">
        <div class="metrics-grid">

            <!-- Panel 1 -->
            <div class="data-panel">
                <div class="panel-header">
                    <span class="panel-label">BASE_DE_DATOS</span>
                    <div class="light on"></div>
                </div>
                <div class="panel-content">
                    <div class="metric-value">1.4M</div>
                    <div class="metric-desc">Empresas Indexadas</div>
                </div>
                <div class="panel-footer">
                    <span>LOC: ES</span>
                    <span>UPD: LIVE</span>
                </div>
            </div>

            <!-- Panel 2 -->
            <div class="data-panel">
                <div class="panel-header">
                    <span class="panel-label">ALCANCE</span>
                    <div class="light on"></div>
                </div>
                <div class="panel-content">
                    <div class="metric-value">15+</div>
                    <div class="metric-desc">Países Europeos</div>
                </div>
                <div class="panel-footer">
                    <span>SEC: B2B</span>
                    <span>GRW: +12%</span>
                </div>
            </div>

            <!-- Panel 3: ESTADO SISTEMA (Horizontal Switches) -->
            <div class="data-panel">
                <div class="panel-header">
                    <span class="panel-label">ESTADO_SISTEMA</span>
                    <div class="light on"></div>
                </div>
                <div class="panel-content">
                    <div class="switch-row">
                        <div class="switch active"></div>
                        <div class="switch active"></div>
                        <div class="switch"></div>
                    </div>
                    <div class="metric-desc" id="system-status-text"
                        style="text-align: center; margin-top: 10px; font-weight:bold; transition: color 0.3s;">
                        ÓPTIMO</div>
                </div>
                <div class="panel-footer">
                    <span>DESDE: 1997</span>
                    <span>NIVEL: SENIOR</span>
                </div>
            </div>

            <!-- Panel 4: VERIFICACIÓN (Musical Knobs Only) -->
            <div class="data-panel knob-panel">
                <div class="panel-header">
                    <span class="panel-label">VERIFICACIÓN</span>
                    <div class="light on"></div>
                </div>
                <div class="panel-content">
                    <div class="knob-container">
                        <!-- Knobs sin etiquetas de texto -->
                        <div class="musical-knob" data-note="C" data-frequency="261.63">
                            <div class="knob-indicator"></div>
                        </div>
                        <div class="musical-knob" data-note="G" data-frequency="392.00">
                            <div class="knob-indicator"></div>
                        </div>
                        <div class="musical-knob" data-note="Am" data-frequency="220.00">
                            <div class="knob-indicator"></div>
                        </div>
                        <div class="musical-knob" data-note="F" data-frequency="349.23">
                            <div class="knob-indicator"></div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <span>AUDIO: ON</span>
                    <span>MODE: ECHO</span>
                </div>
            </div>

        </div>
    </main>

    <?php
    if (!$is_standalone) {
        include '../../Components/footer.php';
    } else {
        echo '</body></html>';
    }
    ?>

    <!-- External Knobs JS -->
    <script src="js/app.js"></script>
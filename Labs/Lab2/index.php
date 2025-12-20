<?php
/**
 * Lab 2 - Modern Styles Showcase
 */

$page_title = "Modern Styles Showcase - Lab 2 - Pablo Cirre";
$page_description = "Colección de 26 exploraciones visuales y sistemas de diseño.";
$page_keywords = "design systems, brutalism, glassmorphism, swiss design, ui trends";

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
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.css">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@300;500;700&display=swap"
            rel="stylesheet">
        <style>
            body {
                padding: 40px;
            }
        </style>
    </head>

    <body>
        <?php
}
?>

    <style>
        /* Lab 2 Specific Styles */
        .showcase-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            padding: 40px 0;
        }

        .template-card {
            background: var(--surface-color);
            border: 1px solid var(--border-color);
            padding: 20px;
            text-decoration: none;
            color: var(--text-color);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            border-radius: 8px;
        }

        .template-card:hover {
            transform: translateY(-5px);
            border-color: var(--accent-color);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .template-number {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 0.8rem;
            color: var(--text-tertiary);
            margin-bottom: 10px;
        }

        .template-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 5px;
            line-height: 1.3;
        }

        .template-tag {
            font-size: 0.8rem;
            color: var(--text-secondary);
            font-style: italic;
        }

        .lab-header {
            margin-bottom: 40px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 20px;
        }

        .back-nav {
            grid-column: 1 / -1;
            /* Fix: Layout spans full width */
            padding: 20px 0 0 0;
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

        main {
            grid-column: 1 / -1;
            /* Fix: Layout spans full width */
        }
    </style>

    <div class="back-nav">
        <a href="<?php echo BASE_URL; ?>/Labs/">← Back to Labs</a>
    </div>

    <!-- Lab Content -->
    <main style="padding: 40px 0;">
        <div class="lab-header">
            <h1 style="font-family: 'Space Grotesk'; font-size: 2.5rem; margin-bottom: 10px;">Modern Styles Archive</h1>
            <p style="color: var(--text-secondary); max-width: 600px;">
                Colección de 26 exploraciones visuales y sistemas de diseño. Desde el brutalismo neoyorquino hasta
                el minimalismo suizo.
            </p>
        </div>

        <div class="showcase-grid">
            <!-- Templates List -->
            <a href="../Templates/01_Glossy_Editorial/index.html" class="template-card">
                <span class="template-number">01</span>
                <span class="template-title">Glossy Editorial</span>
                <span class="template-tag">Luxury / Serif</span>
            </a>
            <a href="../Templates/02_Minimalismo_Suizo/index.html" class="template-card">
                <span class="template-number">02</span>
                <span class="template-title">Minimalismo Suizo</span>
                <span class="template-tag">Grid / Clean</span>
            </a>
            <a href="../Templates/03_Dark_Mode_Cinematic/index.html" class="template-card">
                <span class="template-number">03</span>
                <span class="template-title">Dark Mode Cinematic</span>
                <span class="template-tag">Video / Contrast</span>
            </a>
            <a href="../Templates/04_Tech_Dashboard/index.html" class="template-card">
                <span class="template-number">04</span>
                <span class="template-title">Tech Dashboard</span>
                <span class="template-tag">SaaS / Metrics</span>
            </a>
            <a href="../Templates/05_Neo_Brutalism/index.html" class="template-card">
                <span class="template-number">05</span>
                <span class="template-title">Neo Brutalism</span>
                <span class="template-tag">Bold / Barriers</span>
            </a>
            <a href="../Templates/06_Glassmorphism/index.html" class="template-card">
                <span class="template-number">06</span>
                <span class="template-title">Glassmorphism</span>
                <span class="template-tag">Blur / Gradient</span>
            </a>
            <a href="../Templates/07_Editorial_Magazine/index.html" class="template-card">
                <span class="template-number">07</span>
                <span class="template-title">Editorial Magazine</span>
                <span class="template-tag">Print Layout</span>
            </a>
            <a href="../Templates/08_Photo_Grid/index.html" class="template-card">
                <span class="template-number">08</span>
                <span class="template-title">Photo Grid</span>
                <span class="template-tag">Visual Story</span>
            </a>
            <a href="../Templates/09_Monochrome_Typo/index.html" class="template-card">
                <span class="template-number">09</span>
                <span class="template-title">Monochrome Typo</span>
                <span class="template-tag">Type Driven</span>
            </a>
            <a href="../Templates/10_Retro_Futurist/index.html" class="template-card">
                <span class="template-number">10</span>
                <span class="template-title">Retro Futurist</span>
                <span class="template-tag">Sci-Fi UI</span>
            </a>
            <a href="../Templates/11_Swiss_3D/index.html" class="template-card">
                <span class="template-number">11</span>
                <span class="template-title">Swiss 3D</span>
                <span class="template-tag">Geometric / Depth</span>
            </a>
            <a href="../Templates/12_Retro_60s_Space/index.html" class="template-card">
                <span class="template-number">12</span>
                <span class="template-title">Retro 60s Space</span>
                <span class="template-tag">NASA / Kubrick</span>
            </a>
            <a href="../Templates/13_Mono_Swiss_3D/index.html" class="template-card">
                <span class="template-number">13</span>
                <span class="template-title">Mono Swiss 3D</span>
                <span class="template-tag">Impact</span>
            </a>
            <a href="../Templates/14_Apple_Glass/index.html" class="template-card">
                <span class="template-number">14</span>
                <span class="template-title">Apple Glass</span>
                <span class="template-tag">Premium UI</span>
            </a>
            <a href="../Templates/15_Swiss_3D_Modern/index.html" class="template-card">
                <span class="template-number">15</span>
                <span class="template-title">Swiss 3D Modern</span>
                <span class="template-tag">New Wave</span>
            </a>
            <a href="../Templates/16_Swiss_Glass_3D/index.html" class="template-card">
                <span class="template-number">16</span>
                <span class="template-title">Swiss Glass 3D</span>
                <span class="template-tag">Layered</span>
            </a>
            <a href="../Templates/17_Retro_Future_Glass/index.html" class="template-card">
                <span class="template-number">17</span>
                <span class="template-title">Retro Future Glass</span>
                <span class="template-tag">Nostalgia</span>
            </a>
            <a href="../Templates/18_Swiss_Mono_3D/index.html" class="template-card">
                <span class="template-number">18</span>
                <span class="template-title">Swiss Mono 3D</span>
                <span class="template-tag">Structural</span>
            </a>
            <a href="../Templates/19_Apple_Swiss_Pro/index.html" class="template-card">
                <span class="template-number">19</span>
                <span class="template-title">Apple Swiss Pro</span>
                <span class="template-tag">Productivity</span>
            </a>
            <a href="../Templates/20_3D_Type_Swiss/index.html" class="template-card">
                <span class="template-number">20</span>
                <span class="template-title">3D Type Swiss</span>
                <span class="template-tag">Dimensional</span>
            </a>
            <a href="../Templates/21_Swiss_60s_Data/index.html" class="template-card">
                <span class="template-number">21</span>
                <span class="template-title">Swiss 60s Data</span>
                <span class="template-tag">Analog Tech</span>
            </a>
            <a href="../Templates/22_Glass_Mono_Space/index.html" class="template-card">
                <span class="template-number">22</span>
                <span class="template-title">Glass Mono Space</span>
                <span class="template-tag">Terminal</span>
            </a>
            <a href="../Templates/23_Retro_Apple_2001/index.html" class="template-card">
                <span class="template-number">23</span>
                <span class="template-title">Retro Apple 2001</span>
                <span class="template-tag">Aqua / Y2K</span>
            </a>
            <a href="../Templates/24_Swiss_Layers_3D/index.html" class="template-card">
                <span class="template-number">24</span>
                <span class="template-title">Swiss Layers 3D</span>
                <span class="template-tag">Collage</span>
            </a>
            <a href="../Templates/25_Mono_Swiss_Glass/index.html" class="template-card">
                <span class="template-number">25</span>
                <span class="template-title">Mono Swiss Glass</span>
                <span class="template-tag">Filtered</span>
            </a>
            <a href="../Templates/26_Master_Portfolio/index.html" class="template-card"
                style="border-color: var(--accent-color);">
                <span class="template-number">26</span>
                <span class="template-title">Master Portfolio</span>
                <span class="template-tag">Final Design</span>
            </a>
            <a href="../Templates/27_Master_Project_Base/index.php" class="template-card"
                style="border-color: var(--accent-color);">
                <span class="template-number">27</span>
                <span class="template-title">Master Project Base</span>
                <span class="template-tag">Responsive/Lightbox</span>
            </a>
        </div>
    </main>

    <?php
    if (!$is_standalone) {
        include '../../Components/footer.php';
    } else {
        echo '</body></html>';
    }
    ?>

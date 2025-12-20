<?php
/**
 * Labs - Laboratorio de Innovación
 */

$page_title = "Labs - Pablo Cirre";
$page_description = "Laboratorio de experimentación web. JS, HTML, PHP y diseño experimental.";
$page_keywords = "labs, experimentos web, javascript, diseño experimental, pablo cirre";

include '../Components/header.php';
?>

<!-- Lab Specific Styles -->
<style>
    .labs-hero {
        grid-column: 1 / -1;
        padding: 80px 0;
        margin-bottom: 40px;
        border-bottom: 1px solid var(--border-color);
    }

    .labs-title {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 800;
        font-size: 4rem;
        margin-bottom: 15px;
        letter-spacing: -1px;
        color: var(--text-color);
        max-width: 60%;
    }

    .labs-description {
        font-size: 1.1rem;
        color: var(--text-secondary);
        max-width: 800px;
        line-height: 1.6;
    }

    .labs-grid {
        grid-column: 1 / -1;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        margin-bottom: 60px;
        justify-content: start;
    }

    .lab-card {
        background: var(--surface-color);
        border: 1px solid var(--border-color);
        padding: 20px;
        text-decoration: none;
        color: var(--text-color);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 240px;
        position: relative;
        overflow: hidden;
    }

    .lab-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--border-color);
        transition: background 0.3s ease;
    }

    .lab-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
    }

    .lab-card:hover::before {
        background: var(--accent-color);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .card-label {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 0.8rem;
        font-weight: 700;
        color: var(--text-secondary);
        letter-spacing: 1px;
    }

    .status-light {
        width: 8px;
        height: 8px;
        background-color: var(--accent-color);
        border-radius: 50%;
        box-shadow: 0 0 8px var(--accent-color);
    }

    .lab-content h2 {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 0 10px 0;
    }

    .lab-content p {
        font-size: 0.9rem;
        color: var(--text-secondary);
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .card-footer {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 0.75rem;
        color: var(--text-tertiary);
        padding-top: 15px;
        border-top: 1px solid var(--border-color);
    }
</style>

<!-- Labs Hero Section -->
<section class="labs-hero">
    <h1 class="labs-title">Laboratorio de Innovación</h1>
    <p class="labs-description">
        Bienvenido a mi espacio de experimentación. Este es el <strong>laboratorio mágico de Pablo Cirre</strong>,
        un entorno controlado donde exploro los límites de <strong>JS, HTML, PHP</strong> y otras tecnologías
        web emergentes.
        Aquí nacen las ideas antes de convertirse en productos.
    </p>
</section>

<!-- Labs Grid -->
<div class="labs-grid">

    <?php
    $labsDir = __DIR__;
    $directories = scandir($labsDir);
    $ignored = ['.', '..', 'Templates']; // Ignore system dots and Templates folder
    
    $labCount = 0;

    foreach ($directories as $dir) {
        if (in_array($dir, $ignored))
            continue;

        $path = $labsDir . '/' . $dir;

        // Check if it is a directory and has index.php
        if (is_dir($path) && file_exists($path . '/index.php')) {
            $labCount++;

            // Extract metadata
            $content = file_get_contents($path . '/index.php');

            // Regex to extract variable values
            preg_match('/\$page_title\s*=\s*"([^"]+)"/', $content, $titleMatch);
            preg_match('/\$page_description\s*=\s*"([^"]+)"/', $content, $descMatch);

            // Clean up title (remove " - Lab X ...")
            $fullTitle = $titleMatch[1] ?? $dir;
            $cleanTitle = explode(' - ', $fullTitle)[0];

            $description = $descMatch[1] ?? 'Sin descripción disponible.';

            // Generate formatted number
            $labNumber = str_pad($labCount, 3, '0', STR_PAD_LEFT);
            ?>

            <a href="<?php echo $dir; ?>/" class="lab-card">
                <div class="card-header">
                    <span class="card-label">LAB_<?php echo $labNumber; ?></span>
                    <div class="status-light"></div>
                </div>
                <div class="lab-content">
                    <h2><?php echo $cleanTitle; ?></h2>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="card-footer">
                    <span>DIR: <?php echo strtoupper($dir); ?></span>
                    <span>STATUS: ONLINE</span>
                </div>
            </a>

            <?php
        }
    }
    ?>

</div>

<?php include '../Components/footer.php'; ?>
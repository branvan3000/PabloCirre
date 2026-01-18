<?php
/**
 * Labs - Laboratorio de Innovación
 */

$page_title = "Labs - Pablo Cirre";
$page_description = "Laboratorio de experimentación web. JS, HTML, PHP y diseño experimental.";
$page_keywords = "labs, experimentos web, javascript, diseño experimental, pablo cirre";

include '../Components/header.php';
?>

<!-- Labs Hero Section -->
<section class="labs-hero">
    <h1 class="labs-title">LAB / INDEX</h1>
    <p class="labs-description">
        [SYSTEM: ONLINE] <br>
        Bienvenido al <strong>Laboratorio de Innovación</strong>. Entorno controlado para experimentación
        con nuevas tecnologías y paradigmas de interfaz.
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

            $description = $descMatch[1] ?? 'DATA_UNAVAILABLE';

            // Generate formatted number
            $labNumber = str_pad($labCount, 3, '0', STR_PAD_LEFT);
            ?>

            <a href="<?php echo $dir; ?>/" class="lab-card">
                <div class="card-header">
                    <span class="card-label">REF_<?php echo $labNumber; ?></span>
                    <div class="status-light"></div>
                </div>
                <div class="lab-content">
                    <h2><?php echo $cleanTitle; ?></h2>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="card-footer">
                    <span>DIR: <?php echo strtoupper($dir); ?></span>
                    <span><i>→</i> ACCESS</span>
                </div>
            </a>

            <?php
        }
    }
    ?>

</div>

<?php include '../Components/footer.php'; ?>
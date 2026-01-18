<?php
/**
 * Shared Microsite Template
 * Fixed Structure for Project Microsites
 */

// Expected variables: $project
// $project = [
//     'id' => '...',
//     'h1' => '...',
//     'subtitle' => '...',
//     'context' => '...',
//     'value' => '...',
//     'contribution' => [...],
//     'url_official' => '...',
//     'tags' => [...]
// ];

$page_title = $project['h1'] . " - Pablo Cirre";
$page_description = $project['subtitle'];

include __DIR__ . '/../../Components/header.php';
?>


<div class="microsite-container tech-grid-bg">
    <!-- Breadcrumb -->
    <div style="margin-bottom: 40px; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px;">
        <a href="<?php echo BASE_URL; ?>/paginas/Projects/"
            style="color: var(--text-color); text-decoration: none; opacity: 0.5;">PROJECTS</a>
        <span style="margin: 0 15px; opacity: 0.3;">/</span>
        <span style="font-weight: 800; color: var(--accent-color);"><?php echo $project['id']; ?></span>
    </div>

    <!-- Hero Image -->
    <div class="microsite-hero-img">
        <img src="<?php echo BASE_URL; ?>/assets/img/projects/<?php echo strtolower(str_replace(' ', '', $project['id'])); ?>_hero_screenshot.png"
            alt="<?php echo $project['h1']; ?>"
            onerror="this.src='https://via.placeholder.com/1200x600?text=<?php echo urlencode($project['id']); ?>'">
    </div>

    <header class="microsite-header">
        <h1 class="microsite-h1"><?php echo $project['h1']; ?></h1>
        <p class="microsite-subtitle"><?php echo $project['subtitle']; ?></p>
    </header>

    <div class="microsite-grid">
        <div class="microsite-main">
            <div class="microsite-section">
                <span class="section-label">CONTEXTO</span>
                <div class="microsite-content">
                    <?php echo $project['context']; ?>
                </div>
            </div>

            <div class="microsite-section">
                <span class="section-label">VALOR INSTITUCIONAL</span>
                <div class="microsite-content">
                    <?php echo $project['value']; ?>
                </div>
            </div>

            <div class="microsite-section">
                <span class="section-label">MI APORTACIÓN</span>
                <div class="microsite-content">
                    <ul class="contribution-list">
                        <?php foreach ($project['contribution'] as $item): ?>
                            <li><?php echo $item; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <aside class="microsite-sidebar">
            <div class="value-prop-block">
                <span class="vp-label">ESTADO DEL PROYECTO</span>
                <span class="vp-value">ACTIVO / PROD</span>
            </div>

            <div class="value-prop-block">
                <span class="vp-label">FECHA DE IMPACTO</span>
                <span class="vp-value">2023 - 2026</span>
            </div>

            <div class="value-prop-block" style="border-top: 1px solid var(--border-color); padding-top: 20px;">
                <span class="vp-label">TECNOLOGÍAS CLAVE</span>
                <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-top: 10px;">
                    <?php foreach ($project['tags'] as $tag): ?>
                        <span
                            style="font-size: 0.7rem; background: var(--bg-color); border: 1px solid var(--border-color); padding: 4px 8px; color: var(--text-color); font-weight: 700;"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="microsite-actions">
                <a href="<?php echo $project['url_official']; ?>" target="_blank" class="btn-swiss">Visitar sitio
                    oficial</a>
                <a href="<?php echo BASE_URL; ?>/paginas/Projects/" class="btn-swiss secondary">Volver al índice</a>
            </div>
        </aside>
    </div>
</div>


<?php include __DIR__ . '/../../Components/footer.php'; ?>
<?php
/**
 * Shared Project Layout Template
 * This file is included by individual project pages.
 * Expects $project_config to be defined.
 */

// Default values to prevent errors
$defaults = [
    'title' => 'Project Title',
    'subtitle' => '',
    'tags' => [],
    'metrics' => [],
    'description' => '',
    'gallery' => [],
    'links' => [],
    'related_projects' => [],
    'technologies' => []
];

$config = array_merge($defaults, isset($project_config) ? $project_config : []);


// Page SEO setup
$page_title = $config['title'] . " - Pablo Cirre Projects";
$page_description = strip_tags($config['subtitle'] . " " . substr($config['description'], 0, 100)) . "...";

// Correct path to header (assuming this layout is included from a subdirectory)
// If we are in paginas/Projects/ProjectName/index.php, header is in ../../../Components/
include __DIR__ . '/../../Components/header.php';
?>

<style>
    /* Project Layout Specific Styles */
    .project-hero {
        padding: 100px 0 60px;
        position: relative;
    }

    .project-tag-pill {
        display: inline-block;
        padding: 6px 16px;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 0.8rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-right: 10px;
        margin-bottom: 20px;
        color: var(--text-secondary);
    }

    .metric-grid-large {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin: 60px 0;
        padding: 40px;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
    }

    .metric-item-large {
        text-align: center;
    }

    .metric-value-large {
        font-size: 3rem;
        font-weight: 700;
        background: linear-gradient(45deg, var(--text-color), var(--text-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: block;
        margin-bottom: 10px;
    }

    .metric-label-large {
        color: var(--text-secondary);
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .content-wrapper {
        display: grid;
        grid-template-columns: 1fr 300px;
        gap: 60px;
        margin-bottom: 100px;
    }

    .project-sidebar {
        position: sticky;
        top: 100px;
    }

    @media (max-width: 900px) {
        .content-wrapper {
            grid-template-columns: 1fr;
        }

        .project-sidebar {
            position: static;
            margin-top: 40px;
        }
    }

    .action-btn {
        display: block;
        width: 100%;
        padding: 16px;
        text-align: center;
        background: var(--text-color);
        color: var(--bg-color);
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        margin-bottom: 15px;
        transition: transform 0.2s ease;
    }

    .action-btn:hover {
        transform: translateY(-2px);
    }

    .secondary-btn {
        background: transparent;
        border: 1px solid var(--border-color);
        color: var(--text-color);
    }
</style>

<!-- Breadcrumb -->
<div class="grid-row" style="margin-top: 40px; margin-bottom: 20px; color: var(--text-secondary);">
    <div style="grid-column: 1 / -1;">
        <a href="<?php echo BASE_URL; ?>/paginas/Projects/" style="color: inherit; text-decoration: none;">Projects</a>
        <span style="margin: 0 10px;">/</span>
        <span><?php echo $config['title']; ?></span>
    </div>
</div>

<!-- Hero -->
<section class="grid-row project-hero">
    <div style="grid-column: 1 / -1;">
        <?php foreach ($config['tags'] as $tag): ?>
            <span class="project-tag-pill"><?php echo $tag; ?></span>
        <?php endforeach; ?>

        <h1 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 20px; line-height: 1.1;">
            <?php echo $config['title']; ?>
        </h1>

        <p style="font-size: 1.2rem; color: var(--text-secondary); max-width: 800px; line-height: 1.6;">
            <?php echo $config['subtitle']; ?>
        </p>
    </div>
</section>

<!-- Key Metrics -->
<?php if (!empty($config['metrics'])): ?>
    <section class="grid-row">
        <div class="metric-grid-large" style="grid-column: 1 / -1;">
            <?php foreach ($config['metrics'] as $metric): ?>
                <div class="metric-item-large">
                    <span class="metric-value-large"><?php echo $metric['value']; ?></span>
                    <span class="metric-label-large"><?php echo $metric['label']; ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<!-- Main Content -->
<div class="grid-row content-wrapper">

    <!-- Left Column: Description & Gallery -->
    <div class="project-main" style="grid-column: 1 / 9;">
        <h2 class="section-title">Sobre el Proyecto</h2>
        <div style="font-size: 1.1rem; line-height: 1.8; color: var(--text-color); opacity: 0.9; margin-bottom: 60px;">
            <?php echo $config['description']; ?>
        </div>

        <?php if (!empty($config['gallery'])): ?>
            <h2 class="section-title">Galería</h2>
            <div style="display: grid; gap: 20px;">
                <?php foreach ($config['gallery'] as $img): ?>
                    <div
                        style="background: #111; border-radius: 12px; overflow: hidden; border: 1px solid var(--border-color);">
                        <img src="<?php echo $img; ?>" alt="Project Screenshot" style="width: 100%; display: block;"
                            loading="lazy">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Right Column: Sidebar Actions -->
    <div class="project-sidebar" style="grid-column: 9 / -1;">
        <div
            style="background: rgba(255,255,255,0.03); padding: 30px; border-radius: 16px; border: 1px solid var(--border-color);">
            <h3 style="margin-bottom: 20px; font-size: 1.2rem;">Enlaces</h3>

            <?php if (!empty($config['links'])): ?>
                <?php foreach ($config['links'] as $link): ?>
                    <a href="<?php echo $link['url']; ?>"
                        class="action-btn <?php echo isset($link['secondary']) ? 'secondary-btn' : ''; ?>" target="_blank">
                        <?php echo $link['text']; ?>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Este proyecto es privado o interno.</p>
            <?php endif; ?>

            <?php if (!empty($config['technologies'])): ?>
                <div style="margin-top: 40px;">
                    <h4
                        style="font-size: 0.9rem; color: var(--text-secondary); text-transform: uppercase; margin-bottom: 15px;">
                        Stack Tecnológico</h4>
                    <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                        <?php foreach ($config['technologies'] as $tech): ?>
                            <span
                                style="font-size: 0.85rem; padding: 4px 10px; background: rgba(255,255,255,0.05); border-radius: 4px; color: var(--text-color);">
                                <?php echo $tech; ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<?php
// Correct path to footer
include __DIR__ . '/../../Components/footer.php';
?>
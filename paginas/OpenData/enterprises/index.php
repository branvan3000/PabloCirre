<?php
/**
 * Central Enterprises - Open Data Infrastructure
 */

$page_title = "Central Enterprises | Open Data Foundation - Pablo Cirre";
$page_description = "Central.Enterprises: The common foundation for open data and corporate intelligence. Transform public signals into neutral business insights.";
$page_keywords = "central enterprises, open data foundation, business intelligence, spain registry, uk companies house, us corporate data";

include '../../../Components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" style="padding: 80px 0;">
    <h1 class="hero-title" style="font-size: 3.5rem; text-transform: uppercase; letter-spacing: -1px;">Open Data <br>Is
        Infrastructure.</h1>
    <p class="hero-subtitle">
        Central.Enterprises proporciona una base común donde investigadores, pequeñas empresas e instituciones operan
        desde una realidad compartida.
        Transformamos señales públicas en una capa neutral de inteligencia empresarial global.
    </p>
    <div>
        <a href="http://central.enterprises/" target="_blank" class="btn-primary">Acceder a la Plataforma</a>
        <a href="<?php echo BASE_URL; ?>/paginas/OpenData/" class="link-secondary">Volver a OpenData</a>
    </div>
</section>

<!-- Metrics Console (System Status) -->
<div class="metrics-grid" style="margin-bottom: 120px;">
    <div class="data-panel">
        <div class="panel-header">
            <span class="panel-label">GOVERNANCE</span>
            <div class="light on"></div>
        </div>
        <div class="panel-content">
            <div class="metric-value">Foundation</div>
            <div class="metric-desc">Spain-based</div>
        </div>
        <div class="panel-footer">
            <span>TRANSITION: ACTIVE</span>
        </div>
    </div>

    <div class="data-panel">
        <div class="panel-header">
            <span class="panel-label">JURISDICTIONS</span>
            <div class="light on"></div>
        </div>
        <div class="panel-content">
            <div class="metric-value">3</div>
            <div class="metric-desc">Key Regions</div>
        </div>
        <div class="panel-footer">
            <span>ES + US + UK</span>
        </div>
    </div>

    <div class="data-panel">
        <div class="panel-header">
            <span class="panel-label">API GATEWAY</span>
            <div class="light on"></div>
        </div>
        <div class="panel-content">
            <div class="metric-value">12ms</div>
            <div class="metric-desc">Global Latency</div>
        </div>
        <div class="panel-footer">
            <span>STATUS: OPERATIONAL</span>
        </div>
    </div>

    <div class="data-panel">
        <div class="panel-header">
            <span class="panel-label">ACCESS</span>
            <div class="light on"></div>
        </div>
        <div class="panel-content">
            <div class="metric-value">CC0</div>
            <div class="metric-desc">Open License</div>
        </div>
        <div class="panel-footer">
            <span>TIER: PUBLIC</span>
        </div>
    </div>
</div>

<!-- Access Protocols (Jurisdictions) -->
<h2 class="section-title">Jurisdicciones Disponibles</h2>

<div class="projects-grid" style="margin-bottom: 120px;">

    <!-- Spain -->
    <a href="http://central.enterprises/country/es" target="_blank" class="project-card"
        style="text-decoration: none; color: inherit; transition: transform 0.2s;">
        <span class="project-tag" style="background: var(--accent-color);">EU-01</span>
        <h3 class="project-title">Spain Registry</h3>
        <p class="project-desc">
            Acceso a datos corporativos uniformes para el Reino de España.
        </p>
        <div class="project-metrics">
            <div class="p-metric">
                <span class="pm-label">Cobertura</span>
                <span class="pm-value">100%</span>
            </div>
            <div class="p-metric">
                <span class="pm-label">Update</span>
                <span class="pm-value">Daily</span>
            </div>
        </div>
    </a>

    <!-- USA -->
    <a href="http://central.enterprises/country/us" target="_blank" class="project-card"
        style="text-decoration: none; color: inherit; transition: transform 0.2s;">
        <span class="project-tag" style="background: var(--text-secondary);">NA-01</span>
        <h3 class="project-title">United States</h3>
        <p class="project-desc">
            Reconciliación de entidades corporativas a nivel federal y estatal.
        </p>
        <div class="project-metrics">
            <div class="p-metric">
                <span class="pm-label">States</span>
                <span class="pm-value">50+</span>
            </div>
            <div class="p-metric">
                <span class="pm-label">Sync</span>
                <span class="pm-value">Real-time</span>
            </div>
        </div>
    </a>

    <!-- UK -->
    <a href="http://central.enterprises/country/gb" target="_blank" class="project-card"
        style="text-decoration: none; color: inherit; transition: transform 0.2s;">
        <span class="project-tag" style="background: var(--text-secondary);">EU-02</span>
        <h3 class="project-title">United Kingdom</h3>
        <p class="project-desc">
            Integración y verificación de datos de Companies House.
        </p>
        <div class="project-metrics">
            <div class="p-metric">
                <span class="pm-label">Source</span>
                <span class="pm-value">Official</span>
            </div>
            <div class="p-metric">
                <span class="pm-label">Format</span>
                <span class="pm-value">JSON-LD</span>
            </div>
        </div>
    </a>

</div>

<!-- About / Manifesto -->
<div class="about-section" style="margin-bottom: 120px;">
    <h2 class="about-title">Why a Foundation?</h2>
    <div class="about-text">
        <p>
            <strong>Central.Enterprises</strong> está en transición para convertirse en una Fundación con base en
            España.
            Creemos que los datos abiertos deben permanecer abiertos (CC0).
        </p>
        <p>
            El acceso "Pro" financia la custodia y el mantenimiento de la infraestructura, garantizando que la capa base
            permanezca neutral y accesible para la investigación y el desarrollo público.
        </p>
    </div>
</div>

<?php include '../../../Components/footer.php'; ?>
<?php
/**
 * Tools - Kaiju Translator
 * Estilo: Splash Style - Extended Vision
 */

// SEO Metadata
$page_title = "Kaiju Translator · Democratizando el Acceso Global a la Información | Pablo Cirre Tools";
$page_description = "KaijuTranslator (KT) no es solo un motor de traducción; es una infraestructura para un mundo sin barreras lingüísticas. Genera espejos SEO estáticos para conectar culturas.";
$page_keywords = "kaiju translator, impacto global, democratización información, traducción ai, infraestructura seo, pablo cirre vision";

include '../../../Components/header.php';
?>

<style>
    /* --- NAVIGATION BAR --- */
    .project-nav-bar {
        position: fixed;
        top: 20px;
        left: 40px;
        z-index: 100;
        display: flex;
        gap: 15px;
        align-items: center;
        background: rgba(40, 40, 40, 0.8);
        backdrop-filter: blur(10px);
        padding: 10px 20px;
        border-radius: 50px;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    [data-theme="light"] .project-nav-bar {
        background: rgba(255, 255, 255, 0.8);
    }

    .nav-back-btn {
        text-decoration: none;
        color: var(--text-color);
        font-weight: 500;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: color 0.2s;
    }

    .nav-back-btn:hover {
        color: var(--accent-color);
    }

    /* Custom Badges */
    .tech-tag {
        background: rgba(0, 0, 0, 0.05);
        border: 1px solid var(--border-color);
        padding: 5px 10px;
        font-size: 0.8rem;
        border-radius: 4px;
        font-family: monospace;
        color: var(--text-color);
        opacity: 0.8;
    }

    .diagram-container {
        background: var(--panel-bg);
        border: 1px solid var(--border-color);
        padding: 40px;
        border-radius: 12px;
        margin: 40px 0;
        overflow-x: auto;
    }

    .diagram-step {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
    }

    .step-num {
        background: var(--accent-color);
        color: white;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        flex-shrink: 0;
    }

    .vision-section {
        margin-bottom: 120px;
    }

    .vision-quote {
        font-size: 2.5rem;
        font-weight: 600;
        line-height: 1.2;
        margin-bottom: 40px;
        letter-spacing: -1px;
        color: var(--text-color);
    }

    @media (max-width: 768px) {
        .project-nav-bar {
            top: auto;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: max-content;
        }

        .vision-quote {
            font-size: 1.8rem;
        }
    }
</style>

<!-- --- NAVIGATION --- -->
<div class="project-nav-bar">
    <a href="<?php echo BASE_URL; ?>/paginas/Tools/" class="nav-back-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
        Volver a Kaiju Tools
    </a>
    <span style="opacity: 0.3;">|</span>
    <a href="https://github.com/branvan3000/KaijuTranslator" target="_blank" class="nav-back-btn"
        style="color: var(--accent-color);">
        Ver Repo &nearr;
    </a>
</div>

<!-- Hero Section -->
<section class="hero-section" style="padding: 140px 0 80px;">
    <span class="highlight-tag"
        style="background: var(--accent-color); color: white; padding: 5px 12px; border-radius: 4px; font-size: 0.9rem; margin-bottom: 25px; display: inline-block; letter-spacing: 1px;">EL
        MANIFIESTO DEL ESPEJO GLOBAL</span>
    <h1 class="hero-title" style="font-size: 4rem; margin-bottom: 30px; letter-spacing: -2px; line-height: 1.1;">
        Kaiju Translator:<br>Conectando el Conocimiento Humano</h1>
    <p class="hero-subtitle"
        style="font-size: 1.3rem; max-width: 900px; color: var(--text-color); opacity: 0.8; line-height: 1.6;">
        En un planeta fragmentado por el lenguaje, el acceso a la información es el derecho humano más crítico de la era
        digital. <strong>KaijuTranslator</strong> no es solo una herramienta; es una declaración de intenciones
        tecnológica para democratizar el éxito global.
    </p>
    <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 30px;">
        <span class="tech-tag">GLOBAL IMPACT</span>
        <span class="tech-tag">ECO-EFFICIENCY</span>
        <span class="tech-tag">DEMOCRATIZATION</span>
        <span class="tech-tag">ZERO-FRICTION</span>
    </div>
</section>

<!-- Vision Content Flow -->
<div style="grid-column: 2 / 12; margin-bottom: 100px;">

    <!-- Vision 1: The Linguistic Barrier -->
    <div class="vision-section">
        <h2 class="vision-quote">"El 60% de Internet está en inglés, pero solo el 15% del mundo lo habla. Estamos
            dejando atrás a miles de millones."</h2>
        <div style="max-width: 900px; border-left: 3px solid var(--accent-color); padding-left: 50px;">
            <div style="font-size: 1.25rem; line-height: 1.8; color: var(--text-color); opacity: 0.85;">
                <p>La barrera del lenguaje es la nueva brecha digital. Cuando una innovación, un tutorial médico o una
                    documentación técnica se publica solo en un idioma, se está levantando un muro invisible frente a
                    mentes brillantes en mercados emergentes.</p>
                <p style="margin-top: 20px;">KaijuTranslator nace para derribar ese muro. Al crear espejos físicos y
                    automáticos de información, permitimos que el conocimiento fluya de forma nativa hacia el español,
                    hindi, árabe o chino, permitiendo que la próxima generación de creadores no tenga que aprender un
                    idioma extranjero antes de poder aprender a construir.</p>
            </div>
        </div>
    </div>

    <!-- Vision 2: Democratizing Success -->
    <div class="vision-section">
        <h2 class="vision-quote">Democratizando el Éxito para el Pequeño Creador</h2>
        <div style="max-width: 900px; border-left: 3px solid var(--border-color); padding-left: 50px;">
            <div style="font-size: 1.25rem; line-height: 1.8; color: var(--text-color); opacity: 0.85;">
                <p>Tradicionalmente, internacionalizar un proyecto requería equipos de traducción masivos o APIs de
                    "on-the-fly" prohibitivamente caras que penalizaban el SEO. Esto dejaba la expansión global
                    reservada solo para las grandes corporaciones.</p>
                <p style="margin-top: 20px;">Con la arquitectura de <strong>Espejo SEO</strong> de Kaiju, cualquier
                    desarrollador independiente puede posicionar sus ideas en 20 países simultáneamente. Estamos
                    nivelando el campo de juego. Una buena idea en Bogota ahora tiene la misma visibilidad técnica que
                    una en Silicon Valley.</p>
            </div>
        </div>
    </div>

    <!-- Technical Vision: Zero-Rewrite & Sustainability -->
    <div class="vision-section"
        style="background: var(--panel-bg); border: 1px solid var(--border-color); padding: 60px; border-radius: 12px;">
        <h2 style="font-size: 2.2rem; margin-bottom: 30px;">Ingeniería Sostenible y Consciente</h2>
        <div style="font-size: 1.15rem; line-height: 1.8; color: var(--text-color); opacity: 0.85;">
            <p>Cada llamada a un LLM (como OpenAI o Gemini) consume recursos energéticos considerables. En un mundo
                consciente del clima, el uso indiscriminado de la AI es irresponsable.</p>
            <p style="margin-top: 15px;">KaijuTranslator implementa una <strong>Estrategia de Caché de un Solo
                    Paso</strong>. Traducimos una vez, servimos un millón de veces. Al generar archivos físicos locales,
                eliminamos la necesidad de redundancia computacional. Es eficiencia pura: maximizamos el valor
                informativo mientras minimizamos la huella de carbono digital.</p>

            <div class="diagram-container" style="background: rgba(0,0,0,0.1); margin-top: 40px;">
                <div class="diagram-step">
                    <div class="step-num">1</div>
                    <div><strong>Deep Scan:</strong> Entendemos el contexto semántico de tu web original.</div>
                </div>
                <div class="diagram-step">
                    <div class="step-num">2</div>
                    <div><strong>Neural Link:</strong> Conectamos con el modelo de AI más eficiente para el par de
                        idiomas.</div>
                </div>
                <div class="diagram-step">
                    <div class="step-num">3</div>
                    <div><strong>Physical Generation:</strong> Creamos la capa nativa indexable.</div>
                </div>
                <div class="diagram-step">
                    <div class="step-num">4</div>
                    <div><strong>Eternal Serve:</strong> Entregamos HTML estático sin latencia ni nuevos consumos.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Metrics Grid (The Reality of Impact) -->
    <div class="metrics-grid" style="margin: 80px 0;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">POTENTIAL REACH</span>
                <div class="light on"></div>
            </div>
            <div class="panel-content">
                <div class="metric-value">4.5B</div>
                <div class="metric-desc">Usuarios no Angloparlantes</div>
            </div>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">SEO EFFICIENCY</span>
                <div class="light on"></div>
            </div>
            <div class="panel-content">
                <div class="metric-value">0ms</div>
                <div class="metric-desc">Latencia de Traducción (Static)</div>
            </div>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">INTEGRATION COST</span>
                <div class="light on"></div>
            </div>
            <div class="panel-content">
                <div class="metric-value">$0</div>
                <div class="metric-desc">Open Source for Global Good</div>
            </div>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">FUTURE READINESS</span>
                <div class="light on"></div>
            </div>
            <div class="panel-content">
                <div class="metric-value">200+</div>
                <div class="metric-desc">Idiomas Soportados</div>
            </div>
        </div>
    </div>

    <!-- Final Call to Action -->
    <div class="vision-section" style="text-align: center;">
        <h2 style="font-size: 3rem; margin-bottom: 20px;">Únete a la Revolución de la Información Libre</h2>
        <p style="font-size: 1.4rem; color: var(--text-secondary); max-width: 800px; margin: 0 auto 40px;">
            KaijuTranslator es mi contribución personal a un ecosistema digital más justo, conectado y eficiente. Porque
            el lenguaje nunca debería ser el límite de tu talento.</p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
            <a href="https://github.com/branvan3000/KaijuTranslator" target="_blank" class="btn-primary"
                style="padding: 20px 50px; font-size: 1.2rem;">Construyamos el Futuro Juntos -></a>
        </div>
    </div>

</div>

<?php include '../../../Components/footer.php'; ?>
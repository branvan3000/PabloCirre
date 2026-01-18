<?php
/**
 * Curso Email Marketing Machine
 */

$page_title = "Curso Email Marketing Automatizado | Pablo Cirre";
$page_description = "Curso de Email Marketing con Brevo, Mailchimp y Mailrelay. Aprende segmentación, automatización y copywriting para ventas. Estrategia y operativa.";
$page_keywords = "curso email marketing, automatización marketing, curso brevo, curso mailchimp, estrategia newsletter";

include '../../../Components/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Email Marketing Machine: Automatiza y vende",
  "description": "Curso práctico de automatización de marketing por email. Aprende a crear flujos de venta, nutrir leads y multiplicar el LTV de tus clientes.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Cirre",
    "sameAs": "https://pablocirre.es"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.7",
    "reviewCount": "42"
  },
  "offers": {
    "@type": "Offer",
    "category": "Paid",
    "priceCurrency": "EUR",
    "price": "Consultar"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "¿Qué herramienta de Email Marketing es mejor?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Depende de tu presupuesto y necesidades. En el curso analizaremos en profundidad Brevo (ex-Sendinblue) por su relación calidad-precio, Mailchimp para interfaces visuales y Mailrelay para grandes volúmenes gratuitos. Te enseñaré a migrar entre ellas para que no seas rehén de ninguna."
    }
  }, {
    "@type": "Question",
    "name": "¿Tengo que saber escribir 'copy' persuasivo?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No hace falta ser Shakespeare. Te daré frameworks y plantillas de correo probadas (AIDA, PAS) que funcionan. Lo importante es la claridad y la relevancia para el usuario, no la poesía."
    }
  }, {
    "@type": "Question",
    "name": "¿Este curso sirve para B2B?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí. El 'Lead Nurturing' en B2B es fundamental para cerrar ventas de ciclo largo. Aprenderás a crear secuencias educativas que generan confianza y autoridad antes de pedir la reunión comercial."
    }
  }]
}
</script>

<section class="hero-section" style="padding: 80px 0;">
    <span class="project-tag"
        style="background: var(--accent-color); margin-bottom: 20px; display: inline-block;">AUTOMATIZACIÓN</span>
    <h1 class="hero-title" style="font-size: 3.5rem;">Email Marketing Machine:<br>Automatiza y vende.</h1>
    <p class="hero-subtitle">
        El email tiene el ROI más alto del mercado digital (40€ por cada 1€ invertido). Deja de enviar "boletines"
        aburridos que nadie lee y crea un sistema de ventas automático que funciona 24/7.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary" style="margin-top: 20px;">Ver Programa</a>
</section>

<!-- Audience -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">¿Para quién es este programa?</h2>
    <div class="metrics-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 40px;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">ALUMNOS</span></div>
            <p>Especialízate en Retention Marketing. Las empresas pagan oro por quien sabe cuidar y monetizar su base de
                datos existente.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">AGENCIAS</span></div>
            <p>Gestiona el canal más rentable de tus clientes. Implementa flujos de automatización que trabajan solos y
                justifican tu fee mensual.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">PYMES</span></div>
            <p>Vende a quien ya te conoce. Es 5 veces más barato fidelizar a un cliente antiguo que captar tráfico frío
                nuevo en Google o Meta.</p>
        </div>
    </div>
</div>

<!-- Syllabus Extended -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Temario Detallado</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3 class="project-title">1. Estrategia de Captación (List Building)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>El fin del "Suscríbete a mi newsletter": Lead Magnets que convierten.</li>
                <li>Single Opt-in vs Double Opt-in: Pros, contras y legalidad.</li>
                <li>Diseño de formularios de alta conversión y Pop-ups no intrusivos.</li>
                <li>Gestión de bajas y limpieza de lista para ahorrar costes.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">2. Segmentación Inteligente</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Etiquetado automático por comportamiento (clics, visitas web).</li>
                <li>Scoring de Leads: Identifica quién está "caliente" para comprar.</li>
                <li>Modelo RFM: Recencia, Frecuencia y Monetización.</li>
                <li>Personalización dinámica del contenido del email (Liquid/Variables).</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">3. Entregabilidad Técnica</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Autenticación de dominio: SPF, DKIM y DMARC explicados fácil.</li>
                <li>Reputación de IP y dominio: Cómo evitar la carpeta de Spam.</li>
                <li>BIMI: Pon tu logo en la bandeja de entrada.</li>
                <li>Higiene de listas y gestión de Hard Bounces vs Soft Bounces.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">4. Automatizaciones (Marketing Automation)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Serie de Bienvenida (Welcome Series): La primera impresión.</li>
                <li>Recuperación de Carrito Abandonado (más allá del "te olvidaste esto").</li>
                <li>Reactivación de usuarios inactivos o "Zombies".</li>
                <li>Flujos post-compra para Cross-sell y obtención de reseñas.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">5. Diseño y Copywriting</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>HTML vs Texto Plano: Cuándo usar cada uno.</li>
                <li>La anatomía del asunto perfecto (Open Rate).</li>
                <li>Estructura del cuerpo del mail para conseguir el clic (CTR).</li>
                <li>Pruebas A/B: Midiendo qué funciona realmente.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">6. Analítica y Legislación</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Interpretación de métricas: Open Rate, CTR, Bounce Rate, Unsubscribes.</li>
                <li>Google Analytics UTMs para medir el tráfico de email.</li>
                <li>RGPD y LSSI: Cómo enviar emails sin multas.</li>
            </ul>
        </div>
    </div>
</div>

<!-- FAQ Optimized -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Preguntas Frecuentes</h2>
    <div style="display: grid; gap: 20px;">

        <details class="faq-item">
            <summary class="faq-question">¿Qué herramienta de Email Marketing es mejor?</summary>
            <div class="faq-answer">
                <p>Es la pregunta del millón, y la respuesta es: depende de tu etapa y presupuesto.</p>
                <p>En el curso analizaremos Brevo (antes Sendinblue) por su excelente plan gratuito y automatización, y
                    también veremos Mailrelay (gigante en envíos gratis) y Mailchimp. Lo importante no es la
                    herramienta, sino la estrategia; te enseñaré a migrar tus contactos de una a otra en minutos.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Tengo que saber escribir muy bien?</summary>
            <div class="faq-answer">
                <p>No necesitas ser un premio Nobel de literatura. Necesitas ser claro, relevante y persuasivo.</p>
                <p>Te daré plantillas y estructuras probadas (como el método AIDA o PAS) para que solo tengas que
                    rellenar los huecos con tu oferta. Escribir emails que venden es una técnica, no un arte místico.
                </p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Sirve para empresas B2B (venta a empresas)?</summary>
            <div class="faq-answer">
                <p>Por supuesto. El ciclo de venta B2B es largo y necesita confianza.</p>
                <p>El Email Marketing es la herramienta perfecta para el "Lead Nurturing": educar a tu potencial
                    cliente, aportarle valor y mantenerte en su mente (Top of Mind) hasta que esté listo para comprar.
                    Enseñamos secuencias específicas para este sector.</p>
            </div>
        </details>

    </div>
</div>

<!-- Final CTA -->
<div class="contact-section">
    <h2 style="font-size: 2rem; margin-bottom: 10px;">El dinero está en la lista</h2>
    <p style="color: var(--text-secondary); margin-bottom: 30px;">
        Empieza a construir tu activo digital más valioso y estable hoy mismo.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary">Apuntarme al Curso</a>
</div>

<?php include '../../../Components/footer.php'; ?>
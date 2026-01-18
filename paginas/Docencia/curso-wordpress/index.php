<?php
/**
 * Curso WordPress Pro
 */

$page_title = "Curso WordPress Pro | Formación Técnica - Pablo Cirre";
$page_description = "Aprende a crear webs profesionales con WordPress desde cero. Rendimiento, seguridad y optimización para negocio. Curso práctico para profesionales.";
$page_keywords = "curso wordpress avanzado, formación wordpress granada, wordpress para agencias, optimización wordpress";

include '../../../Components/header.php';
?>

<!-- JSON-LD Schema for Google Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "WordPress Pro: Webs sólidas desde cero",
  "description": "Curso avanzado de desarrollo web con WordPress. Aprende a crear sitios seguros, rápidos y optimizados sin depender de plantillas pesadas.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Cirre",
    "sameAs": "https://pablocirre.es"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "127"
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
    "name": "¿Necesito saber programar para este curso?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No es estrictamente necesario saber código (PHP/JS) para empezar, ya que WordPress moderno permite hacer casi todo visualmente con el editor de bloques completisimo. Sin embargo, enseñaré nociones básicas de CSS y HTML para que no tengas límites a la hora de personalizar estilos."
    }
  }, {
    "@type": "Question",
    "name": "¿Qué hosting o servidor necesito?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Durante el curso recomendaremos proveedores de hosting profesionales que ofrecen buen rendimiento (NVMe, LiteSpeed, etc.) a bajo coste. Si ya tienes uno contratado, lo auditaremos para ver si cumple con los estándares de calidad necesarios para un proyecto profesional."
    }
  }, {
    "@type": "Question",
    "name": "¿Sirve para tiendas online?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Este curso cubre la base fundamental de WordPress. Aunque instalaremos plugins, si tu objetivo principal es montar un E-commerce complejo, te recomiendo complementar este módulo con el curso especializado 'WooCommerce Growth', donde profundizamos en logística, pasarelas de pago y conversión."
    }
  }, {
    "@type": "Question",
    "name": "¿Obtendré algún certificado?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí, al finalizar el proyecto y entregarlo correctamente, recibirás un diploma acreditativo de finalización del curso WordPress Pro de 80 horas de duración."
    }
  }]
}
</script>

<section class="hero-section" style="padding: 80px 0;">
    <span class="project-tag"
        style="background: var(--accent-color); margin-bottom: 20px; display: inline-block;">PROGRAMA TÉCNICO</span>
    <h1 class="hero-title" style="font-size: 3.5rem;">WordPress Pro:<br>Webs sólidas desde cero.</h1>
    <p class="hero-subtitle">
        Una web completa, rápida y mantenible, lista para captar clientes. Deja de pelearte con temas mal hechos y
        aprende a construir con criterio profesional y estándares de mercado.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary" style="margin-top: 20px;">Solicitar
        Información</a>
</section>

<!-- Audience -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">¿Para quién es este programa?</h2>
    <div class="about-text" style="margin-bottom: 40px;">
        <p>
            Muchos cursos te enseñan a "instalar un tema y cambiar fotos". Eso no es ser profesional.
            Aquí aprenderás la arquitectura real de WordPress, cómo funciona el Template Hierarchy y cómo entregar un
            producto que no se rompa al actualizar.
        </p>
    </div>
    <div class="metrics-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">ALUMNOS</span></div>
            <p>Construye un portafolio que te consiga clientes. Aprende a vender webs de 1000€, no de 200€. Diferénciate
                por la calidad técnica.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">AGENCIAS</span></div>
            <p>Estandariza tus entregas. Reduce los tiempos de desarrollo y, sobre todo, los tickets de soporte
                post-entrega por webs inestables.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">PYMES</span></div>
            <p>Toma el control. Deja de depender de terceros para cambiar una foto o un texto. Gestiona tu activo
                digital con total autonomía.</p>
        </div>
    </div>
</div>

<!-- Syllabus Extended -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Temario Detallado</h2>
    <p class="section-subtitle" style="margin-bottom: 40px; color: var(--text-secondary);">
        Un recorrido paso a paso desde el servidor vacío hasta la web en producción.
    </p>
    <div class="projects-grid">
        <div class="project-card">
            <h3 class="project-title">1. Preparación del Proyecto</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Compra de dominios y gestión de DNS (registros A, CNAME, MX).</li>
                <li>Elección de Hosting: Shared vs VPS vs Managed.</li>
                <li>Certificados SSL (Let's Encrypt) y HTTPS forzado.</li>
                <li>Entornos de desarrollo: Local (Laragon/LocalWP) vs Staging.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">2. WordPress Core</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Instalación manual limpia (nada de instaladores automáticos).</li>
                <li>Estructura de base de datos: prefix, users y options table.</li>
                <li>Configuración crítica: Permalinks, Timezone, Reading settings.</li>
                <li>Limpieza de bloatware inicial.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">3. Full Site Editing (FSE)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Filosofía de bloques vs Page Builders tradicionales.</li>
                <li>theme.json: El corazón de los estilos globales.</li>
                <li>Creación de plantillas (Header, Footer, Single, Archive).</li>
                <li>Patrones y Partes de plantilla reutilizables.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">4. Rendimiento (WPO)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Core Web Vitals: LCP, CLS y INP explicados.</li>
                <li>Estrategias de Caché: Servidor (Redis/Varnish) y Plugin (WP Rocket/Litespeed).</li>
                <li>Optimización de imágenes: Formatos Next-Gen (WebP/AVIF).</li>
                <li>Debloating: Carga condicional de scripts y estilos.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">5. Seguridad Defensiva</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Hardening de wp-config.php y .htaccess.</li>
                <li>Gestión de usuarios y roles (Principio de menor privilegio).</li>
                <li>Protección contra fuerza bruta y XML-RPC.</li>
                <li>Sistemas de Backups automáticos externos (3-2-1 rule).</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">6. Analítica y Legalidad</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>RGPD en España: Cookies reales vs banners falsos.</li>
                <li>Textos legales obligatorios (Aviso Legal, Privacidad).</li>
                <li>Integración de Google Analytics 4 (GA4) y Search Console.</li>
                <li>Configuración de objetivos de conversión básicos.</li>
            </ul>
        </div>
    </div>
</div>

<!-- FAQ Optimized -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Preguntas Frecuentes</h2>
    <div style="display: grid; gap: 20px;">

        <details class="faq-item">
            <summary class="faq-question">¿Necesito saber programar para hacer este curso?</summary>
            <div class="faq-answer">
                <p>No es estrictamente necesario saber código (PHP/JS) para empezar, ya que WordPress moderno permite
                    hacer casi todo visualmente con el editor de bloques completisimo.</p>
                <p>Sin embargo, durante el curso enseñaré nociones básicas de CSS y HTML para que aprendas a hacer esos
                    "ajustes finos" que marcan la diferencia entre una web amateur y una profesional.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Qué hosting o servidor necesito?</summary>
            <div class="faq-answer">
                <p>No compres nada antes de empezar. Durante el curso recomendaremos proveedores de hosting
                    profesionales que ofrecen buen rendimiento (discos NVMe, servidor web LiteSpeed, IPs limpias) a bajo
                    coste.</p>
                <p>Si ya tienes uno contratado de antes, lo auditaremos juntos para verificar si su TTFB (Time To First
                    Byte) y recursos son suficientes para un proyecto serio.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Sirve este curso para montar una tienda online?</summary>
            <div class="faq-answer">
                <p>Sí y no. Este curso cubre la base fundamental de WordPress, que es el "sistema operativo" de la web.
                </p>
                <p>Instalaremos plugins y veremos cómo funciona el ecosistema, pero si tu objetivo principal y único es
                    montar un E-commerce complejo con miles de productos, te recomiendo encarecidamente que complementes
                    este módulo con el curso especializado 'WooCommerce Growth', donde profundizamos 40 horas solo en
                    logística, pasarelas de pago y conversión.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Das algún tipo de certificado al finalizar?</summary>
            <div class="faq-answer">
                <p>Sí. Al entregar el proyecto final (una web funcional y optimizada), recibirás un diploma acreditativo
                    de finalización del curso WordPress Pro de 80 horas de duración, detallando las competencias
                    técnicas adquiridas.</p>
            </div>
        </details>

    </div>
</div>

<!-- Final CTA -->
<div class="contact-section">
    <h2 style="font-size: 2rem; margin-bottom: 10px;">Empieza a construir webs de verdad</h2>
    <p style="color: var(--text-secondary); margin-bottom: 30px;">
        Únete a la próxima convocatoria y profesionaliza tu perfil digital.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary">Solicitar Plaza ahora</a>
</div>

<?php include '../../../Components/footer.php'; ?>
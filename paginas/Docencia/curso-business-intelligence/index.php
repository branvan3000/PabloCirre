<?php
/**
 * Curso Business Intelligence
 */

$page_title = "Curso Business Intelligence y Datos | Pablo Cirre";
$page_description = "Formación en Business Intelligence con datos reales de empresas. Enriquecimiento con IA, calidad del dato y dashboards para toma de decisiones comerciales.";
$page_keywords = "curso business intelligence, datos empresas, enriquecimiento datos ia, inteligencia comercial, segmentación b2b";

include '../../../Components/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Business Intelligence: Datos reales, decisiones rentables",
  "description": "Curso de inteligencia de negocio aplicado a ventas B2B. Limpieza, enriquecimiento con IA y visualización de datos de empresas reales.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Cirre",
    "sameAs": "https://pablocirre.es"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "38"
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
    "name": "¿Necesito saber programar en Python/R?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No es obligatorio para empezar. El 80% del trabajo se puede hacer con herramientas No-Code, Excel avanzado y APIs. Sin embargo, enseñaremos scripts de Python sencillos (copy-paste) que automatizan tareas repetitivas y te ahorrarán cientos de horas."
    }
  }, {
    "@type": "Question",
    "name": "¿De dónde salen los datos del curso?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Usamos Open Data gubernamental y acceso exclusivo educativo a las APIs de Centraldecomunicacion.es y CompaniesData.cloud. Trabajamos con registros reales de empresas activas, no con tablas de ejemplo ficticias."
    }
  }, {
    "@type": "Question",
    "name": "¿Es legal usar estos datos?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí, siempre que se respeten las finalidades B2B. Dedicamos un módulo entero a entender el marco legal del Open Data, las fuentes públicas y el Interés Legítimo bajo el RGPD para prospección comercial corporativa."
    }
  }]
}
</script>

<section class="hero-section" style="padding: 80px 0;">
    <span class="project-tag" style="background: var(--accent-color); margin-bottom: 20px; display: inline-block;">DATA
        & IA</span>
    <h1 class="hero-title" style="font-size: 3.5rem;">Business Intelligence:<br>Datos reales, decisiones rentables.</h1>
    <p class="hero-subtitle">
        Olvídate de los excels caóticos. Aprende a limpiar, enriquecer y visualizar datos de millones de empresas para
        detectar oportunidades comerciales invisibles para tu competencia.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary" style="margin-top: 20px;">Información del
        Curso</a>
</section>

<!-- Audience -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">¿Para quién es este programa?</h2>
    <div class="metrics-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 40px;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">ALUMNOS</span></div>
            <p>Perfil Data Analyst. Aprende a trabajar con volúmenes de datos "sucios" del mundo real, no con datasets
                académicos perfectos que no existen en la empresa.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">AGENCIAS</span></div>
            <p>Ofrece servicios de enriquecimiento de BBDD y prospección B2B a tus clientes. Valor añadido puro que se
                paga caro.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">PYMES</span></div>
            <p>Dirige tu fuerza de ventas. Deja de "llamar a puerta fría" al azar y ataca nichos quirúrgicamente con
                datos de facturación y tecnología.</p>
        </div>
    </div>
</div>

<!-- Syllabus Extended -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Temario Detallado</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3 class="project-title">1. Calidad del Dato (Data Quality)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Normalización de nombres de empresa y direcciones.</li>
                <li>Deduplicación fuzzy: Identificar duplicados no exactos.</li>
                <li>Validación de emails (SMTP check) y teléfonos.</li>
                <li>Manejo de valores nulos y formatos de fecha/moneda.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">2. Modelado y Estructura</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Códigos CNAE y SIC: Entendiendo la actividad económica.</li>
                <li>Jerarquías corporativas: Matriz vs Filial.</li>
                <li>Cruces de bases de datos relacionales (SQL basics).</li>
                <li>Diseño de un Data Warehouse comercial simple.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">3. Enriquecimiento con IA</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Scraping ético de sitios web corporativos.</li>
                <li>Uso de LLMs para categorizar empresas por su "About Us".</li>
                <li>Inferencia de datos: Detectar tecnologías que usan (CMS, CRM).</li>
                <li>Estimación de tamaño y facturación mediante señales externas.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">4. Segmentación Avanzada</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Creación de Clusters de alto valor (TAM, SAM, SOM).</li>
                <li>Filtrado por stack tecnológico (ej: "Empresas con Shopfiy").</li>
                <li>Segmentación geográfica radial y por zonas de influencia.</li>
                <li>Análisis de saturación de mercado.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">5. Inteligencia Comercial</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Detección de "Buying Signals" (Señales de compra).</li>
                <li>Scoring de cuentas (Account Based Marketing).</li>
                <li>Análisis de la competencia y cuota de mercado digital.</li>
                <li>Generación de listados para equipos de ventas.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">6. Visualización y KPIs</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Diseño de Dashboards operativos vs estratégicos.</li>
                <li>Limpia tu Excel: Tablas dinámicas avanzadas y PowerQuery.</li>
                <li>Conexión de datos a herramientas de visualización (Looker/PowerBI).</li>
                <li>Automatización de reportes mensuales.</li>
            </ul>
        </div>
    </div>
</div>

<!-- FAQ Optimized -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Preguntas Frecuentes</h2>
    <div style="display: grid; gap: 20px;">

        <details class="faq-item">
            <summary class="faq-question">¿Necesito saber programar (Python/R)?</summary>
            <div class="faq-answer">
                <p>No es estrictamente obligatorio. El 80% de las tareas de BI comercial pueden resolverse con
                    herramientas No-Code, Excel avanzado/PowerQuery y APIs.</p>
                <p>Sin embargo, en el curso proporcionaremos scripts de Python sencillos y comentados que podrás copiar
                    y pegar para automatizar tareas repetitivas masivas, ahorrándote cientos de horas de trabajo manual.
                </p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿De dónde salen los datos con los que trabajaremos?</summary>
            <div class="faq-answer">
                <p>Usaremos fuentes de Open Data gubernamental y, además, los alumnos tendrán acceso educativo exclusivo
                    a una parte de las APIs de nuestras plataformas <strong>Centraldecomunicacion.es</strong> y
                    <strong>CompaniesData.cloud</strong>.</p>
                <p>Esto significa que trabajarás con registros reales de empresas vivas, no con bases de datos ficticias
                    de "Juguetería Paco" que se usan en otros cursos.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Es legal trabajar con estos datos?</summary>
            <div class="faq-answer">
                <p>Sí, absolutamente, siempre que se respeten las finalidades B2B. Dedicamos un módulo entero a entender
                    el marco legal del Open Data, las Fuentes de Acceso Público y el Interés Legítimo bajo el RGPD para
                    la prospección comercial corporativa, para que operes siempre con total tranquilidad legal.</p>
            </div>
        </details>

    </div>
</div>

<!-- Final CTA -->
<div class="contact-section">
    <h2 style="font-size: 2rem; margin-bottom: 10px;">Deja de intuir, empieza a saber</h2>
    <p style="color: var(--text-secondary); margin-bottom: 30px;">
        Los datos son el petróleo del siglo XXI, pero solo si tienes la refinería.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary">Consultar Próxima Convocatoria</a>
</div>

<?php include '../../../Components/footer.php'; ?>
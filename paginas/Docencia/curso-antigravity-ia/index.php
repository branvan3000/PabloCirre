<?php
/**
 * Curso Antigravity IA
 */

$page_title = "Curso Antigravity IA | Desarrollo Full Stack con IA - Pablo Cirre";
$page_description = "Curso avanzado de desarrollo Full Stack potenciado con IA. De mockup a producción. JavaScript, Python, Despliegue y Automatización. Ya cursado por más de 40 alumnos.";
$page_keywords = "curso antigravity ia, desarrollo web con ia, full stack con inteligencia artificial, curso python avanzado, despliegue aplicaciones";

include '../../../Components/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Antigravity IA: Full Stack Acelerado",
  "description": "Bootcamp intensivo de desarrollo de software asistido por Inteligencia Artificial. Aprende a construir aplicaciones complejas desde la idea hasta el despliegue en producción.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Cirre",
    "sameAs": "https://pablocirre.es"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "46"
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
    "name": "¿Tengo que saber matemáticas avanzadas?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No. Antigravity IA no es un curso de Data Science para crear modelos de redes neuronales desde cero (álgebra lineal, cálculo, etc.). Es un curso de Ingeniería de Software donde usamos la IA como herramienta de productividad extrema para construir productos."
    }
  }, {
    "@type": "Question",
    "name": "¿Usaremos ChatGPT o Claude?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí, intensivamente. Aprenderás a integrar los LLMs más potentes (GPT-4, Claude 3.5 Sonnet) en tu IDE (VS Code) y en tu flujo de trabajo para generar código boilerplate, tests y refactorizaciones en segundos."
    }
  }, {
    "@type": "Question",
    "name": "¿Saldré sabiendo desplegar mi app?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí. Es el talón de aquiles de muchos devs y aquí es una prioridad. Aprenderás a alquilar un VPS Linux, securizarlo, configurar Nginx, SSL y dejar tu aplicación corriendo 24/7 accesible desde cualquier lugar."
    }
  }]
}
</script>

<section class="hero-section" style="padding: 80px 0;">
    <span class="project-tag" style="background: var(--accent-color); margin-bottom: 20px; display: inline-block;">TOP
        VENTAS · 40+ ALUMNOS</span>
    <h1 class="hero-title" style="font-size: 3.5rem;">Antigravity IA:<br>De idea a producción.</h1>
    <p class="hero-subtitle">
        El curso que cambia las reglas. Aprende a concebir, programar y desplegar aplicaciones complejas usando IA como
        copiloto. Desarrollo Full Stack acelerado para la era moderna.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary" style="margin-top: 20px;">Ver Temario
        Completo</a>
</section>

<!-- Audience -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">¿Para quién es este programa?</h2>
    <div class="metrics-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 40px;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">DEVELOPERS</span></div>
            <p>Multiplica tu velocidad x10. Pasa de Junior a Senior entendiendo la arquitectura completa y delegando la
                sintaxis repetitiva a la IA.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">AGENCIAS</span></div>
            <p>Entrega MVPs en semanas, no meses. Reduce costes de desarrollo drásticamente y valida ideas de clientes
                rápido.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">ENTREPRENEURS</span></div>
            <p>Construye tu propio SaaS. Deja de buscar desesperadamente un "CTO técnico" y empieza a crear la versión 1
                de tu producto tú mismo.</p>
        </div>
    </div>
</div>

<!-- Syllabus Extended -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Temario Detallado</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3 class="project-title">1. Diseño y Prototipado</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Del boceto en servilleta al mockup funcional.</li>
                <li>Especificación técnica de requisitos (PRD) asistida por IA.</li>
                <li>Diseño de Bases de Datos Relacionales (DER) optimizado.</li>
                <li>Elección del Stack tecnológico adecuado.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">2. JavaScript Práctico</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>JS Moderno (ES6+) sin frameworks pesados.</li>
                <li>Manipulación del DOM y Eventos en tiempo real.</li>
                <li>Consumo de APIs asíncronas (Fetch, Async/Await).</li>
                <li>Gestión del estado de la aplicación.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">3. Backend con Python</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Creación de APIs RESTful robustas.</li>
                <li>Manejo de rutas, controladores y modelos.</li>
                <li>Autenticación segura (JWT) y gestión de sesiones.</li>
                <li>Scripts de automatización y Web Scraping.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">4. Arquitectura de Sistemas</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Estructura de carpetas mantenible y escalable.</li>
                <li>Variables de entorno (.env) y configuración segura.</li>
                <li>Control de versiones profesional con Git y GitHub.</li>
                <li>Separación de responsabilidades (MVC/Services).</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">5. Despliegue (DevOps)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Contratación y configuración de VPS Linux (Ubuntu).</li>
                <li>Servidores web: Nginx como Reverse Proxy.</li>
                <li>Certificados SSL gratuitos con Certbot (Let's Encrypt).</li>
                <li>PM2 para gestión de procesos en Node/Python.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">6. Producto Final</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Pipeline de CI/CD básico para despliegue automático.</li>
                <li>Documentación técnica del proyecto.</li>
                <li>Testing básico asistido por IA.</li>
                <li>Entrega del MVP funcional.</li>
            </ul>
        </div>
    </div>
</div>

<!-- FAQ Optimized -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Preguntas Frecuentes</h2>
    <div style="display: grid; gap: 20px;">

        <details class="faq-item">
            <summary class="faq-question">¿Tengo que ser un experto en matemáticas?</summary>
            <div class="faq-answer">
                <p>No. Antigravity IA es un curso sobre Ingeniería de Software y desarrollo de producto, no sobre Data
                    Science académico.</p>
                <p>No vamos a deducir fórmulas de retropropagación. Vamos a usar la IA como una herramienta de
                    ingeniería para construir software mejor y más rápido. Necesitas lógica, no cálculo infinitesimal.
                </p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Usaremos herramientas como ChatGPT o Cursor?</summary>
            <div class="faq-answer">
                <p>Sí, intensivamente. Parte fundamental del curso es aprender "Prompt Engineering para
                    Desarrolladores".</p>
                <p>Aprenderás a integrar los LLMs en tu flujo de trabajo para que escriban el código repetitivo, generen
                    tests unitarios y te ayuden a depurar errores complejos en segundos.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Al acabar sabré desplegar mi app en internet?</summary>
            <div class="faq-answer">
                <p>Sí. Es uno de los puntos donde más énfasis ponemos, porque suele ser el punto débil de muchos
                    bootcamps.</p>
                <p>Saldrás sabiendo conectarte por SSH a un servidor remoto, configurarlo, asegurar el firewall y dejar
                    tu aplicación sirviéndose al mundo con su propio dominio https.</p>
            </div>
        </details>

    </div>
</div>

<!-- Final CTA -->
<div class="contact-section">
    <h2 style="font-size: 2rem; margin-bottom: 10px;">Acelera tu carrera dev</h2>
    <p style="color: var(--text-secondary); margin-bottom: 30px;">
        Pasa de escribir líneas de código a construir productos completos.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary">Aplicar al Programa</a>
</div>

<?php include '../../../Components/footer.php'; ?>
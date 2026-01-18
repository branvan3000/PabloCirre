<?php
/**
 * Curso WooCommerce Growth
 */

$page_title = "Curso WooCommerce Growth | E-commerce - Pablo Cirre";
$page_description = "Curso avanzado de WooCommerce. Crea tiendas online operativas, gestiona envíos, pagos y aumenta la conversión. Formación práctica para negocio.";
$page_keywords = "curso woocommerce, crear tienda online, formación ecommerce granada, optimización woocommerce, ventas online";

include '../../../Components/header.php';
?>

<!-- JSON-LD Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "WooCommerce Growth: Tiendas que venden",
  "description": "Formación técnica avanzada en WooCommerce para crear, gestionar y escalar tiendas online rentables.",
  "provider": {
    "@type": "Person",
    "name": "Pablo Cirre",
    "sameAs": "https://pablocirre.es"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "94"
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
    "name": "¿Veremos Dropshipping en el curso?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "La técnica de configuración es la misma. Enseñamos a crear una infraestructura de venta sólida. Si luego decides no tener stock y hacer dropshipping, el sistema te servirá igual, pero nos enfocamos en la calidad técnica de la tienda."
    }
  }, {
    "@type": "Question",
    "name": "¿Es necesario comprar plugins premium?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No es obligatorio para seguir el curso. Enseñaré a implementar la mayoría de funcionalidades con código propio o plugins gratuitos. Sin embargo, para proyectos escalables, recomendaré las mejores soluciones de pago del mercado (como WPML para multiidioma o plugins de suscripciones)."
    }
  }, {
    "@type": "Question",
    "name": "¿Funciona con Elementor o Divi?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sí, WooCommerce es agnóstico al diseño. Sin embargo, en el curso priorizamos el desarrollo nativo o ligero para garantizar la velocidad de carga (WPO), que es un factor crítico de conversión en e-commerce. Los page builders pesados suelen bajar las ventas."
    }
  }]
}
</script>

<section class="hero-section" style="padding: 80px 0;">
    <span class="project-tag"
        style="background: var(--accent-color); margin-bottom: 20px; display: inline-block;">ESPECIALIZACIÓN
        E-COMMERCE</span>
    <h1 class="hero-title" style="font-size: 3.5rem;">WooCommerce Growth:<br>Tiendas que venden.</h1>
    <p class="hero-subtitle">
        Olvídate de configurar "carritos". Aprende a montar infraestructuras de venta completas: catálogo, logística,
        pasarelas de pago y estrategias de conversión (CRO).
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary" style="margin-top: 20px;">Ver Próximas
        Fechas</a>
</section>

<!-- Audience -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">¿Para quién es este programa?</h2>
    <div class="metrics-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 40px;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">ALUMNOS</span></div>
            <p>Especialízate en el servicio más demandado. Todo el mundo quiere vender online, pero pocos saben
                configurarlo bien.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">AGENCIAS</span></div>
            <p>Ofrece e-commerce robusto. Deja de perder clientes porque piensas que "WooCommerce se queda corto" para
                tiendas grandes (es mentira).</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">PYMES</span></div>
            <p>Vende directo. Elimina intermediarios (marketplaces que se quedan un 20%) y toma el control de tu margen
                y tus clientes.</p>
        </div>
    </div>
</div>

<!-- Syllabus Extended -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Temario Detallado</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3 class="project-title">1. Arquitectura de Tienda</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Setup crítico: Endpoints, Permalinks y Moneda.</li>
                <li>Estructura de servidor recomendada para alto tráfico.</li>
                <li>Certificados SSL EV y seguridad transaccional.</li>
                <li>Configuración de impuestos (IVA/IGIC) y reglas geográficas.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">2. Gestión de Catálogo</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Productos Simples, Variables, Agrupados y Virtuales.</li>
                <li>Atributos globales vs locales y taxonomías custom.</li>
                <li>Importación/Exportación masiva (CSV) y gestión de stock.</li>
                <li>Optimización SEO de fichas de producto.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">3. Pagos y Checkout</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Pasarelas: Stripe (API), PayPal, Redsys (Bancos de España).</li>
                <li>Apple Pay y Google Pay para pagos en 1 click (conversión).</li>
                <li>Checkout optimizado: Eliminación de campos innecesarios.</li>
                <li>Gestión de facturación automática y correos transaccionales.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">4. Logística Avanzada</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Zonas de envío y Clases de envío (por peso/tamaño).</li>
                <li>Integración con transportistas (Correos, SEUR, DHL).</li>
                <li>Estrategias de "Envío Gratis" para aumentar el ticket medio.</li>
                <li>Gestión de devoluciones y logística inversa.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">5. Estrategias de Venta (CRO)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Upsells y Cross-sells en carrito y checkout.</li>
                <li>Recuperación de carritos abandonados automatizada.</li>
                <li>Cupones inteligentes y reglas de descuento dinámicas.</li>
                <li>Programas de fidelización y puntos.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">6. Marketing Integrado</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Feed de productos para Google Shopping (Merchant Center).</li>
                <li>Catálogo en Meta (Instagram Shopping / Facebook).</li>
                <li>Tracking avanzado de E-commerce (Data Layer + GA4).</li>
                <li>Email marketing transaccional para post-venta.</li>
            </ul>
        </div>
    </div>
</div>

<!-- FAQ Optimized -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Preguntas Frecuentes</h2>
    <div style="display: grid; gap: 20px;">

        <details class="faq-item">
            <summary class="faq-question">¿Veremos Dropshipping en el curso?</summary>
            <div class="faq-answer">
                <p>La técnica de configuración es la misma, independientemente del modelo de negocio.</p>
                <p>En el curso nos centramos en enseñarte a crear una infraestructura de venta sólida. Si luego decides
                    no tener stock propio y hacer dropshipping manual o automático, el sistema te servirá igual, pero
                    nuestro foco es la calidad técnica de la tienda y la seguridad.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Es necesario comprar plugins premium caros?</summary>
            <div class="faq-answer">
                <p>No es obligatorio para seguir el curso. Enseñaré a implementar la inmensa mayoría de funcionalidades
                    usando el core de WooCommerce, código propio ligero (snippets) y plugins gratuitos del repositorio
                    oficial.</p>
                <p>Sin embargo, soy honesto: para proyectos profesionales escalables, a veces recomendaré las mejores
                    soluciones de pago del mercado, porque el tiempo de desarrollo que ahorran compensa su coste.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿El curso es compatible con Elementor o Divi?</summary>
            <div class="faq-answer">
                <p>Sí, WooCommerce es agnóstico a la capa visual. Puedes usarlo con cualquier builder.</p>
                <p>El problema es el rendimiento. En el curso insistimos mucho en el desarrollo nativo o ligero porque
                    la velocidad de carga (WPO) es el factor técnico número 1 en la tasa de conversión. Los page
                    builders pesados suelen frenar las ventas en móvil, y te explicaremos por qué y cómo mitigarlo.</p>
            </div>
        </details>

    </div>
</div>

<!-- Final CTA -->
<div class="contact-section">
    <h2 style="font-size: 2rem; margin-bottom: 10px;">Abre tu persiana digital</h2>
    <p style="color: var(--text-secondary); margin-bottom: 30px;">
        Aprende a vender online con las mismas herramientas que usan los grandes retailers.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary">Consultar Programa Completo</a>
</div>

<?php include '../../../Components/footer.php'; ?>
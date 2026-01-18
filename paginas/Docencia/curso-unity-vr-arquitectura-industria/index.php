<?php
/**
 * Curso Unity VR Arquitectura
 */

$page_title = "Curso Unity VR para Arquitectura e Industria | Pablo Cirre";
$page_description = "Curso de Realidad Virtual con Unity para arquitectos e ingenieros. Crea paseos virtuales inmersivos, gemelos digitales y simulaciones industriales sin ser programador.";
$page_keywords = "curso unity arquitectura, realidad virtual industria, curso vr granada, visualización arquitectónica, gemelos digitales";

include '../../../Components/header.php';
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Unity VR: Arquitectura e Industria",
  "description": "Formación especializada en creación de experiencias inmersivas 3D para el sector AEC (Arquitectura, Ingeniería y Construcción).",
  "provider": {
    "@type": "Person",
    "name": "Pablo Cirre",
    "sameAs": "https://pablocirre.es"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "33"
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
    "name": "¿Necesito saber modelar en 3D?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Es recomendable tener bases de SketchUp, Rhino, Revit o Blender, ya que Unity es un motor de integración, no de modelado. El flujo de trabajo consiste en traer tus modelos (FBX/OBJ) a Unity para darles vida, luces e interactividad."
    }
  }, {
    "@type": "Question",
    "name": "¿Qué gafas VR necesito?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Para seguir el curso recomendamos Meta Quest (2 o 3) por ser el estándar de calidad/precio de la industria autónoma. No obstante, las prácticas también se pueden visualizar en PC (Desktop mode) si no dispones de visor al principio."
    }
  }, {
    "@type": "Question",
    "name": "¿Es muy difícil programar en C#?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No te asustes. Para este perfil (ArchViz/Simulación) solo necesitamos scripts muy específicos (abrir puertas, cambiar materiales, teletransportarse). Te daré una librería de comportamientos listos para usar sin que tengas que picar código complejo."
    }
  }]
}
</script>

<section class="hero-section" style="padding: 80px 0;">
    <span class="project-tag"
        style="background: var(--accent-color); margin-bottom: 20px; display: inline-block;">INNOVACIÓN</span>
    <h1 class="hero-title" style="font-size: 3.5rem;">Unity VR para<br>Arquitectura e Industria.</h1>
    <p class="hero-subtitle">
        Deja de enseñar planos que nadie entiende. Lleva a tus clientes dentro del edificio antes de poner el primer
        ladrillo. Experiencias inmersivas, formación industrial y ventas.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary" style="margin-top: 20px;">Ver Programa</a>
</section>

<!-- Audience -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">¿Para quién es este programa?</h2>
    <div class="metrics-grid" style="grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 40px;">
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">ARQUITECTOS</span></div>
            <p>Vende el proyecto a la primera. Sustituye los renders estáticos por paseos virtuales donde el cliente
                puede caminar y sentir el espacio.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">INGENIEROS</span></div>
            <p>Gemelos Digitales y PRL. Crea simulaciones de formación de riesgos laborales seguras o visualiza
                maquinaria compleja en funcionamiento.</p>
        </div>
        <div class="data-panel">
            <div class="panel-header"><span class="panel-label">DISEÑADORES</span></div>
            <p>Salto al 3D interactivo. Pasa del diseño estático al diseño de experiencias de usuario espaciales
                (Spatial Computing).</p>
        </div>
    </div>
</div>

<!-- Syllabus Extended -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Temario Detallado</h2>
    <div class="projects-grid">
        <div class="project-card">
            <h3 class="project-title">1. Introducción al Motor Unity</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Interfaz y navegación en el espacio 3D.</li>
                <li>Gestión de Assets y estructura de proyecto ordenada.</li>
                <li>GameObjects, Componentes y Prefabs (la base de todo).</li>
                <li>Importación correcta: FBX, texturas y escalas.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">2. Materiales e Iluminación (HDRP/URP)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Creación de materiales PBR realistas (Metal, Madera, Cristal).</li>
                <li>Iluminación Global (GI): Realtime vs Baked (Bakeado de luces).</li>
                <li>Light Probes y Reflection Probes para realismo.</li>
                <li>Post-procesado: Bloom, Color Grading y Oclusión.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">3. Programación Visual (Scripting)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Fundamentos de C# para no programadores.</li>
                <li>Event System: Hacer que las cosas pasen al hacer clic.</li>
                <li>Triggers: Activar luces o sonidos al entrar en una habitación.</li>
                <li>Animación básica de objetos (puertas, ascensores).</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">4. Realidad Virtual (XR Interaction)</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Configuración de XR Plugin Management.</li>
                <li>Locomoción: Teletransporte vs Movimiento continuo.</li>
                <li>Interacción: Agarrar objetos, abrir cajones, pulsar botones.</li>
                <li>Interfaces de usuario (UI) en el espacio 3D (World Space).</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">5. Optimización</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>El cuello de botella de la VR: FPS y Motion Sickness.</li>
                <li>Occlusion Culling: No renderizar lo que no se ve.</li>
                <li>LODs (Level of Detail) para modelos complejos.</li>
                <li>Profiling: Encontrar qué está fallando.</li>
            </ul>
        </div>
        <div class="project-card">
            <h3 class="project-title">6. Publicación</h3>
            <ul style="list-style: disc; margin-left: 20px; color: var(--text-secondary); line-height: 1.6;">
                <li>Compilación para PC (Windows .exe).</li>
                <li>Compilación para Android (Oculus Quest APK).</li>
                <li>WebGL: Publicar tu paseo virtual en una página web.</li>
            </ul>
        </div>
    </div>
</div>

<!-- FAQ Optimized -->
<div class="about-section" style="margin-bottom: 80px;">
    <h2 class="section-title">Preguntas Frecuentes</h2>
    <div style="display: grid; gap: 20px;">

        <details class="faq-item">
            <summary class="faq-question">¿Necesito saber modelar en 3D (Blender/Revit)?</summary>
            <div class="faq-answer">
                <p>Es muy recomendable traer conocimientos previos de alguna herramienta CAD o de modelado (SketchUp,
                    Rhino, Revit, 3ds Max), ya que Unity es un motor de integración.</p>
                <p>En el curso no enseñamos a modelar muros, sino a importar esos modelos, texturizarlos, iluminarlos y
                    hacerlos interactivos.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Qué gafas de Realidad Virtual necesito?</summary>
            <div class="faq-answer">
                <p>El estándar de la industria actual son las Meta Quest (2 o 3) por su capacidad autónoma y precio.</p>
                <p>Recomendamos tener unas para probar los desarrollos "en real", pero si no dispones de ellas al
                    inicio, gran parte del curso se puede seguir y testear usando el simulador de Unity en la pantalla
                    del PC.</p>
            </div>
        </details>

        <details class="faq-item">
            <summary class="faq-question">¿Es muy difícil la programación en C#?</summary>
            <div class="faq-answer">
                <p>Para el ámbito de Arquitectura e Industria, no. No estamos programando un videojuego complejo con IA
                    enemiga.</p>
                <p>Usaremos scripts muy específicos y reutilizables (abrir puerta, cambiar color, teletransporte) que te
                    proporcionaré listos para usar, explicándote cómo funcionan para que puedas adaptarlos.</p>
            </div>
        </details>

    </div>
</div>

<!-- Final CTA -->
<div class="contact-section">
    <h2 style="font-size: 2rem; margin-bottom: 10px;">El plano ha muerto</h2>
    <p style="color: var(--text-secondary); margin-bottom: 30px;">
        Empieza a vender experiencias, no papel.
    </p>
    <a href="<?php echo BASE_URL; ?>/paginas/Contact/" class="btn-primary">Solicitar Demo y Programa</a>
</div>

<?php include '../../../Components/footer.php'; ?>
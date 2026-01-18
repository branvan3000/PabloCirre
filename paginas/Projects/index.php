<?php
/**
 * Projects - Portfolio de Impacto Institucional y Cultural
 */

$page_title = "Projects - Pablo Cirre";
$page_description = "Trabajo en proyectos digitales donde lo institucional y lo cultural se traducen a producto y comunicación.";

include '../../Components/header.php';

$projects = [
    [
        'id' => 'europubhealth',
        'title' => 'Europubhealth+',
        'desc' => 'Máster europeo en Salud Pública dentro del marco Erasmus Mundus (programa conjunto internacional). Itinerarios y especializaciones con movilidad y doble titulación en un consorcio universitario.',
        'url_official' => 'https://www.europubhealth.org/',
        'tag' => 'ERASMUS MUNDUS'
    ],
    [
        'id' => 'cruzapuentes',
        'title' => 'Cruza Puentes',
        'desc' => 'Programa provincial que conecta formación y empleo en Granada con beca remunerada, duración definida, alta en Seguridad Social y certificado oficial. Enfoque práctico y territorial.',
        'url_official' => 'https://cruzapuentes.com/',
        'tag' => 'GRANADA / EMPLEO'
    ],
    [
        'id' => 'igualdadextremadura',
        'title' => 'Igualdad Extremadura',
        'desc' => 'Marco público para impulsar la igualdad entre mujeres y hombres en Extremadura. Plan 2023–2026 promovido por el Instituto de la Mujer de Extremadura (IMEX), con metodología y enfoque de implementación/seguimiento.',
        'url_official' => 'https://igualdadextremadura.es/',
        'tag' => 'POLÍTICA PÚBLICA'
    ],
    [
        'id' => 'avalonoposiciones',
        'title' => 'Avalon Oposiciones',
        'desc' => 'Plataforma de formación online para oposiciones docentes. Metodología orientada a teoría, práctica y legislación, con recursos y planes formativos.',
        'url_official' => 'https://avalonoposiciones.es/',
        'tag' => 'EDUCACIÓN'
    ],
    [
        'id' => 'asesoriadigital',
        'title' => 'Asesoría Digital',
        'desc' => 'Portal divulgativo de gestión y burocracia: convierte trámites y normativa en guías entendibles para profesionales, emprendedores y estudiantes.',
        'url_official' => 'https://asesoriadigital.info/',
        'tag' => 'DIVULGACIÓN'
    ],
    [
        'id' => 'dehesadebular',
        'title' => 'Dehesa de Búlar',
        'desc' => 'Marca de aceite de oliva virgen extra ecológico que pone el foco en tradición familiar, alta calidad y sostenibilidad del agroecosistema (biodiversidad y gestión del entorno).',
        'url_official' => 'https://www.dehesadebular.com/',
        'tag' => 'AOVE / ECO'
    ],
    [
        'id' => 'deportenutricion',
        'title' => 'Deporte y Nutrición',
        'desc' => 'Contenidos prácticos sobre deporte, entrenamiento y nutrición, orientados a utilidad inmediata: rendimiento, disciplina y bienestar.',
        'url_official' => 'https://deporte-nutricion.net/',
        'tag' => 'BIENESTAR'
    ],
    [
        'id' => 'granadasmile',
        'title' => 'GranadaSmile',
        'desc' => 'Guía turística digital para conocer Granada “barrio a barrio”, con rutas y contenidos de patrimonio, experiencias y planificación de visita.',
        'url_official' => 'https://granadasmile.com/',
        'tag' => 'CULTURA / TURISMO'
    ],
    [
        'id' => 'lacomandarural',
        'title' => 'La Comanda Rural',
        'desc' => 'Proyecto centrado en gastronomía sostenible y producto local, con oferta de menús saludables a domicilio y tienda. También comunica iniciativas vinculadas a salud, alimentación y territorio.',
        'url_official' => 'https://lacomandarural.com/',
        'tag' => 'TERRITORIO'
    ],
    [
        'id' => 'plantabaja',
        'title' => 'Planta Baja',
        'desc' => 'Sala de conciertos en Granada con trayectoria histórica (desde 1989) y agenda activa. Un punto cultural ligado a la escena musical de la ciudad.',
        'url_official' => 'https://plantabaja.club/',
        'tag' => 'MÚSICA / ESCENA'
    ],
    [
        'id' => 'mapamediacion',
        'title' => 'Mapa Mediación Andalucía',
        'desc' => 'Mapa público de recursos de mediación en Andalucía impulsado por el Defensor del Pueblo Andaluz. Recurso vivo, basado en investigación y coordinación con entidades públicas, para difundir y localizar servicios de mediación.',
        'url_official' => 'https://mediacion.defensordelpuebloandaluz.es/mapa-recursos-andalucia/',
        'tag' => 'DPA / PÚBLICO'
    ]
];
?>

<div class="swiss-container tech-grid-bg">
    <div class="container">
        <header class="swiss-header swiss-header-projects">
            <div class="swiss-label">[ ARCHIVE_2024 ]</div>
            <h1 class="swiss-title">Projects</h1>
            <p class="swiss-subtitle-projects">
                Estrategia y diseño para proyectos de impacto institucional y cultural. Programas europeos, portales
                públicos e iniciativas territoriales traducidas a producto digital.
            </p>
        </header>

        <div class="swiss-grid">
            <?php foreach ($projects as $p):
                $img_name = strtolower(str_replace(' ', '', $p['id'])) . "_hero_screenshot.png";
                $img_path = BASE_URL . "/assets/img/projects/" . $img_name;
                ?>
                <div class="swiss-card">
                    <div class="card-thumb">
                        <img src="<?php echo $img_path; ?>" alt="<?php echo $p['title']; ?>"
                            onerror="this.src='https://via.placeholder.com/400x250?text=<?php echo urlencode($p['title']); ?>'">
                    </div>
                    <div class="swiss-card-body">
                        <div class="card-label"><?php echo $p['tag']; ?></div>
                        <h3><?php echo $p['title']; ?></h3>
                        <p><?php echo $p['desc']; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo $p['id']; ?>/" class="btn-swiss-small">Ver Proyecto</a>
                        <a href="<?php echo $p['url_official']; ?>" target="_blank"
                            class="btn-swiss-small secondary">Visitar Web</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include '../../Components/footer.php'; ?>
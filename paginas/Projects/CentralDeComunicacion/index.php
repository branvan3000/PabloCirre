<?php
/**
 * Project: Centraldecomunicacion.es
 */

$project_config = [
    'title' => 'Centraldecomunicacion.es',
    'subtitle' => 'La base de datos B2B líder para el sector turístico en España. Conectando agencias con hoteles a través de arquitectura de datos masiva.',
    'tags' => ['BIG DATA', 'LEAD GENERATION', 'TRAVEL TECH'],
    'metrics' => [
        ['label' => 'Registros', 'value' => '1.4M'],
        ['label' => 'Sector', 'value' => 'Turismo'],
        ['label' => 'Países', 'value' => '15+'],
        ['label' => 'Uptime', 'value' => '99.9%']
    ],
    'description' => '
        <p>Centraldecomunicacion.es nació como respuesta a la necesidad de unificar y normalizar los datos del fragmentado sector turístico español. Lo que comenzó como un scraper básico evolucionó hasta convertirse en la mayor base de datos B2B del sector.</p>
        
        <p>El sistema utiliza una arquitectura de microservicios para recolectar, validar y enriquecer datos de miles de fuentes públicas diariamente. Los algoritmos de limpieza garantizan que la información de contacto (emails, teléfonos, directivos) esté siempre actualizada.</p>

        <h3>Desafíos Técnicos</h3>
        <p>Uno de los mayores retos fue el proceso de deduplicación y normalización de entidades. Un hotel puede aparecer con nombres ligeramente diferentes en Booking, TripAdvisor y su web propia. Desarrollé un algoritmo de "Fuzzy Matching" personalizado que identifica con un 99.5% de precisión si dos registros corresponden a la misma entidad física.</p>
    ',
    'technologies' => ['PHP 8', 'Python', 'MySQL', 'Redis', 'Scrapy', 'React'],
    'gallery' => [], // Add screenshots later if available
    'links' => [
        ['text' => 'Visitar Proyecto', 'url' => 'https://pablocirre.es/paginas/OpenData/centraldecomunicacion/', 'secondary' => false],
        ['text' => 'Ver Documentación', 'url' => 'https://pablocirre.es/paginas/OpenData/', 'secondary' => true]
    ]
];

// Include the shared layout
include dirname(__DIR__) . '/project_layout.php';
?>
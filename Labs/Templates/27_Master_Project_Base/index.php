<?php
/**
 * Master Project Template v1.0
 * Includes: Advanced Lightbox (Img/Video/YT), Standard Nav, Splash Header
 */

$page_title = "Project Title · Master Template";
$page_description = "Description for the project goes here.";
// Adjust path to point to root Components/header.php from Labs/Templates/27_Master_Project_Base/
include '../../../Components/header.php';
?>

<!-- Master Template Styles -->
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
        background: rgba(var(--panel-bg-rgb), 0.8);
        backdrop-filter: blur(10px);
        padding: 10px 20px;
        border-radius: 50px;
        border: 1px solid var(--border-color);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
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

    /* --- LIGHTBOX SYSTEM --- */
    .lightbox {
        display: none;
        position: fixed;
        z-index: 99999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(5px);
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .lightbox.active {
        display: flex;
        opacity: 1;
    }

    .lightbox-container {
        position: relative;
        max-width: 90%;
        max-height: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .lightbox-content {
        max-width: 100%;
        max-height: 90vh;
        box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
        border-radius: 4px;
        object-fit: contain;
    }

    .lightbox-iframe {
        width: 80vw;
        height: 45vw;
        /* 16:9 Aspect Ratio */
        max-width: 1280px;
        max-height: 720px;
        border: none;
        border-radius: 8px;
    }

    .close-lightbox {
        position: absolute;
        top: -50px;
        right: 0;
        color: #fff;
        font-size: 40px;
        font-weight: 300;
        cursor: pointer;
        transition: transform 0.2s, color 0.2s;
        line-height: 1;
    }

    .close-lightbox:hover {
        color: var(--accent-color);
        transform: rotate(90deg);
    }

    /* Mobile Nav Adjustments */
    @media (max-width: 768px) {
        .project-nav-bar {
            top: auto;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: auto;
            justify-content: center;
        }
    }

    /* --- TIMELINE SECTION --- */
    .timeline-container {
        position: relative;
        padding-left: 30px;
        border-left: 2px solid var(--border-color);
        margin: 40px 0 80px 20px;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 40px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -36px;
        top: 5px;
        width: 10px;
        height: 10px;
        background: var(--accent-color);
        border-radius: 50%;
        box-shadow: 0 0 0 4px var(--bg-color);
    }

    .timeline-date {
        font-family: monospace;
        color: var(--text-color);
        opacity: 0.6;
        font-size: 0.85rem;
        margin-bottom: 5px;
    }

    .timeline-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* --- VIDEO GRID --- */
    .video-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 80px;
    }

    .video-card {
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.2s;
        aspect-ratio: 16/9;
        background: #000;
    }

    .video-card:hover {
        transform: scale(1.02);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .video-thumb {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.8;
        transition: opacity 0.2s;
    }

    .video-card:hover .video-thumb {
        opacity: 0.6;
    }

    .play-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .play-icon::after {
        content: '';
        border-style: solid;
        border-width: 10px 0 10px 16px;
        border-color: transparent transparent transparent #fff;
        margin-left: 4px;
    }

    /* --- INFO CARDS --- */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
        margin-bottom: 80px;
    }

    .info-card {
        background: var(--panel-bg);
        border: 1px solid var(--border-color);
        padding: 30px;
        border-radius: 6px;
        transition: transform 0.2s;
    }

    .info-card:hover {
        transform: translateY(-5px);
        border-color: var(--accent-color);
    }

    .info-icon {
        font-size: 2rem;
        margin-bottom: 15px;
        color: var(--accent-color);
    }

    /* --- TECH STACK --- */
    .tech-stack {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 40px;
    }

    .tech-badge {
        background: rgba(128, 128, 128, 0.1);
        border: 1px solid var(--border-color);
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.85rem;
        font-family: monospace;
    }

    /* --- CODE BLOCK --- */
    .code-block {
        background: #1e1e1e;
        color: #d4d4d4;
        padding: 20px;
        border-radius: 6px;
        overflow-x: auto;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 0.9rem;
        border: 1px solid var(--border-color);
        margin-bottom: 80px;
    }

    @keyframes scan {
        0% {
            top: 0%;
            opacity: 0;
        }

        10% {
            opacity: 1;
        }

        90% {
            opacity: 1;
        }

        100% {
            top: 100%;
            opacity: 0;
        }
    }
</style>

<!-- --- NAVIGATION --- -->
<!-- Change href to your desired back location (e.g., /PabloCirre/paginas/OpenData/) -->
<div class="project-nav-bar">
    <a href="/PabloCirre/Labs/" class="nav-back-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
        Back to Labs
    </a>
    <span style="opacity: 0.3;">|</span>
    <a href="#" class="nav-back-btn" style="color: var(--accent-color);">
        Visit Project &nearr;
    </a>
</div>

<!-- --- CONTENT --- -->
<div class="container" style="padding-top: 120px; padding-bottom: 80px;">

    <!-- Hero -->
    <div style="grid-column: 1 / -1; margin-bottom: 60px;">
        <span style="color: var(--accent-color); font-family: monospace;">TEMPLATE v1.0</span>
        <h1 style="font-size: 4rem; margin: 10px 0;">Project Master</h1>
        <p style="font-size: 1.5rem; opacity: 0.7; max-width: 800px;">
            A base template featuring robust lightbox handling for images, self-hosted videos, and YouTube embeds.
        </p>
    </div>

    <!-- Lightbox Triggers Demo -->
    <div
        style="grid-column: 1 / -1; display: flex; gap: 20px; margin-bottom: 60px; padding-bottom: 60px; border-bottom: 1px solid var(--border-color);">

        <!-- Image Trigger -->
        <button onclick="openLightbox('image', '/PabloCirre/assets/images/kaiju_preview.png')" class="btn-primary">
            Test Image
        </button>

        <!-- Video Trigger (Self Hosted) -->
        <!-- Replace 'path/to/video.mp4' with actual file -->
        <button onclick="openLightbox('video', '/PabloCirre/assets/video/demo.mp4')" class="btn-primary">
            Test Video (MP4)
        </button>

        <!-- YouTube Trigger -->
        <!-- Use Embed Link structure -->
        <button onclick="openLightbox('youtube', 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1')"
            class="btn-primary">
            Test YouTube
        </button>
    </div>

    <!-- TECH STACK SECTION -->
    <div style="grid-column: 1 / -1;">
        <h3 style="margin-bottom: 20px; font-family: monospace; opacity: 0.6;">TECHNOLOGY STACK</h3>
        <div class="tech-stack">
            <span class="tech-badge">PHP 8.2</span>
            <span class="tech-badge">Vanilla JS</span>
            <span class="tech-badge">CSS Variables</span>
            <span class="tech-badge">Lightbox API</span>
            <span class="tech-badge">Responsive Grid</span>
        </div>
    </div>

    <!-- FEATURE CARDS SECTION -->
    <div style="grid-column: 1 / -1;">
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">Key Features</h2>
        <div class="info-grid">
            <div class="info-card">
                <div class="info-icon">⚡</div>
                <h3>Blazing Fast</h3>
                <p style="opacity: 0.7;">Optimized performance with zero-dependency vanilla JavaScript and CSS.</p>
            </div>
            <div class="info-card">
                <div class="info-icon">📱</div>
                <h3>Responsive</h3>
                <p style="opacity: 0.7;">Adapts perfectly to mobile, tablet, and ultra-wide screens using Grid.</p>
            </div>
            <div class="info-card">
                <div class="info-icon">🎨</div>
                <h3>Themable</h3>
                <p style="opacity: 0.7;">Built-in dark/light mode support with CSS custom properties.</p>
            </div>
            <div class="info-card">
                <div class="info-icon">📺</div>
                <h3>Media Rich</h3>
                <p style="opacity: 0.7;">Native support for mixed media galleries and video playback.</p>
            </div>
        </div>
    </div>

    <!-- VIDEO SHOWCASE SECTION -->
    <div style="grid-column: 1 / -1;">
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">Video Showcase</h2>
        <div class="video-grid">
            <!-- Video Item 1 (YouTube) -->
            <div class="video-card"
                onclick="openLightbox('youtube', 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1')">
                <img src="/PabloCirre/assets/images/kaiju_preview.png" class="video-thumb" alt="Video Thumb">
                <div class="play-icon"></div>
            </div>
            <!-- Video Item 2 (Local) -->
            <div class="video-card" onclick="openLightbox('video', '/PabloCirre/assets/video/demo.mp4')">
                <div
                    style="width:100%; height:100%; background: #333; display:flex; align-items:center; justify-content:center; color:#666;">
                    NO PREVIEW
                </div>
                <div class="play-icon"></div>
            </div>
            <!-- Video Item 3 -->
            <div class="video-card"
                onclick="openLightbox('youtube', 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1')">
                <img src="/PabloCirre/assets/images/kaiju_preview.png" class="video-thumb" alt="Video Thumb">
                <div class="play-icon"></div>
            </div>
        </div>
    </div>

    <!-- TIMELINE SECTION -->
    <div style="grid-column: 1 / 6;">
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">Project Timeline</h2>
        <div class="timeline-container">
            <div class="timeline-item">
                <div class="timeline-date">2023 - PRESENT</div>
                <div class="timeline-title">Version 2.0 Released</div>
                <p style="opacity: 0.7;">Major overhaul of the UI/UX with new dark mode and performance improvements.
                </p>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">LATE 2022</div>
                <div class="timeline-title">Beta Testing</div>
                <p style="opacity: 0.7;">Closed beta with select partners to refine the core algorithms.</p>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">EARLY 2022</div>
                <div class="timeline-title">Initial Concept</div>
                <p style="opacity: 0.7;">Research and development phase focusing on data structure.</p>
            </div>
        </div>
    </div>

    <!-- API SECTION -->
    <div style="grid-column: 7 / -1;">
        <h2 style="font-size: 2.5rem; margin-bottom: 40px;">Integration</h2>
        <p style="margin-bottom: 20px; opacity: 0.8;">Simple API integration for developers.</p>
        <div class="code-block">
            // Initialize the Lightbox
            const gallery = new MasterLightbox({
            theme: 'dark',
            autoplay: true,
            keyboard: true
            });

            // Trigger manually
            gallery.open('video', 'demo.mp4');</div>
    </div>

</div>

<!-- --- LIGHTBOX SYSTEM --- -->
<div id="lightbox-modal" class="lightbox" onclick="closeLightbox(event)">
    <div class="lightbox-container">
        <span class="close-lightbox" onclick="closeLightbox(event)">&times;</span>

        <!-- Containers for different media types -->
        <img id="lb-image" class="lightbox-content" src="" style="display:none;">
        <video id="lb-video" class="lightbox-content" controls style="display:none;"></video>
        <iframe id="lb-youtube" class="lightbox-iframe" src="" allow="autoplay; encrypted-media" allowfullscreen
            style="display:none;"></iframe>
    </div>
</div>

<script>
    const lightbox = document.getElementById('lightbox-modal');
    const lbImage = document.getElementById('lb-image');
    const lbVideo = document.getElementById('lb-video');
    const lbYoutube = document.getElementById('lb-youtube');

    function openLightbox(type, src) {
        // Reset all
        lbImage.style.display = 'none';
        lbVideo.style.display = 'none';
        lbYoutube.style.display = 'none';

        // Stop any playing video
        lbVideo.pause();
        lbVideo.src = "";
        lbYoutube.src = "";

        if (type === 'image') {
            lbImage.src = src;
            lbImage.style.display = 'block';
        } else if (type === 'video') {
            lbVideo.src = src;
            lbVideo.style.display = 'block';
        } else if (type === 'youtube') {
            lbYoutube.src = src;
            lbYoutube.style.display = 'block';
        }

        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox(e) {
        // Close if clicked on background or close button
        if (e && e.target !== lightbox && !e.target.classList.contains('close-lightbox')) {
            return;
        } // But wait, standard behavior is clicking backdrop closes it. 
        // If content is clicked, do NOT close.
        // My container 'lightbox-container' wraps content. 
        // Actually simpler: check if event target IS the lightbox div (backdrop)

        // Revised close logic if called directly or via event
        if (e) {
            if (e.target.closest('.lightbox-content') || e.target.closest('.lightbox-iframe')) return;
        }

        lightbox.classList.remove('active');
        document.body.style.overflow = 'auto';

        // Cleanup sources to stop playback
        setTimeout(() => {
            lbVideo.pause();
            lbVideo.src = "";
            lbYoutube.src = "";
        }, 300);
    }

    // Close on Escape key
    document.addEventListener('keydown', function (event) {
        if (event.key === "Escape" && lightbox.classList.contains('active')) {
            closeLightbox(null); // Force close
        }
    });
</script>

<?php include '../../../Components/footer.php'; ?>
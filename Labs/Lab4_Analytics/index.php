<?php
/**
 * Lab 004 - TITAN Analytics Dashboard
 * Visualización de datos de Google Analytics
 */

$page_title = "TITAN Analytics - Lab 004";
$page_description = "Dashboard experimental de analítica web. Visualización de métricas de Google Analytics y tráfico en tiempo real.";
$page_keywords = "analytics, dashboard, google analytics, data visualization, pablo cirre";

include '../../Components/header.php';
?>

<style>
    :root {
        --bg-color: #e0e0e0;
        --panel-bg: #d4d4d4;
        --text-color: #333;
        --accent-color: #ff4400;
        --indicator-color: #00ccaa;
        --border-color: #999;
    }

    body {
        background-color: var(--bg-color);
        color: var(--text-color);
    }

    .analytics-container {
        grid-column: 1 / -1;
        padding: 40px;
        max-width: 1400px;
        margin: 0 auto;
        font-family: 'IBM Plex Mono', monospace;
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 40px;
        border-bottom: 2px solid var(--text-color);
        padding-bottom: 20px;
    }

    .dashboard-id {
        font-size: 0.8rem;
        color: var(--accent-color);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
    }

    .dashboard-title {
        font-family: 'IBM Plex Mono', monospace;
        font-size: 2.5rem;
        margin-top: 5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: -1px;
    }

    .console-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
        margin-bottom: 30px;
        background: #bbb;
        padding: 15px;
        border: 2px solid #999;
        box-shadow:
            inset 0 0 20px rgba(0, 0, 0, 0.1),
            0 20px 50px rgba(0, 0, 0, 0.2);
    }

    .panel {
        background: var(--panel-bg);
        border: 1px solid #aaa;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        box-shadow: inset 2px 2px 5px rgba(255, 255, 255, 0.5), inset -2px -2px 5px rgba(0, 0, 0, 0.05);
        min-height: 200px;
    }

    .panel-header {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 1px solid #999;
        padding-bottom: 5px;
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        color: #555;
        font-weight: 600;
    }

    .panel-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .metric-large {
        font-size: 3rem;
        font-weight: 700;
        color: #222;
        font-family: 'IBM Plex Mono', monospace;
        line-height: 1;
    }

    .metric-label {
        font-size: 0.7rem;
        margin-top: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #666;
    }

    .metric-change {
        font-size: 0.8rem;
        margin-top: 5px;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .trend-up {
        color: #008866;
    }

    .trend-down {
        color: var(--accent-color);
    }

    .charts-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 15px;
    }

    .large-panel {
        /* Generic large panel style if needed */
    }

    .live-indicator {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'IBM Plex Mono', monospace;
        font-size: 0.7rem;
        color: var(--accent-color);
        font-weight: 700;
        text-transform: uppercase;
    }

    .light {
        width: 12px;
        height: 12px;
        background: var(--indicator-color);
        border-radius: 50%;
        box-shadow: 0 0 10px var(--indicator-color);
        border: 1px solid #333;
    }

    @media (max-width: 1024px) {
        .console-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .charts-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {
        .console-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="analytics-container">
    <header class="dashboard-header">
        <div>
            <div class="dashboard-id">Ref. CH-60S</div>
            <h1 class="dashboard-title">TITAN / Data Control</h1>
        </div>
        <div class="live-indicator">
            <div class="light"></div>
            SYSTEM ONLINE // G-94NBJV4V0Z
        </div>
    </header>

    <div class="console-grid">
        <div class="panel">
            <div class="panel-header">
                <span>ACTIVE_USERS</span>
                <span>01</span>
            </div>
            <div class="panel-content">
                <div class="metric-large" id="stats-users">0</div>
                <div class="metric-change trend-up">
                    <span>+12%</span>
                </div>
                <div class="metric-label">Daily Average</div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-header">
                <span>TOTAL_SESSIONS</span>
                <span>02</span>
            </div>
            <div class="panel-content">
                <div class="metric-large" id="stats-sessions">0</div>
                <div class="metric-change trend-up">
                    <span>+8%</span>
                </div>
                <div class="metric-label">Qualified Traffic</div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-header">
                <span>BOUNCE_RATE</span>
                <span>03</span>
            </div>
            <div class="panel-content">
                <div class="metric-large" id="stats-bounce">0%</div>
                <div class="metric-change trend-down">
                    <span>-2%</span>
                </div>
                <div class="metric-label">Optimization</div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-header">
                <span>PAGES_PER_SESSION</span>
                <span>04</span>
            </div>
            <div class="panel-content">
                <div class="metric-large" id="stats-pages">0.0</div>
                <div class="metric-change trend-up">
                    <span>+0.4</span>
                </div>
                <div class="metric-label">High Engagement</div>
            </div>
        </div>
    </div>

    <div class="charts-grid">
        <div class="chart-container">
            <div class="chart-title">
                Flujo de Tráfico por Hora
                <span style="font-size: 0.7rem; color: var(--text-tertiary);">DATOS DE CONJUNTO GLOBAL</span>
            </div>
            <canvas id="trafficChart" height="200"></canvas>
        </div>
        <div class="chart-container">
            <div class="chart-title">Distribución de Origen</div>
            <canvas id="sourceChart"></canvas>
            <div style="margin-top: 30px; font-family: 'IBM Plex Mono', monospace; font-size: 0.75rem;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <span style="color: var(--accent-color);">Directo</span>
                    <span>42%</span>
                </div>
                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                    <span style="color: #00ff88;">Orgánico</span>
                    <span>38%</span>
                </div>
                <div style="display: flex; justify-content: space-between;">
                    <span style="color: #ffcc00;">Referral</span>
                    <span>20%</span>
                </div>
            </div>
        </div>
    </div>

    <div class="info-panel">
        <strong>[SISTEMA]</strong> Esta es una visualización experimental basada en la ID <strong>G-94NBJV4V0Z</strong>.
        Para integrar datos 100% reales de tu consola de Google Analytics, el sistema requiere la activación de la
        <strong>API de GA4 Data</strong> y la carga de un archivo de credenciales de Service Account en el servidor.
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Configuration & Simulation
    const stats = {
        users: 142,
        sessions: 189,
        bounce: 34.2,
        pages: 2.8
    };

    function animateValue(id, start, end, duration, decimals = 0) {
        const obj = document.getElementById(id);
        const range = end - start;
        let current = start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / (range || 1)));

        const timer = setInterval(() => {
            current += (range / (duration / 10));
            if ((range > 0 && current >= end) || (range < 0 && current <= end)) {
                current = end;
                clearInterval(timer);
            }
            obj.innerText = decimals > 0 ? current.toFixed(decimals) : Math.floor(current);
        }, 10);
    }

    // Initialize Charts
    function initCharts() {
        const ctxTraffic = document.getElementById('trafficChart').getContext('2d');
        const accentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim();

        new Chart(ctxTraffic, {
            type: 'line',
            data: {
                labels: ['00:00', '04:00', '08:00', '12:00', '16:00', '20:00', 'Ahora'],
                datasets: [{
                    label: 'Visitas',
                    data: [12, 5, 28, 45, 62, 58, 75],
                    borderColor: accentColor,
                    backgroundColor: accentColor + '20',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { display: false },
                    x: {
                        ticks: { color: 'rgba(255,255,255,0.3)', font: { family: 'IBM Plex Mono' } },
                        grid: { display: false }
                    }
                }
            }
        });

        const ctxSource = document.getElementById('sourceChart').getContext('2d');
        new Chart(ctxSource, {
            type: 'doughnut',
            data: {
                labels: ['Directo', 'Orgánico', 'Referral'],
                datasets: [{
                    data: [42, 38, 20],
                    backgroundColor: [accentColor, '#00ff88', '#ffcc00'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                cutout: '80%'
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        initCharts();

        // Kick off animations
        setTimeout(() => {
            animateValue('stats-users', 0, stats.users, 1500);
            animateValue('stats-sessions', 0, stats.sessions, 1500);
            animateValue('stats-bounce', 0, stats.bounce, 1500, 1);
            animateValue('stats-pages', 0, stats.pages, 1500, 1);

            // Add suffix after animation
            setTimeout(() => {
                document.getElementById('stats-bounce').innerText += '%';
            }, 1600);
        }, 500);
    });
</script>

<?php include '../../Components/footer.php'; ?>
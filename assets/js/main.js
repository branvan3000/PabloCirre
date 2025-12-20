// Main JavaScript for Pablo Cirre Portfolio
// Core functionality only - specific modules are in separate files

document.addEventListener('DOMContentLoaded', function () {
    console.log('Pablo Cirre Portfolio - Sistema Iniciado');

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Animate indicator lights
    const lights = document.querySelectorAll('.light.on');
    lights.forEach(light => {
        setInterval(() => {
            light.style.opacity = light.style.opacity === '0.7' ? '1' : '0.7';
        }, 1500);
    });

    // Add hover effect to knobs
    const knobs = document.querySelectorAll('.knob');
    knobs.forEach(knob => {
        knob.addEventListener('mouseenter', function () {
            this.style.transform = 'rotate(45deg)';
        });
        knob.addEventListener('mouseleave', function () {
            this.style.transform = 'rotate(0deg)';
        });
    });

    // Console log with 60s style
    console.log('%c SISTEMA OPERATIVO PABLO CIRRE v2.0 ', 'background: #ff4400; color: #fff; font-family: monospace; padding: 5px;');
    console.log('%c [✓] Big Data Module: ONLINE ', 'color: #00ccaa; font-family: monospace;');
    console.log('%c [✓] Email Verifier: ACTIVE ', 'color: #00ccaa; font-family: monospace;');
    console.log('%c [✓] Game Dev Engine: RUNNING ', 'color: #00ccaa; font-family: monospace;');
});

// Theme Toggle Function
function toggleTheme() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    document.documentElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
}

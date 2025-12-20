/**
 * Mobile Navigation - Hamburger Menu Toggle
 */

function toggleMobileMenu() {
    const hamburger = document.querySelector('.hamburger-btn');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (hamburger && mobileMenu) {
        hamburger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    }
}

// Create mobile menu dynamically from existing nav
document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('.main-header nav');
    if (!nav) return;

    // Create mobile menu container
    const mobileMenu = document.createElement('div');
    mobileMenu.className = 'mobile-menu';

    // Clone nav links
    const links = nav.querySelectorAll('a');
    links.forEach(link => {
        const mobileLink = link.cloneNode(true);
        mobileLink.addEventListener('click', () => {
            toggleMobileMenu();
        });
        mobileMenu.appendChild(mobileLink);
    });

    // Insert after hamburger button
    const hamburger = document.querySelector('.hamburger-btn');
    if (hamburger) {
        hamburger.after(mobileMenu);
    }

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
        const hamburger = document.querySelector('.hamburger-btn');
        const mobileMenu = document.querySelector('.mobile-menu');

        if (hamburger && mobileMenu &&
            !hamburger.contains(e.target) &&
            !mobileMenu.contains(e.target) &&
            mobileMenu.classList.contains('active')) {
            toggleMobileMenu();
        }
    });

    console.log('%c 📱 Mobile Navigation: READY ',
        'background: #ff5533; color: #fff; font-family: monospace; padding: 5px;');
});

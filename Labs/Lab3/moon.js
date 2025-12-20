/**
 * Lab 3 - Blue Moon Logic
 * Controls: Date, Opacity, Size
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('Blue Moon: Initialized.');

    // Elements
    const timeSlider = document.getElementById('time-slider');
    const knob = document.getElementById('time-knob');
    const dateReadout = document.getElementById('date-readout');

    const opacitySlider = document.getElementById('opacity-slider');
    const opacityReadout = document.getElementById('opacity-readout');

    const sizeSlider = document.getElementById('size-slider');
    const sizeReadout = document.getElementById('size-readout');

    const shadowCircle = document.getElementById('shadow-circle');
    const moonBody = document.getElementById('moon-body');
    const moonWrapper = document.getElementById('moon-wrapper');

    // Date range: Today to +1 Year
    const today = new Date();
    const startDate = new Date(today.getTime());
    const oneYearLater = new Date(startDate);
    oneYearLater.setFullYear(startDate.getFullYear() + 1);
    const totalDays = Math.floor((oneYearLater - startDate) / (1000 * 60 * 60 * 24));

    // Initialize time slider
    if (timeSlider) {
        timeSlider.min = 0;
        timeSlider.max = totalDays;
        timeSlider.value = 0;
    }

    // --- OPACITY ---
    function updateOpacity(value) {
        const opacity = value / 100; // 1-10 becomes 0.01-0.10
        if (moonBody) {
            moonBody.style.fill = `rgba(200, 220, 255, ${opacity})`;
        }
        if (opacityReadout) {
            opacityReadout.textContent = `${value}%`;
        }
    }

    // --- SIZE ---
    function updateSize(value) {
        if (moonWrapper) {
            moonWrapper.style.width = `${value}px`;
            moonWrapper.style.height = `${value}px`;
        }
        if (sizeReadout) {
            sizeReadout.textContent = `${value}px`;
        }
    }

    // --- PHASE ---
    function updatePhase(date) {
        const d = new Date(date.getTime());
        const knownNewMoon = new Date('2000-01-06 18:14:00');
        const cycle = 29.53058867;

        const diffTime = d.getTime() - knownNewMoon.getTime();
        const diffDays = diffTime / (1000 * 3600 * 24);
        const cycleProgress = (diffDays % cycle) / cycle;

        let currentCx;
        if (cycleProgress < 0.5) {
            const progress = cycleProgress * 2;
            currentCx = 500 - (progress * 900);
        } else {
            const progress = (cycleProgress - 0.5) * 2;
            currentCx = 1400 - (progress * 900);
        }

        if (shadowCircle) {
            shadowCircle.setAttribute('cx', currentCx);
        }
    }

    // --- DATE ---
    function updateDate(daysFromStart) {
        const resultDate = new Date(startDate);
        resultDate.setDate(startDate.getDate() + parseInt(daysFromStart));

        const options = { year: 'numeric', month: 'short', day: 'numeric' };
        if (dateReadout) {
            dateReadout.textContent = resultDate.toLocaleDateString('en-US', options).toUpperCase();
        }

        const percent = (daysFromStart / totalDays) * 100;
        if (knob) {
            knob.style.left = `${percent}%`;
        }

        updatePhase(resultDate);
    }

    // --- EVENT LISTENERS ---
    if (timeSlider) {
        timeSlider.addEventListener('input', (e) => updateDate(e.target.value));
    }

    if (opacitySlider) {
        opacitySlider.addEventListener('input', (e) => updateOpacity(parseInt(e.target.value)));
    }

    if (sizeSlider) {
        sizeSlider.addEventListener('input', (e) => updateSize(parseInt(e.target.value)));
    }

    // --- INITIAL RENDER ---
    updateDate(0);
    updateOpacity(5);
    updateSize(800);
});

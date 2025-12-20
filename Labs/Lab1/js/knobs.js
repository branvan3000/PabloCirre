// Musical Knobs Logic - Web Audio API

// Audio Context Setup
let audioContext = null;

function initAudioContext() {
    if (!audioContext) {
        audioContext = new (window.AudioContext || window.webkitAudioContext)();
    }
    return audioContext;
}

function playNoteWithEcho(frequency, duration = 0.8) {
    const ctx = initAudioContext();
    const now = ctx.currentTime;

    // Oscillator
    const oscillator = ctx.createOscillator();
    oscillator.type = 'sine';
    oscillator.frequency.setValueAtTime(frequency, now);

    // Gain (Envelope)
    const gainNode = ctx.createGain();
    gainNode.gain.setValueAtTime(0, now);
    gainNode.gain.linearRampToValueAtTime(0.3, now + 0.01);
    gainNode.gain.exponentialRampToValueAtTime(0.2, now + 0.1);
    gainNode.gain.setValueAtTime(0.2, now + duration - 0.1);
    gainNode.gain.exponentialRampToValueAtTime(0.001, now + duration);

    // Delay (Echo)
    const delayNode = ctx.createDelay();
    delayNode.delayTime.value = 0.3;

    const delayGain = ctx.createGain();
    delayGain.gain.value = 0.5;

    const feedbackGain = ctx.createGain();
    feedbackGain.gain.value = 0.4;

    // Filter
    const filter = ctx.createBiquadFilter();
    filter.type = 'lowpass';
    filter.frequency.value = 2000;

    // Connections
    oscillator.connect(gainNode);
    gainNode.connect(filter);
    filter.connect(ctx.destination);

    filter.connect(delayNode);
    delayNode.connect(delayGain);
    delayGain.connect(ctx.destination);

    delayNode.connect(feedbackGain);
    feedbackGain.connect(delayNode);

    // Play
    oscillator.start(now);
    oscillator.stop(now + duration + 1);
}

// Play 60s Sci-Fi Switch Sound
function playSwitchSound() {
    const ctx = initAudioContext();
    const now = ctx.currentTime;

    // Create a square wave for a retro "beep"
    const oscillator = ctx.createOscillator();
    oscillator.type = 'square';
    oscillator.frequency.setValueAtTime(800, now);
    oscillator.frequency.exponentialRampToValueAtTime(300, now + 0.1);

    // Gain for quick decay
    const gainNode = ctx.createGain();
    gainNode.gain.setValueAtTime(0.1, now);
    gainNode.gain.exponentialRampToValueAtTime(0.001, now + 0.15);

    // Filter for "lo-fi" effect
    const filter = ctx.createBiquadFilter();
    filter.type = 'lowpass';
    filter.frequency.value = 1500;

    oscillator.connect(gainNode);
    gainNode.connect(filter);
    filter.connect(ctx.destination);

    oscillator.start(now);
    oscillator.stop(now + 0.2);
}

// Interaction
document.addEventListener('DOMContentLoaded', function () {
    // Musical Knobs Logic
    const knobs = document.querySelectorAll('.musical-knob');
    if (knobs.length > 0) {
        knobs.forEach(knob => {
            knob.addEventListener('click', function () {
                const freq = parseFloat(this.dataset.frequency);

                // Visual feedback
                this.classList.add('active');
                setTimeout(() => this.classList.remove('active'), 600);

                // Audio feedback
                playNoteWithEcho(freq);
            });
        });
    }

    // System Status Switch Logic
    const switches = document.querySelectorAll('.switch');
    const statusTextDetails = document.getElementById('system-status-text');
    const statusStates = ['ÓPTIMO', 'A FULL', 'REGULINCHI'];
    let currentStateIndex = 0;

    if (switches.length > 0) {
        switches.forEach(sw => {
            sw.addEventListener('click', function () {
                // Visual Toggle
                this.classList.toggle('active');

                // Play Sound
                playSwitchSound();

                // Update Status Text
                if (statusTextDetails) {
                    currentStateIndex = (currentStateIndex + 1) % statusStates.length;
                    statusTextDetails.innerText = statusStates[currentStateIndex];

                    // Optional color change for states
                    if (statusStates[currentStateIndex] === 'REGULINCHI') document.documentElement.style.setProperty('--indicator-color', '#ffaa00');
                    else if (statusStates[currentStateIndex] === 'A FULL') document.documentElement.style.setProperty('--indicator-color', '#ff3333');
                    else document.documentElement.style.setProperty('--indicator-color', '#00ffcc');
                }
            });
        });
    }
});

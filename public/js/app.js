// Simple Particle Background for Hero Section
document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('hero-bg');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let w, h, particles;

    function resize() {
        w = canvas.width = window.innerWidth;
        h = canvas.height = document.querySelector('.hero-section').offsetHeight || 440;
    }

    function initParticles() {
        particles = [];
        for (let i = 0; i < 60; i++) {
            particles.push({
                x: Math.random() * w,
                y: Math.random() * h,
                r: Math.random() * 2.7 + 1.5,
                d: Math.random() * 1.7 + 0.7,
                vx: (Math.random() - 0.5) * 0.6,
                vy: (Math.random() - 0.3) * 0.3
            });
        }
    }

    function drawParticles() {
        ctx.clearRect(0, 0, w, h);
        for (let p of particles) {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, false);
            ctx.fillStyle = "rgba(21, 87, 190, 0.17)";
            ctx.shadowColor = "#1557be";
            ctx.shadowBlur = 12;
            ctx.fill();
            ctx.closePath();
        }
    }

    function moveParticles() {
        for (let p of particles) {
            p.x += p.vx; p.y += p.vy;
            if (p.x < 0 || p.x > w) p.vx *= -1;
            if (p.y < 0 || p.y > h) p.vy *= -1;
        }
    }

    function animate() {
        drawParticles();
        moveParticles();
        requestAnimationFrame(animate);
    }

    function setup() {
        resize();
        initParticles();
        animate();
    }

    window.addEventListener('resize', () => { resize(); initParticles(); });
    setup();
});

// Particle Effect for Hero Section
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
        for (let i = 0; i < 66; i++) {
            particles.push({
                x: Math.random() * w,
                y: Math.random() * h,
                r: Math.random() * 2.7 + 1.3,
                vx: (Math.random() - 0.5) * 0.45,
                vy: (Math.random() - 0.3) * 0.25
            });
        }
    }

    function drawParticles() {
        ctx.clearRect(0, 0, w, h);
        for (let p of particles) {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, false);
            ctx.fillStyle = "rgba(37, 182, 226, 0.14)";
            ctx.shadowColor = "#25b6e2";
            ctx.shadowBlur = 10;
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

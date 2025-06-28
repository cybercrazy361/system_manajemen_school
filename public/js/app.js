// Particle Effect
document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById('hero-bg');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let w, h, particles;
        function resize() {
            w = canvas.width = window.innerWidth;
            h = canvas.height = document.querySelector('.hero-section').offsetHeight || 500;
        }
        function initParticles() {
            particles = [];
            for (let i = 0; i < 80; i++) {
                particles.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    r: Math.random() * 2.5 + 1.5,
                    vx: (Math.random() - 0.5) * 0.7,
                    vy: (Math.random() - 0.4) * 0.25
                });
            }
        }
        function drawParticles() {
            ctx.clearRect(0, 0, w, h);
            for (let p of particles) {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, false);
                ctx.fillStyle = "rgba(37, 182, 226, 0.17)";
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
            resize(); initParticles(); animate();
        }
        window.addEventListener('resize', () => { resize(); initParticles(); });
        setup();
    }

    // WOW FadeIn Section Animation
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top < window.innerHeight - 80 &&
            rect.bottom > 100
        );
    }
    function showOnScroll() {
        document.querySelectorAll('.wow-fadein, .wow-fadein-up, .section').forEach(el => {
            if (isInViewport(el)) el.classList.add('in-view');
        });
    }
    showOnScroll();
    window.addEventListener('scroll', showOnScroll);
    window.addEventListener('resize', showOnScroll);

    // Navbar scroll shadow effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) navbar.classList.add('scrolled');
        else navbar.classList.remove('scrolled');
    });
});

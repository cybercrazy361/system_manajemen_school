// Hamburger menu toggle (responsive)
document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    menuToggle?.addEventListener('change', function() {
        if (this.checked) {
            navLinks.style.display = 'flex';
        } else {
            navLinks.style.display = '';
        }
    });

    // Smooth scroll
    document.querySelectorAll('.nav-links a, .cta-btn').forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href && href.startsWith('#')) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 65,
                        behavior: 'smooth'
                    });
                }
                if (window.innerWidth < 769) {
                    menuToggle.checked = false;
                    navLinks.style.display = '';
                }
            }
        });
    });

    // Fade in section on scroll
    const sections = document.querySelectorAll('.section');
    const fadeIn = () => {
        const scrollY = window.scrollY + window.innerHeight;
        sections.forEach(sec => {
            if (scrollY > sec.offsetTop + 70) {
                sec.style.opacity = 1;
                sec.style.transform = "translateY(0px)";
                sec.style.transition = "all .7s";
            }
        });
    };
    sections.forEach(sec => {
        sec.style.opacity = 0;
        sec.style.transform = "translateY(40px)";
    });
    window.addEventListener('scroll', fadeIn);
    fadeIn();
});

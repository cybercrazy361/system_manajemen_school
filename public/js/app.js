// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Simple animation on scroll
window.addEventListener('scroll', () => {
    document.querySelectorAll('.section').forEach(sec => {
        const position = sec.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;

        if (position < screenPosition) {
            sec.style.opacity = '1';
            sec.style.transform = 'translateY(0)';
            sec.style.transition = 'all 0.8s ease';
        } else {
            sec.style.opacity = '0';
            sec.style.transform = 'translateY(50px)';
        }
    });
});

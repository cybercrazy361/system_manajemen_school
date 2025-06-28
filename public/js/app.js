document.addEventListener('DOMContentLoaded', () => {
    // Slider function for prestasi and testimoni
    function setupSlider(selector, interval = 3500) {
        const slider = document.querySelector(selector);
        if (!slider) return;

        let slides = Array.from(slider.children);
        let currentIndex = 0;

        slides.forEach((slide, i) => {
            slide.style.position = 'absolute';
            slide.style.top = 0;
            slide.style.left = 0;
            slide.style.width = '100%';
            slide.style.opacity = i === 0 ? '1' : '0';
            slide.style.transition = 'opacity 0.5s ease';
        });

        setInterval(() => {
            slides[currentIndex].style.opacity = '0';
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].style.opacity = '1';
        }, interval);
    }

    setupSlider('.prestasi-slider');
    setupSlider('.testimoni-slider');
});

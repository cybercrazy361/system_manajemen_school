const canvas = document.getElementById('hero-bg');
const ctx = canvas.getContext('2d');
let particlesArray;

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

window.addEventListener('resize', function() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    init();
});

class Particle {
    constructor(x, y, directionX, directionY, size, color){
        this.x = x;
        this.y = y;
        this.directionX = directionX;
        this.directionY = directionY;
        this.size = size;
        this.color = color;
    }

    draw(){
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
        ctx.fillStyle = this.color;
        ctx.fill();
    }

    update(){
        if(this.x + this.size > canvas.width || this.x - this.size < 0){
            this.directionX = -this.directionX;
        }
        if(this.y + this.size > canvas.height || this.y - this.size < 0){
            this.directionY = -this.directionY;
        }

        this.x += this.directionX;
        this.y += this.directionY;

        this.draw();
    }
}

function init(){
    particlesArray = [];
    let numberOfParticles = (canvas.width * canvas.height) / 9000;

    for(let i = 0; i < numberOfParticles; i++){
        let size = (Math.random() * 3) + 1;
        let x = Math.random() * (canvas.width - size * 2) + size;
        let y = Math.random() * (canvas.height - size * 2) + size;
        let directionX = (Math.random() * 1) - 0.5;
        let directionY = (Math.random() * 1) - 0.5;
        let color = 'rgba(255,255,255,0.8)';

        particlesArray.push(new Particle(x, y, directionX, directionY, size, color));
    }
}

function animate(){
    requestAnimationFrame(animate);
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for(let i = 0; i < particlesArray.length; i++){
        particlesArray[i].update();
    }
}

init();
animate();

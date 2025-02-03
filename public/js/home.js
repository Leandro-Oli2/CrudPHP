let currentIndex = 1; // Começa no primeiro card visível
const cards = document.querySelectorAll('.carousel-card');
const totalCards = cards.length;
const carousel = document.querySelector('.carousel');

function moveCarousel(direction) {
    currentIndex += direction;

    // Se o índice ultrapassar o total de cards, reinicie
    if (currentIndex >= totalCards - 1) {
        carousel.style.transition = 'none'; // Desativa a transição
        currentIndex = 1; // Volta para o primeiro card visível
        carousel.style.transform = `translateX(-${currentIndex * (100 / (totalCards - 2))}%)`; // Ajusta a posição
    } else if (currentIndex <= 0) {
        carousel.style.transition = 'none'; // Desativa a transição
        currentIndex = totalCards - 2; // Vai para o último card visível
        carousel.style.transform = `translateX(-${currentIndex * (100 / (totalCards - 2))}%)`; // Ajusta a posição
    } else {
        carousel.style.transition = 'transform 0.5s ease'; // Ativa a transição
    }

    const offset = -currentIndex * (100 / (totalCards - 2)); // Move o carrossel para a posição certa
    carousel.style.transform = `translateX(${offset}%)`;
}

// Função para iniciar o carrossel automático
function startCarousel() {
    setInterval(() => {
        moveCarousel(1);
    }, 3000); // Muda a cada 3 segundos
}

window.onload = () => {
    startCarousel();
    moveCarousel(0); // Inicializa a posição do carrossel
};
let images = [
    "public/assets/img/burgui1.png",
    "public/assets/img/burgui2.png",
    "public/assets/img/burgui3.png"
];

function rotateCarousel(direction) {
    let leftImage = document.getElementById("leftImage");
    let currentImage = document.getElementById("currentImage");
    let rightImage = document.getElementById("rightImage");

    if (direction === 'right') {
        // Roda para a direita: a direita vai para o meio, o meio vai para a esquerda, a esquerda vai para a direita
        let tempSrc = leftImage.src;
        leftImage.src = currentImage.src;
        currentImage.src = rightImage.src;
        rightImage.src = tempSrc;
    } else if (direction === 'left') {
        // Roda para a esquerda: a esquerda vai para o meio, o meio vai para a direita, a direita vai para a esquerda
        let tempSrc = rightImage.src;
        rightImage.src = currentImage.src;
        currentImage.src = leftImage.src;
        leftImage.src = tempSrc;
    }
}

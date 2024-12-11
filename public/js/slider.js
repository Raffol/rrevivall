let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.imgslide');
    if (index >= slides.length) {
        currentSlide = 0; // Вернуться к первому слайду
    }
    if (index < 0) {
        currentSlide = slides.length - 1; // Переход к последнему слайду
    }
    document.querySelector('.imgslider').style.transform = `translateX(-${currentSlide * 100}%)`;
    // alert(showSlide);
}

function nextSlide() {
    currentSlide++;
    showSlide(currentSlide);
    // alert(nextSlide);
}

function prevSlide() {
    currentSlide--;
    showSlide(currentSlide);
    // alert(prevSlide);
}

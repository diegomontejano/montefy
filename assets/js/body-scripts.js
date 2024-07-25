// carousel
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.montefy-carousel-slider');
    const prevButton = document.querySelector('[aria-label="voltar slide"]');
    const nextButton = document.querySelector('[aria-label="passar slide"]');
    const slides = Array.from(track.children);
    let slideWidth = slides[0].getBoundingClientRect().width;

    let direction;

    const setSlidePosition = (slide, index) => {
        slide.style.left = slideWidth * index + 'px';
    };

    slides.forEach(setSlidePosition);

    nextButton.addEventListener('click', () => {
        direction = -1;
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = 'translateX(-' + slideWidth + 'px)';
    });

    prevButton.addEventListener('click', () => {
        direction = 1;
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = 'translateX(' + slideWidth + 'px)';
    });

    track.addEventListener('transitionend', function () {
        track.style.transition = 'none';
        if (direction === 1) {
            track.appendChild(track.firstElementChild);
        } else if (direction === -1) {
            track.prepend(track.lastElementChild);
        }
        track.style.transform = 'translateX(0)';
        setTimeout(function () {
            track.style.transition = 'transform 0.5s ease-in-out';
        });
    });

    window.addEventListener('resize', () => {
        slideWidth = slides[0].getBoundingClientRect().width;
        slides.forEach(setSlidePosition);
    });
});

// script.js
document.addEventListener('DOMContentLoaded', function() {
    const track = document.querySelector('.carousel-track');
    const articles = Array.from(track.children);
    const nextButton = document.querySelector('.next');
    const prevButton = document.querySelector('.prev');
    const articleWidth = articles[0].getBoundingClientRect().width;

    let currentIndex = 0;

    const moveToArticle = (index) => {
        track.style.transform = 'translateX(' + (-articleWidth * index) + 'px)';
        currentIndex = index;
    };

    nextButton.addEventListener('click', () => {
        if (currentIndex === articles.length - 1) {
            moveToArticle(0);
        } else {
            moveToArticle(currentIndex + 1);
        }
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex === 0) {
            moveToArticle(articles.length - 1);
        } else {
            moveToArticle(currentIndex - 1);
        }
    });
});

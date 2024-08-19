document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});

const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('touchstart', function () {
            cards.forEach(c => c.classList.remove('active')); // Retirer la classe active des autres cartes
            card.classList.add('active'); // Ajouter la classe active à la carte touchée
        });
    });

    document.addEventListener('touchstart', function (event) {
        if (!event.target.closest('.card')) {
            cards.forEach(card => card.classList.remove('active')); // Retirer la classe active si on touche en dehors d'une carte
        }
    });



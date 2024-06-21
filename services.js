
document.querySelector('.btntrain').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-train');
    liste.classList.toggle('liste-visible-train');
});

document.querySelector('.btnairedejeu').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-jeu');
    liste.classList.toggle('liste-visible-jeu');
});

document.querySelector('.btnvisite').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-visite');
    liste.classList.toggle('liste-visible-visite');
});
document.querySelector('.btnvisite').addEventListener('click', function() {
    const image = document.getElementById('plan');
    image.classList.toggle('animate');
});
document.querySelector('.title-aire').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-jeu');
    liste.classList.toggle('liste-visible-jeu');
});

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});


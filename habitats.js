
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });

    const toggleButton = document.getElementById('toggleButton');
    const form = document.getElementById('habitatForm');
    const listeCachee = form.querySelector('.liste-cachee');

    // Affiche ou cache la liste cachée au clic
    toggleButton.addEventListener('click', () => {
        listeCachee.classList.toggle('liste-visible');
        // Optionnel : Soumettre le formulaire après un court délai pour permettre l'affichage
        setTimeout(() => {
            form.submit();
        }, 1);
    });
    
    document.querySelector('.savane').addEventListener('click', function() {
        const liste = document.querySelector('.liste-cachee-deux');
        liste.classList.toggle('liste-visible-deux');
        enregistrerClic('savane');
    });
    
    document.querySelector('.foret-montagneuse').addEventListener('click', function() {
        const liste = document.querySelector('.liste-cachee-trois');
        liste.classList.toggle('liste-visible-trois');
        enregistrerClic('foret-montagneuse');
    });
    
    document.querySelector('.antarctique').addEventListener('click', function() {
        const liste = document.querySelector('.liste-cachee-quatre');
        liste.classList.toggle('liste-visible-quatre');
        enregistrerClic('antarctique');
    });
});
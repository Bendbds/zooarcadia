document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const displayElement = document.getElementById('clics-display');

    // Liste des habitats que vous avez sur votre page habitats.html
    const habitats = [
        'foret',
        'savane',
        'foret-montagneuse',
        'antarctique'
    ];

    // Fonction pour mettre à jour l'affichage des clics
    const updateDisplay = () => {
        const html = habitats.map(habitat => {
            const count = localStorage.getItem(`count_${habitat}`) || 0;
            return `<p>La ${habitat.replace('-', ' ')} a été cliquée ${count} fois</p>`;
        }).join('');
        
        displayElement.innerHTML = html;
    };

    // Initialisation de l'affichage
    updateDisplay();
});

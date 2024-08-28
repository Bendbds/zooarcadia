document.addEventListener('DOMContentLoaded', () => {
    // Sélection des éléments du DOM
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');
    const displayElement = document.getElementById('clics-display');
    const resetButton = document.getElementById('reset-button');

    // Fonction pour mettre à jour l'affichage des clics
    const updateDisplay = (data) => {
        let html = data.map(item => {
            return `<p>L'habitat ${item.habitat} a été cliqué ${item.clicks} fois</p>`;
        }).join('');
        
        displayElement.innerHTML = html;
    };

    // Fonction pour récupérer les données de clics
    const fetchClicksData = () => {
        fetch('habitats.php')
            .then(response => response.json())
            .then(data => {
                updateDisplay(data);
            })
            .catch(error => {
                displayElement.innerHTML = '<p>Erreur lors de la récupération des données de clics.</p>';
                console.error('Error fetching clicks data:', error);
            });
    };

    // Mettre à jour l'affichage des clics lorsque la page se charge
    fetchClicksData();

    // Ajouter l'événement pour le bouton de menu
    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});

// Vérification de la longueur du mot de passe
document.getElementById("bouton").addEventListener('click', function() {
    const password = document.getElementById("motdepasse");
    if (password.value.length < 8) {
        alert("Votre mot de passe doit au moins faire 8 caractères");
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});

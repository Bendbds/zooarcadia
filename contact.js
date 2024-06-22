document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("bouton").addEventListener("click", function() {
        let nom = document.getElementById("nom").value;
        let mail = document.getElementById("mail").value;
        let ameliorer = document.getElementById("ameliorer").value;

        let nomRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s'-]{1,30}$/;
        let mailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let ameliorerRegex = /^.{10,}$/;  // Minimum 10 caracteres

        if (nom === "" || mail === "" || ameliorer === "") {
            alert("Tous les champs doivent être remplis.");
        } else if (!nom.match(nomRegex)) {
            alert("Le nom contient des caractères invalides.");
        } else if (!mail.match(mailRegex)) {
            alert("L'adresse mail n'est pas valide.");
        } else if (!ameliorer.match(ameliorerRegex)) {
            alert("Le commentaire doit contenir au moins 10 caractères.");
        } else {
            document.getElementById("formulaire").submit();
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("bouton").addEventListener("click", function() {
        let pseudo = document.getElementById("pseudo").value;
        let ameliorer = document.getElementById("ameliorer").value;

        // Regex
        let pseudoRegex = /^[A-Za-z0-9 _-]{1,30}$/;
        let ameliorerRegex = /^.{10,}$/;  // Minimum 10 caracteres

        if (pseudo === "" || ameliorer === "") {
            alert("Tous les champs doivent être remplis.");
        } else if (!pseudo.match(pseudoRegex)) {
            alert("Le pseudo contient des caractères invalides.");
        } else if (!ameliorer.match(ameliorerRegex)) {
            alert("Le commentaire doit contenir au moins 10 caractères.");
        } else {
            document.getElementById("formulaire").submit();
        }
    });
});

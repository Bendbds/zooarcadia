document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });

    document.getElementById("bouton").addEventListener("click", function() {
        let userId = document.getElementById("identifiant").value;
        let motdepasse = document.getElementById("motdepasse").value;

        // Validation regex pour user_id si nécessaire
        let userIdRegex = /^[a-zA-Z0-9_]{3,}$/;  // Minimum 3 caractères, peut contenir lettres, chiffres, underscore
        let motdepasseRegex = /^.{8,}$/;  // Minimum 8 caractères

        if (userId === "" || motdepasse === "") {
            alert("Tous les champs doivent être remplis.");
        } else if (!userId.match(userIdRegex)) {
            alert("L'identifiant doit contenir au moins 3 caractères, et peut contenir des lettres, chiffres et underscores.");
        } else if (!motdepasse.match(motdepasseRegex)) {
            alert("Le mot de passe doit contenir au moins 8 caractères.");
        } else {
            document.getElementById("formulaire").submit();
        }
    });
});

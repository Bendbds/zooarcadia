
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
    document.getElementById("bouton").addEventListener("click", function() {
        let mail = document.getElementById("mail").value;
        let motdepasse = document.getElementById("motdepasse").value;


        let mailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let motdepasseRegex = /^.{8,}$/;  // Minimum 8 caracteres

        if (mail === "" || motdepasse === "") {
            alert("Tous les champs doivent être remplis.");
        } else if (!mail.match(mailRegex)) {
            alert("L'adresse mail n'est pas valide.");
        } else if (!motdepasse.match(motdepasseRegex)) {
            alert("Le mot de passe doit contenir au moins 8 caractères.");
        } else {
            document.getElementById("formulaire").submit();
        }
    });
});


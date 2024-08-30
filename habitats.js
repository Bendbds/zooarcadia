document.addEventListener("DOMContentLoaded", () => {
  const menuButton = document.querySelector(".Menu");
  const headerNav = document.querySelector(".Header");

  menuButton.addEventListener("click", () => {
    headerNav.classList.toggle("active");
  });

  // Fonction pour gérer l'affichage du contenu lors du clic
  function toggleListe(buttonClass, listeClass) {
    document.querySelector(buttonClass).addEventListener("click", function (e) {
      e.preventDefault(); // Empêche le comportement par défaut du bouton
      const liste = document.querySelector(listeClass);
      const isVisible = liste.classList.contains("liste-visible"); // Vérifie si c'est déjà visible

      if (!isVisible) {
        // Soumission du formulaire via AJAX si le contenu n'est pas déjà visible
        const form = this.closest("form");
        const formData = new FormData(form);

        fetch(form.action, {
          method: form.method,
          body: formData,
        })
          .then((response) => response.text())
          .then((data) => {
            // Vous pouvez ajouter ici du code pour manipuler le DOM ou afficher un message de succès
            console.log("Formulaire soumis avec succès");
          })
          .catch((error) => {
            console.error("Erreur:", error);
          });
      }

      // Toggle de la visibilité
      liste.classList.toggle("liste-visible");
    });
  }

  // Initialiser les boutons avec leurs listes correspondantes
  toggleListe(".foret", ".liste-cachee");
  toggleListe(".savane", ".liste-cachee-deux");
  toggleListe(".foret-montagneuse", ".liste-cachee-trois");
  toggleListe(".antarctique", ".liste-cachee-quatre");
});

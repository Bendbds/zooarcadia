// veterinaire.js

document.getElementById('add-animal-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const name_species = document.getElementById('name_species').value;
    const health_status = document.getElementById('health_status').value;
    const checkup_date = document.getElementById('checkup_date').value;
    
    const response = await fetch('/.netlify/functions/veterinaire', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name_species, health_status, checkup_date })
    });
    
    const result = await response.json();
    alert(result.message);
});
// connectveto.js

document.getElementById('bouton').addEventListener('click', function(event) {
    event.preventDefault();
    
    const identifiant = document.getElementById('identifiant').value;
    const motdepasse = document.getElementById('motdepasse').value;

    // Simuler une vérification de l'identifiant et du mot de passe
    // Remplacez cette partie par une vraie vérification (par exemple, via une API)
    if (identifiant === 'veterinaire' && motdepasse === 'motdepasse') {
        window.location.href = 'connectveto.html';
    } else {
        document.getElementById('errorMessage').innerText = 'Identifiant ou mot de passe incorrect';
    }
});

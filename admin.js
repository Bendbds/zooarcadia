// admin.js

document.getElementById('add-animal-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const name_species = document.getElementById('name_species').value;
    const health_status = document.getElementById('health_status').value;
    const checkup_date = document.getElementById('checkup_date').value;
    
    const response = await fetch('/.netlify/functions/admin', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            action: 'add-animal',
            name_species,
            health_status,
            checkup_date
        })
    });
    
    const result = await response.json();
    alert(result.message);
});

document.getElementById('manage-users-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const username = document.getElementById('username').value;
    const role = document.getElementById('role').value;
    
    const response = await fetch('/.netlify/functions/admin', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            action: 'manage-users',
            username,
            role
        })
    });
    
    const result = await response.json();
    alert(result.message);
});

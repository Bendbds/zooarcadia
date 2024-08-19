document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});

document.getElementById('add-meal-form').addEventListener('submit', async function(event) {
    event.preventDefault();
    
    const animal_id = document.getElementById('animal_id').value;
    const food = document.getElementById('food').value;
    const meal_time = document.getElementById('meal_time').value;
    
    const response = await fetch('/.netlify/functions/employe', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ animal_id, food, meal_time })
    });
    
    const result = await response.json();
    alert(result.message);
});
// netlify/functions/employe.js
const mysql = require('mysql2/promise');

exports.handler = async function(event) {
    const { animal_id, food, meal_time } = JSON.parse(event.body);
    
    const connection = await mysql.createConnection({
        host: 'your-database-host',
        user: 'your-database-username',
        password: 'your-database-password',
        database: 'arcadia'
    });

    try {
        await connection.execute('INSERT INTO meals (animal_id, food, meal_time) VALUES (?, ?, ?)', [animal_id, food, meal_time]);
        return {
            statusCode: 200,
            body: JSON.stringify({ message: 'Repas ajouté avec succès' })
        };
    } catch (err) {
        return {
            statusCode: 500,
            body: JSON.stringify({ message: 'Erreur serveur', error: err.message })
        };
    } finally {
        await connection.end();
    }
};

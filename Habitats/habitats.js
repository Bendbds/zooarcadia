document.querySelector('.foret').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee');
    liste.classList.toggle('liste-visible');
});

document.querySelector('.savane').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-deux');
    liste.classList.toggle('liste-visible-deux');
});

document.querySelector('.foret-montagneuse').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-trois');
    liste.classList.toggle('liste-visible-trois');
});

document.querySelector('.antarctique').addEventListener('click', function() {
    const liste = document.querySelector('.liste-cachee-quatre');
    liste.classList.toggle('liste-visible-quatre');
});
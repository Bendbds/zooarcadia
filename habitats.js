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
document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.Menu');
    const headerNav = document.querySelector('.Header');

    menuButton.addEventListener('click', () => {
        headerNav.classList.toggle('active');
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('button.foret, button.savane, button.foret-montagneuse, button.antarctique');
    buttons.forEach(button => {
        button.addEventListener('click', (event) => {
            const buttonClass = event.target.className;
            const countKey = `count_${buttonClass}`;

          
            let count = localStorage.getItem(countKey);
            if (!count) {
                count = 0;
            }

            count = parseInt(count) + 1;

           
            localStorage.setItem(countKey, count);

           
            console.log(`${buttonClass} clicked ${count} times`);
        });
    });
});

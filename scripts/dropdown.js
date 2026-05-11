const dropdownButton = document.getElementById('Category');
const dropdownMenu = document.querySelector('.drop-down-menu');

dropdownButton.addEventListener('click', function(event) {
    event.stopPropagation();
    dropdownMenu.classList.toggle('active');
});

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
        dropdownMenu.classList.remove('active');
    }
});
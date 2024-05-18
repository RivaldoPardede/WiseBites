document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleButton');
    const toggleIcon = document.getElementById('toggleIcon');
    
    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        toggleIcon.classList.toggle('fa-chevron-right');
        toggleIcon.classList.toggle('fa-chevron-left');
    });
});
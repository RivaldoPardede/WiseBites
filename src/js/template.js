document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleButton');
    const toggleIcon = document.getElementById('toggleIcon');
    
    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        // sidebar.classList.toggle('translate-x-[0%]');
        toggleIcon.classList.toggle('fa-chevron-right');
        toggleIcon.classList.toggle('fa-chevron-left');
    });
});
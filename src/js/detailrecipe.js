document.addEventListener('DOMContentLoaded', function () {
    // Sidebar toggle 
    const sidebar = document.getElementById('sidebar');
    const toggleButton = document.getElementById('toggleButton');
    const toggleIcon = document.getElementById('toggleIcon');
    
    toggleButton.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        toggleIcon.classList.toggle('fa-chevron-right');
        toggleIcon.classList.toggle('fa-chevron-left');
    });

    // Estimation popup 
    const showEstimationBtn = document.getElementById('showEstimationBtn'); // Updated to specific button ID
    const estimationPopup = document.getElementById('Estimation');
    const closeEstimationBtn = document.getElementById('closeEstimationBtn');

    showEstimationBtn.addEventListener('click', function() {
        estimationPopup.classList.remove('hidden');
    });

    closeEstimationBtn.addEventListener('click', function() {
        estimationPopup.classList.add('hidden');
    });

    window.addEventListener('click', function(event) {
        if (event.target === estimationPopup) {
            estimationPopup.classList.add('hidden');
        }
    });
});

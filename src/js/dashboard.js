document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("mainContent");
    const toggleButton = document.getElementById("toggleButton");
    const toggleIcon = document.getElementById("toggleIcon");

    toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        mainContent.classList.toggle('ml-56');
        toggleIcon.classList.toggle("fa-chevron-right");
        toggleIcon.classList.toggle("fa-chevron-left");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("mainContent");
    const toggleButton = document.getElementById("toggleButton");
    const toggleIcon = document.getElementById("toggleIcon");

    function updateSidebarState() {
        if (window.innerWidth >= 768) {
            sidebar.classList.add("open");
            sidebar.classList.remove("close");
            mainContent.classList.add("lg:ml-56");
            toggleIcon.classList.add("fa-chevron-left");
            toggleIcon.classList.remove("fa-chevron-right");
        } else {
            sidebar.classList.remove("open");
            sidebar.classList.add("close");
            mainContent.classList.remove("lg:ml-56");
            toggleIcon.classList.remove("fa-chevron-left");
            toggleIcon.classList.add("fa-chevron-right");
        }
    }

    updateSidebarState();

    window.addEventListener("resize", updateSidebarState);

    toggleButton.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        sidebar.classList.toggle("close");
        mainContent.classList.toggle("lg:ml-56");
        toggleIcon.classList.toggle("fa-chevron-right");
        toggleIcon.classList.toggle("fa-chevron-left");
    });
});
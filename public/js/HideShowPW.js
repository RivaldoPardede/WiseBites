let showPassword = false;

document.getElementById("hideShowPW").addEventListener("click", function () {
    this.classList.toggle("hs-password-active");
    const icon = document.getElementById("hsPWicon");
    if (icon.classList.contains("fa-eye-slash")) {
        icon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
        icon.classList.replace("fa-eye", "fa-eye-slash");
    }
    const input = document.getElementById("myPasswordInput");
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
});

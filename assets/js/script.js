document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("mypassword");
    const showPasswordCheckbox = document.getElementById("showPassword");

    if (passwordInput && showPasswordCheckbox) {
        showPasswordCheckbox.addEventListener("change", function () {
            passwordInput.type = this.checked ? "text" : "password";
        });
    }
});

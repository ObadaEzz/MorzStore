document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("password");
    const togglePasswordButton = document.getElementById("togglePassword");
    let eyeIcon;

    // Check if the elements exist
    if (togglePasswordButton) {
        eyeIcon = togglePasswordButton.querySelector("i");

        // Check if the eyeIcon exists before adding the event listener
        if (eyeIcon) {
            togglePasswordButton.addEventListener("click", function () {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.classList.remove("far", "fa-eye");
                    eyeIcon.classList.add("fas", "fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    eyeIcon.classList.remove("fas", "fa-eye-slash");
                    eyeIcon.classList.add("far", "fa-eye");
                }
            });
        }
    }
});
document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("cpassword");
    const togglePasswordButton = document.getElementById("ctogglePassword");
    let eyeIcon;

    // Check if the elements exist
    if (togglePasswordButton) {
        eyeIcon = togglePasswordButton.querySelector("i");

        // Check if the eyeIcon exists before adding the event listener
        if (eyeIcon) {
            togglePasswordButton.addEventListener("click", function () {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.classList.remove("far", "fa-eye");
                    eyeIcon.classList.add("fas", "fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    eyeIcon.classList.remove("fas", "fa-eye-slash");
                    eyeIcon.classList.add("far", "fa-eye");
                }
            });
        }
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const passwordInput = document.getElementById("opassword");
    const togglePasswordButton = document.getElementById("otogglePassword");
    let eyeIcon;

    // Check if the elements exist
    if (togglePasswordButton) {
        eyeIcon = togglePasswordButton.querySelector("i");

        // Check if the eyeIcon exists before adding the event listener
        if (eyeIcon) {
            togglePasswordButton.addEventListener("click", function () {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    eyeIcon.classList.remove("far", "fa-eye");
                    eyeIcon.classList.add("fas", "fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    eyeIcon.classList.remove("fas", "fa-eye-slash");
                    eyeIcon.classList.add("far", "fa-eye");
                }
            });
        }
    }
});


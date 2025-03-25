document.getElementById("togglePassword").addEventListener("click", function () {
    let passwordInput = document.getElementById("password");
    let eyeIcon = document.getElementById("eyeIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeIcon.setAttribute("xlink:href", "#close-eye"); // Cambia al ícono de "ojo cerrado"
    } else {
        passwordInput.type = "password";
        eyeIcon.setAttribute("xlink:href", "#eye"); // Cambia al ícono de "ojo abierto"
    }
});
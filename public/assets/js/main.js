
document.addEventListener("DOMContentLoaded", function () {
    const backToTop = document.querySelector(".back-to-top");

    // Mostrar/ocultar el botón según el scroll
    window.addEventListener("scroll", function () {
        if (window.scrollY > 300) {
            backToTop.classList.add("show");
        } else {
            backToTop.classList.remove("show");
        }
    });

    // Hacer scroll hacia arriba al hacer clic sin cambiar la URL
    backToTop.addEventListener("click", function (event) {
        event.preventDefault(); // Evita que el enlace cambie la URL con "#"
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});




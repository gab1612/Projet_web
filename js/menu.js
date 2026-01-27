document.addEventListener("DOMContentLoaded", () => {
    const burger = document.getElementById("burger");
    const menu = document.getElementById("side-menu");
    const overlay = document.getElementById("overlay");

    function toggleMenu() {
        menu.classList.toggle("open");
        overlay.classList.toggle("active");
        burger.classList.toggle("open");
    }

    burger.addEventListener("click", toggleMenu);
    overlay.addEventListener("click", toggleMenu);
});

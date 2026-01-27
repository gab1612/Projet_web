document.addEventListener("DOMContentLoaded", () => {
    const burger = document.getElementById("burger");
    const menu = document.getElementById("side-menu");

    burger.addEventListener("click", () => {
        menu.classList.toggle("open");
    });
});
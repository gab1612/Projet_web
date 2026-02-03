const prenom = document.getElementById("prenom");
const login = document.getElementById("login");
const createAccount = document.getElementById("createAccount");
const form = document.getElementById("registerForm");

form.addEventListener("submit", (e) => {
    e.preventDefault(); // Empêche le rechargement immédiat

    if (!prenom.value) {
        return;
    }

    if (e.submitter === login) {
        alert("Ravi de vous revoir " + prenom.value);
    } else if (e.submitter === createAccount) {
        alert("Bienvenue " + prenom.value + " !");
    }

    // Redirection vers index.php après l'alerte
    window.location.href = "index.php";
});

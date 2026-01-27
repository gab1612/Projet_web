document.getElementById("registerForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const prenom = document.getElementById("prenom");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirmPassword");
    const errorMessage = document.getElementById("errorMessage");

    if (!prenom.value || !password.value || !confirmPassword.value) {
        errorMessage.textContent = "Tous les champs doivent être complétés.";
        return;
    }

    if (password.value !== confirmPassword.value) {
        errorMessage.textContent = "Les mots de passe ne correspondent pas.";
        password.value = "";
        confirmPassword.value = "";
        return;
    }

    errorMessage.textContent = "";
    alert("Compte créé avec succès !");
});

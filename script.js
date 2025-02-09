document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Empêche le rechargement de la page

        const formData = new FormData(form);

        fetch("sendmail.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            alert(data); // Affiche le message de retour du serveur
            form.reset(); // Réinitialise le formulaire après l'envoi
        })
        .catch(error => {
            console.error("Erreur:", error);
            alert("Une erreur est survenue. Veuillez réessayer.");
        });
    });
});

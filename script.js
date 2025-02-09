document.addEventListener("DOMContentLoaded", function() {
    emailjs.init("NUEjDR_o419Iy1Phd"); // Remplace par ta clé EmailJS

    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Empêche la soumission classique du formulaire

        // Récupération des valeurs du formulaire
        let nom = document.getElementById("nom").value;
        let prenom = document.getElementById("prenom").value;
        let sujet = document.getElementById("sujet").value;
        let email = document.getElementById("email").value;
        let message = document.getElementById("message").value;

        let params = {
            nom: nom,
            prenom: prenom,
            sujet: sujet,
            email: email,
            message: message
        };

        emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", params)
            .then(function(response) {
                alert("Message envoyé avec succès !");
                document.getElementById("contact-form").reset(); // Réinitialiser le formulaire
            }, function(error) {
                alert("Erreur lors de l'envoi du message. Réessayez !");
            });
    });
});
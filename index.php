<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sendmail.php">
    <title>cv</title>
</head>
<body>
    <h1>Téo Laurent</h1>
    
    <address>
        <p>186 rue de colfontaine</p>
        <p>7080 eugie</p>
    </address>
    <a href="mailto:laurent.teo370@gmail.com">Me contacter par mail</a>
    <ul>
        <li><a href="#aporposdemoi">Pourquoi me choisir comme parrain?</a></li>
        <li><a href="#Etude">Argument</a></li>
        <li><a href="#competance">Compétences</a></li>
    </ul>
    <hr>
    <section id="aporposdemoi">
        <H3 >Pourquoi me choisir comme parrain?</H3>
        <p>En tant que parrain, je suis ravi d’accompagner et de guider ceux qui souhaitent évoluer et réussir dans leur parcours. Mon objectif est de partager mon expérience, d’apporter des conseils précieux et d’être un soutien à chaque étape du chemin. Que ce soit pour répondre aux questions, aider à surmonter les défis ou simplement encourager, je serai présent pour offrir une écoute bienveillante et un accompagnement motivant. Ensemble, avançons vers la réussite avec confiance et détermination ! 💪✨</p>
    </section>
    <hr>
    <section id="Etude">
        <h3>Argument</h3>
            <ol>
                <li>disney+</li> 
                <p>(oui j'ai vue la reine de neige)<p>
                <li>un futur metier avec des horaire flexible</li>
                <br>
                <li>connait le bois de colfontaine par coeur</li>
                <br>
                <li>soutien et motivation</li>
                <p>(Être un repère, une personne de confiance sur qui ma filleule peut compter.)</p>
                <li>voir ma filleule reussir</li>
                <p>C’est un peu comme élever un Tamagotchi, mais en mieux. Voir quelqu’un progresser grâce à mon aide, c’est ultra satisfaisant (et ça fait une bonne excuse pour verser une petite larme discrète de fierté).</p>
                
            </ol>
    </section>
   
    <hr>
    <section id="competance">
        <h3>Compétence</h3>
        <table>
            <tr>
                <th>compétence</th>
                <th>niveau de compétence</th>
            </tr>
            <tr>
                <td>borain</td>
                <td><progress value="100" max="100"></progress></td>
            </tr>
            <tr>
                <td>math</td>
                <td><progress value="80" max="100"></progress></td>
            </tr>
            <tr>
                <td>français</td>
                <td><progress value="0" max="100"></progress></td>
            </tr>
            <tr>
                <td>humour</td>
                <td><progress value="70" max="100"></progress></td>

            </tr>
            <tr>
                <td>bêtise</td>
                <td><progress value="90" max="100"></progress></td>
            </tr>
        </table>  
    </section>
    <hr>
    <form id="contact-form" method="POST" action="sendmail.php">
        <div class="form-row form-error" style="display:none;"></div>
        <div class="form-row">
          <label for="contact-form-name">Name:</label>
          <input id="contact-form-name" class="form-input" type="text" name="name" required>
        </div>
        <div class="form-row">
          <label for="contact-form-email">Email:</label>
          <input id="contact-form-email" class="form-input" type="email" name="email" required>
        </div>
        <div class="form-row">
          <label for="contact-form-phone">Phone:</label>
          <input id="contact-form-phone" class="form-input" type="tel" name="phone">
        </div>
        <div class="form-row">
          <label for="contact-form-message">Message:</label>
          <textarea id="contact-form-message" class="form-input" name="message" required></textarea>
        </div>
        <button type="submit">Submit</button>
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = htmlspecialchars($_POST["name"]);
          $email = htmlspecialchars($_POST["email"]);
          $phone = htmlspecialchars($_POST["phone"]);
          $message = htmlspecialchars($_POST["message"]);
      
          $to = "laurent.teo370@gmail.com"; // Remplace par ton adresse email
          $subject = "Nouveau message de contact";
          $body = "Nom: $name\nEmail: $email\nTéléphone: $phone\n\nMessage:\n$message";
      
          $headers = "From: $email\r\nReply-To: $email";
      
          if (mail($to, $subject, $body, $headers)) {
              echo "Message envoyé avec succès !";
          } else {
              echo "Erreur lors de l'envoi du message.";
          }
      } else {
          echo "Méthode non autorisée.";
      }
      ?>
    <script src="./script.js"></script>
</body>
<footer>
    merci
</footer>
</html>
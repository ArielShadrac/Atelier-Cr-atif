
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (!empty($nom) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = "votre_email@exemple.com"; // Remplace cette adresse par ton e-mail
        $sujet = "Nouveau message de : $nom";
        $contenu = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";
        $headers = "From: $email";

        if (mail($to, $sujet, $contenu, $headers)) {
            echo "<p>Merci, $nom. Votre message a été envoyé avec succès.</p>";
        } else {
            echo "<p>Une erreur est survenue lors de l'envoi. Veuillez réessayer.</p>";
        }
    } else {
        echo "<p>Veuillez remplir tous les champs correctement.</p>";
    }
}
?>

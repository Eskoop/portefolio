<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $destinataire = "akhtar.hassan1992@gmail.com"; // Remplacez par votre adresse e-mail

    $sujet = "Nouveau message de contact depuis votre site";

    $contenu = "Nom: $nom";
    $contenu .= "Email: $email";
    $contenu .= "Message:\n$message";

    $headers = "From: $nom <$email>";

    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Votre message a bien été envoyé.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}

<?php

$message = ' ';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message1 = $_POST['message'];

    $destinataire = "akhtar.hassan1992@gmail.com"; 

    $sujet = "Nouveau message de contact depuis votre site";

    $contenu = "Nom: $nom";
    $contenu .= "Email: $email";
    $contenu .= "Message:\n$message1";

    $headers = "From: $nom <$email>";

    if (!mail($destinataire, $sujet, $contenu, $headers)) {
        if(!empty($POST)){
            if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 20) {
                $message .= '<div class=" alert alert-warning">Votre nom doit faire entre 2 et 20 caractères.</div>';
            }
            if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $message .= '<div class=" alert alert-warning">Votre mail n\'est pas conforme.</div>';
            }
            if (!isset($_POST['message']) || strlen($_POST['message']) < 2 || strlen($_POST['message']) > 1000) {
                $message .= '<div class=" alert alert-warning">Votre message doit faire entre 2 et 1000 caractères.</div>';
            }
        }
        // $message = "Votre message a bien été envoyé.";
    } else {
        $message = "Une erreur s'est produite lors de l'envoi du message.";
    }

}

// if (!empty($message)) {
//     echo "<script>alert('$message');</script>";
//     header('Location: contact.php');
// }

?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charger PHPMailer via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $kit = htmlspecialchars($_POST['kit']);
    $message = htmlspecialchars($_POST['message']);

    // Paramètres de l'email
    $to = "your_email@domain.com";  // Remplacez par votre email
    $subject = "Nouvelle commande de $nom";
    $body = "Une nouvelle commande a été passée :\n\n";
    $body .= "Nom : $nom\n";
    $body .= "Email : $email\n";
    $body .= "Téléphone : $telephone\n";
    $body .= "Kit choisi : $kit\n";
    $body .= "Message : $message\n";

    // Initialisation de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP local (FakeSMTP ou Sendmail)
        $mail->isSMTP();
        $mail->Host = 'localhost';  // Serveur SMTP local
        $mail->SMTPAuth = false;    // Désactiver l'authentification
        $mail->Port = 25;         // Port de FakeSMTP ou Sendmail

        // Paramètres de l'email
        $mail->setFrom('noreply@domain.com', 'Commande Starlink');
        $mail->addAddress($to);
        $mail->addReplyTo($email, $nom); // Permet de répondre à l'utilisateur

        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Envoi de l'email
        $mail->send();
        header("Location: merci.php"); // Redirection après succès
        exit();
    } catch (Exception $e) {
        echo "Erreur : L'email n'a pas pu être envoyé. Erreur: {$mail->ErrorInfo}";
    }
}
?>

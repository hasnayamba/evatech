<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charger PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Création de l'instance PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur SMTP local (FakeSMTP ou Sendmail)
        $mail->isSMTP();
        $mail->Host = 'localhost'; // FakeSMTP ou Sendmail tourne en local
        $mail->SMTPAuth = false; // Pas besoin d'authentification pour FakeSMTP
        $mail->Port = 25; // Port par défaut pour FakeSMTP (peut être 25 pour Sendmail)

        // Expéditeur et Destinataire
        $mail->setFrom('noreply@monapp.com', 'Mon Application');
        $mail->addAddress($to);


        // Contenu de l'e-mail
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = nl2br(htmlspecialchars($message));

        // Envoi du mail
        if ($mail->send()) {
            echo "E-mail envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi de l'e-mail.";
        }
    } catch (Exception $e) {
        echo "Erreur: " . $mail->ErrorInfo;
    }
}
?>

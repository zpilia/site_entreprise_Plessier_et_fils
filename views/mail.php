<?php

    use PHPMailer\PHPMailer\PHPMailer;

    require 'A:\wamp64\www\php-mysql\Projet_Perso\site_entreprise_Plessier_et_fils\PHPMailer\src\Exception.php';
    require 'A:\wamp64\www\php-mysql\Projet_Perso\site_entreprise_Plessier_et_fils\PHPMailer\src\PHPMailer.php';
    require 'A:\wamp64\www\php-mysql\Projet_Perso\site_entreprise_Plessier_et_fils\PHPMailer\src\SMTP.php';

    $message_sent = false;
    if (isset($_POST['send_mail'])) {
        if (!empty($_POST['login'])) { // Nom
            if (!empty($_POST['email'])) { // Email
                if (!empty($_POST['subject'])) { // Objet
                    if (!empty($_POST['content'])) { //message
                        $mail = new PHPMailer();

                        try {
                            //Server settings
                            $mail->isSMTP();                                            //Send using SMTP
                            $mail->Host       = 'smtp.mailtrap.io';                     //Set the SMTP server to send through
                            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                            $mail->Username   = 'dc678a16204ec3';                     //SMTP username
                            $mail->Password   = 'e7e9824ff977e4';                               //SMTP password
                            $mail->Port       = 2525;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                            //Recipients
                            $mail->setFrom('zpilia2@gmail.com', 'Mailer');
                            $mail->addAddress($_POST['email'], $_POST['login']);     //Add a recipient
                            $mail->addReplyTo('zpilia2@gmail.com', 'Zoé');

                            //Content
                            $mail->isHTML(true);                                  //Set email format to HTML
                            $mail->Subject = $_POST['subject'];
                            $mail->Body    = $_POST['content'];
                            $mail->AltBody = $_POST['content'];

                            $mail->send();
                            //echo 'Message has been sent';
                        } catch (Exception $e) {
                            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        }
                    } else {
                        // pas de contenu
                    }
                } else {
                    // pas d'objet
                }
            } else {
                // pas d'email
            }
        } else {
            // pas de nom
        }
    }

?>
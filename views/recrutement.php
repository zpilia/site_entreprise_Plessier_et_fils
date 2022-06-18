<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style_bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    <title>Transports Plessier - Recrutement</title>
</head>

<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'header.php';
    require 'A:\wamp64\www\php-mysql\Projet_Perso\site_entreprise_Plessier_et_fils\PHPMailer\src\Exception.php';
    require 'A:\wamp64\www\php-mysql\Projet_Perso\site_entreprise_Plessier_et_fils\PHPMailer\src\PHPMailer.php';
    require 'A:\wamp64\www\php-mysql\Projet_Perso\site_entreprise_Plessier_et_fils\PHPMailer\src\SMTP.php';
?>

<?php

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
                            echo 'Message has been sent';
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

<body>

<section class="dark-grey-text mb-3">

    <h3 class="font-weight-bold text-center mb-4 mt-4">Nous recrutons</h3>

    <p class="text-center w-responsive mx-auto pb-2">Vous voulez nous rejoindre ? <br>
        Remplissez ce formulaire et nous reviendrons vers vous dans les plus brefs délais.</p>

    <div class="row d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                        <div class="md-form">
                            <label for="form-surname">Nom</label>
                            <input type="text" id="form-surname" class="form-control" name="surname">
                        </div>
                        <br>
                        <div class="md-form">
                            <label for="form-name">Prénom</label>
                            <input type="text" id="form-name" class="form-control" name="name">
                        </div>
                        <br>
                        <div class="md-form">
                            <label for="form-email">Email</label>
                            <input type="email" id="form-email" class="form-control" />
                        </div>
                        <br>
                        <div class="md-form">
                            <label for="form-text">Message</label>
                            <textarea id="form-text" class="form-control md-textarea" rows="3" name="content"></textarea>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary  btn-floating  btn-lg mb-2"><i class="fas fa-download"></i></button>
                                    <p class="text-justify">CV</p>
                                </div>
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary  btn-floating  btn-lg mb-2"><i class="fas fa-download"></i></button>
                                    <p class="text-justify">Lettre motivation</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

<?php require 'footer.php'?>

</html>

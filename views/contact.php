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
    <title>Transports Plessier - Contact</title>
</head>

<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'header.php';
    require '/Applications/MAMP/htdocs/site_entreprise_Plessier_et_fils/PHPMailer/src/Exception.php';
    require '/Applications/MAMP/htdocs/site_entreprise_Plessier_et_fils/PHPMailer/src/PHPMailer.php';
    require '/Applications/MAMP/htdocs/site_entreprise_Plessier_et_fils/PHPMailer/src/SMTP.php';
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

<div class="container mt-5">

    <!--Section: Content-->
    <section class="dark-grey-text mb-5">

        <style>
            .map-container-section {
                overflow:hidden;
                padding-bottom:56.25%;
                position:relative;
                height:0;
            }
            .map-container-section iframe {
                left:0;
                top:0;
                height:100%;
                width:100%;
                position:absolute;
            }
        </style>

        <!-- Section heading -->
        <h3 class="font-weight-bold text-center mb-4">Contactez nous</h3>
        <!-- Section description -->
        <p class="text-center w-responsive mx-auto pb-5">
            Une question particulière ? Besoins d'information ? Quelle que soit votre question, vous pouvez nous la poser via ce formulaire.
        </p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="form-header blue accent-1">
                            <h3 class="mt-2 text-center"><i class="fa fa-envelope"></i> Écrivez-nous <i class="fa fa-envelope"></i></h3>
                        </div>
                        <p class="dark-grey-text text-center">Nous vous répondrons au plus vite.</p>
                        <!-- Body -->
                        <!-- TEST FORM RAJOUTE PAR MOI -->
                        <form action="contact.php" method="POST">
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="name" class="form-control" name="login" placeholder="Nom" required>
                            </div>
                            <br>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <br>

                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="subject" class="form-control" name="subject" placeholder="Objet" required>
                            </div>
                            <br>

                            <div class="md-form">
                                <i class="fa fa-pencil-alt prefix grey-text"></i>
                                <textarea id="text" class="form-control md-textarea" rows="3" name="content" placeholder="Contenu du message" required></textarea>
                            </div>
                            <br>

                            <div class="text-center">
                                <button name="send_mail" type="submit" style="background-color: #f2f2f2" class="btn btn-light">Envoyer</button>
                            </div>
                            <!-- TEST FIN DE FORM -->
                        </form>
                    </div>
                </div>
                <!-- Form with header -->

            </div>

            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!--Google map-->
                <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                    <iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.018435556925!2d2.8484798158112348!3d49.4274654793473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d614d099582d%3A0x2f31992b35845ae7!2sTransports%20Plessier%20et%20Fils!5e0!3m2!1sfr!2sfr!4v1652365801578!5m2!1sfr!2sfr"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- Buttons-->
                <div class="row text-center">
                    <div class="col-md-4">
                        <a class="btn-floating">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                        <p>46 Rte de Choisy, 60200 Compiègne</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating">
                            <i class="fa fa-phone mr-3"></i>
                        </a>
                        <p>03 44 38 67 67</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn-floating">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <p>compta@plessier.fr</p>
                    </div>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    <!--Section: Content-->
    
</div>

</body>

<?php require 'footer.php'?>

</html>
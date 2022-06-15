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

<!-- En-tête -->
<header>

    <div class="row">
        <div class="col text-center align-self-center ">
            <h1 class="title-header">Transports Plessier</h1>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="accueil.php">
                <img src="../public/img/logo2.png"
                     height="50"
                     alt=""
                     loading="lazy" />
            </a>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="societe.php">Société</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="service.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="information.php">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galerie.php">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recrutement.php">Recrutement</a>
                    </li>
                </ul>
                <!-- Left links -->

            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>

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
        <p class="text-center w-responsive mx-auto pb-5">Une question particulière ? Besoins d'information ? Quelle que soit votre question, vous pouvez nous la poser via ce formulaire.</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

                <!-- Form with header -->
                <div class="card">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="form-header blue accent-1">
                            <h3 class="mt-2"><i class="fa fa-envelope"></i> Ecrivez nous</h3>
                        </div>
                        <p class="dark-grey-text">Nous vous répondrons au plus vite.</p>
                        <!-- Body -->
                        <!-- TEST FORM RAJOUTE PAR MOI -->
                        <form method="POST">
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" id="form-name" class="form-control" name="login" placeholder="Nom">
                            </div>
                            <br>
                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input type="text" id="form-email" class="form-control" name="email" placeholder="Email" >
                            </div>
                            <br>
                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input type="text" id="form-Subject" class="form-control" name="subject" placeholder="Objet">
                            </div>
                            <br>
                            <div class="md-form">
                                <i class="fa fa-pencil-alt prefix grey-text"></i>
                                <textarea id="form-text" class="form-control md-textarea" rows="3" name="content" placeholder="Contenu du message"></textarea>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-light">Envoyer</button>
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
                        <p>compta.plessier@plessier.fr</p>
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

<!-- Footer -->

<footer class="page-footer font-small mdb-color pt-4">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
        <hr>
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">La société</h6>
                <p>...</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Service</h6>
                <p>
                    <a href="logistique.php">Logistique</a>
                </p>
                <p>
                    <a href="messageriePalette.php">Messagerie Palette</a>
                </p>
                <p>
                    <a href="longueDistance.php">Transports longue distance</a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">


            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    46 Rte de Choisy, 60200 Compiègne
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    compta@plessier.fr
                </p>
                <p>
                    <i class="fa fa-phone mr-3"></i>
                    03 44 38 67 67
                </p>

            </div>
            <!-- Grid column -->
            <hr>
        </div>
        <!-- Footer links -->

        <!-- Grid row -->
        <div class="row d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left">
                    © Copyright 2022.Tous droits réservés.
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1"
                               href="https://www.facebook.com/Transports-Plessier-et-Fils-100771511885626/" role="button">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" role="button">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>

</html>

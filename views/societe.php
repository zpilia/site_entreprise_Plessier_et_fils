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
    <title>Transports Plessier - Société</title>
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

    <!-- Timeline n°2 -->
    <div class="container mt-3">

        <style>
            /* The actual timeline (the vertical ruler) */
            .main-timeline-2 {
                position: relative;
            }

            /* The actual timeline (the vertical ruler) */
            .main-timeline-2::after {
                content: '';
                position: absolute;
                width: 3px;
                background-color: #26c6da;
                top: 0;
                bottom: 0;
                left: 50%;
                margin-left: -3px;
            }

            /* Container around content */
            .timeline-2 {
                position: relative;
                background-color: inherit;
                width: 50%;
            }

            /* The circles on the timeline */
            .timeline-2::after {
                content: '';
                position: absolute;
                width: 25px;
                height: 25px;
                right: -11px;
                background-color: #26c6da;
                top: 15px;
                border-radius: 50%;
                z-index: 1;
            }

            /* Place the container to the left */
            .left-2 {
                padding: 0px 40px 20px 0px;
                left: 0;
            }

            /* Place the container to the right */
            .right-2 {
                padding: 0px 0px 20px 40px;
                left: 50%;
            }

            /* Add arrows to the left container (pointing right) */
            .left-2::before {
                content: " ";
                position: absolute;
                top: 18px;
                z-index: 1;
                right: 30px;
                border: medium solid white;
                border-width: 10px 0 10px 10px;
                border-color: transparent transparent transparent white;
            }

            /* Add arrows to the right container (pointing left) */
            .right-2::before {
                content: " ";
                position: absolute;
                top: 18px;
                z-index: 1;
                left: 30px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            /* Fix the circle for containers on the right side */
            .right-2::after {
                left: -14px;
            }

            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {

                /* Place the timelime to the left */
                .main-timeline-2::after {
                    left: 31px;
                }

                /* Full-width containers */
                .timeline-2 {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                }

                /* Make sure that all arrows are pointing leftwards */
                .timeline-2::before {
                    left: 60px;
                    border: medium solid white;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }

                /* Make sure all circles are at the same spot */
                .left-2::after,
                .right-2::after {
                    left: 18px;
                }

                .left-2::before {
                    right: auto;
                }

                /* Make all right containers behave like the left ones */
                .right-2 {
                    left: 0%;
                }
            }
        </style>

        <section style="background-color: #F0F2F5">
            <div class="container py-5">
                <div class="main-timeline-2">
                    <div class="timeline-2 left-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Création de l'entreprise Transport Plessier</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1964</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Création de la société Plessier & Fils</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1984</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 left-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Construction du 1er entrepôt de 3 000 m^2</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1995</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Construction d'un entrepôt de stockage de 10 000 m^2</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2001</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 left-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Signature de contrat avec Evolutrans</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2012</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Acquisition société DELOT & Cie et ajcquistion d'un nouveau site</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2016</p>
                                <p>société situé à Villers-Cotterêt et déménagement du site à Crepy en Valois</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 left-2">
                        <div class="card">
                            <img src="#" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Mise en service de Volupal</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2016</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <img src="../public/img/objectif-co2.png" class="card-img-top"
                                 alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Charte CO2 avec l'entreprise Objectif CO2</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2017</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- Fin Timeline n°2 -->

    <!-- Engagement -->
    <div class="container mt-4">
        <h2>Nos engagements</h2>

        <div class="row justify-content-center mt-2">

            <div class="col-lg-4">

                <div class="view overlay z-depth-1">
                    <img src="../public/img/objectif-co2.png" class="img-fluid" alt="First sample image">
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <p class="mt-5 ms-5">
                    ...........
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-2">

            <div class="col-lg-6 mb-4">

                <p class="mt-5 ms-5">
                    ...........
                </p>
            </div>

            <div class="col-lg-4">

                <div class="view overlay z-depth-1">
                    <img src="../public/img/evolutrans-hlogo-quadri-baseline.jpeg" class="img-fluid" alt="First sample image">
                </div>
            </div>


        </div>

    </div>
    <!-- Fin Engagement -->

    <!-- Partenaire -->
    <div class="container mt-4">
        <h2>Nos Partnaires</h2>

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item">

            <!--Controls-->
            <div class="controls-top text-center mb-3">
                <a class="btn btn-floating btn-lg" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn btn-floating btn-lg" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->


            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/renaulttrucks.jpg"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/scania_verti.JPG"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/baches_thuillet.png"
                                     alt="Card image cap">
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/Trimble-logo.png"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/continental.png"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/AS24.png"
                                     alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/ASVI.png"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/logo-aftral.jpg"
                                     alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Third slide-->
            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>
    <!-- Fin Partenaire -->

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
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

<?php require 'header.php'?>

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
                            <!-- <img src="#" class="card-img-top" alt="Responsive image"> -->
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Création de l'entreprise Transports Plessier</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1964</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <!-- <img src="#" class="card-img-top" alt="Responsive image"> -->
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Création de la société Transports Plessier & Fils</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1984</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 left-2">
                        <div class="card">
                           <!--  <img src="#" class="card-img-top" alt="Responsive image"> -->
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Construction du 1er entrepôt de 3 000 m&sup2</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 1995</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <!-- <img src="#" class="card-img-top" alt="Responsive image"> -->
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Construction d'un entrepôt de stockage de <br> 10 000 m&sup2</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2001</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 left-2">
                        <div class="card">
                            <img src="../public/img/evolutrans-hlogo-quadri-baseline.jpeg" class="card-img-top" alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Signature de contrat avec Evolutrans</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2012</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <!-- <img src="#" class="card-img-top" alt="Responsive image"> -->
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Acquisition société DELOT & Cie et ajcquistion d'un nouveau site</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2016</p>
                                <p>société situé à Villers-Cotterêt et déménagement du site à Crepy en Valois</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 left-2">
                        <div class="card">
                            <img src="../public/img/volupal.png" class="card-img-top" alt="Responsive image">
                            <div class="card-body p-4">
                                <h4 class="fw-bold mb-4">Mise en service de Volupal</h4>
                                <p class="text-muted mb-4"><i class="far fa-clock" aria-hidden="true"></i> 2016</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-2 right-2">
                        <div class="card">
                            <img src="../public/img/objectif-co2.png" class="card-img-top" alt="Responsive image">
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
    <div class="container mt-4 mb-5">
        <h2>Nos engagements</h2>

        <div class="row justify-content-center mt-2">

            <div class="col-lg-5">

                <div class="view overlay z-depth-1 mt-3">
                    <img src="../public/img/objectif-co2.png" class="img-fluid" alt="First sample image">
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <p class="mt-5 ms-5" style="text-align: justify">
                    Transports PLESSIER et Fils s’engage à réduire sa consommation d'énergie et
                    réduction des émissions de CO2, de ses activités de transport, en suivant la Charte qui le concrétise avec le ministère de la transition
                    écologique et solidaire, la Région Hauts de France, l’Agence de l’Environnement et de la Maîtrise de l’Énergie – ADEME.
                    Et elle forme également tous nos conducteurs à avoir une conduite eco-resposable.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-2">

            <div class="col-lg-6 mb-4">

                <p class="mt-5 ms-5" style="text-align: justify">
                    Evolutrans est un réseau de transporteurs et logisticiens comptant plus de 100 entreprises françaises sélectionnées
                    sur la base d’un cahier des charges exigeant pour vous garantir une qualité de service optimale.
                </p>
            </div>

            <div class="col-lg-6">

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

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/BEST-DRIVE-LOGO.png"
                                     alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Third slide-->

                <!--Fourth slide-->
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/cesamax.png"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img" src="../public/img/krone.png"
                                     alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Fourth slide-->

            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
    </div>
    <!-- Fin Partenaire -->

</body>


<?php require 'footer.php'?>

</html>
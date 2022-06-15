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
    <title>Transports Plessier - Galerie photo</title>
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

    <style>
        img{
            max-width: 100%;
        }
        .gallery{
            padding: 30px 0;
        }
        .gallery img{
            padding: 15px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            cursor: pointer;
        }
        #gallery-modal .modal-img{
            width: 100%;
        }
    </style>

    <section class="gallery min-vh-50">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="../public/img/depannage.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../public/img/poste_controle.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../public/img/facade.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../public/img/5.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../public/img/5.jpg" class="gallery-item" alt="gallery">
                </div>
                <div class="col">
                    <img src="../public/img/5.jpg" class="gallery-item" alt="gallery">
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="modal-img" alt="modal img">
                </div>
            </div>
        </div>
    </div>

    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/main.js"></script>

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
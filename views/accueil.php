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
    <title>Transports Plessier - Accueil</title>
</head>

<?php require 'header.php'?>

<body>

    <!-- Background image -->
    <div
            class="bg-image d-flex justify-content-center align-items-center mt-3"
            style="
        background-image: url('http://localhost:8888/site_entreprise_Plessier_et_fils/public/img/facade.jpg');
        height: 40vh; "
    >
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <h1 class="fw-bold display-3 text-white">Transports PLESSIER & FILS</h1>
            </div>
        </div>
    </div>
    <!-- Background image -->


    <!-- Resume entreprise -->

    <div class="container">
        <div class="row gx-5 justify-content-center">

            <p class="text-justify w-responsive mx-auto pb-4 mt-4">
                La société des Transports Plessier est une entreprise familiale de transport routier de fret interurbain
                qui s’est développée au fil des ans. Et qui aujourd’hui dessert toute la France et dans les pays européens
                grâce au réseau Evolutrans. Elle fut fondée en 1984, mais son activité commence bien avant, en 1964,
                sous forme d’entreprise individuelle, elle fêtera bientôt ses 60 ans.
            </p>

        </div>
    </div>


    <!-- Resume entreprise -->

    <!-- Service -->
    <div class="container">
        <div class="row gx-1 justify-content-between">

            <div class="col-lg-1 col-md-3"></div>

            <div class="col-lg-1 col-md-3">
                <a href="logistique.php" role="button" aria-pressed="true"
                        class="btn btn-outline btn-floating btn-lg active ms-lg-3 w-responsive" data-mdb-ripple-color="#000000"><i class="fas fa-truck-loading"></i>
                    </a>
                <p class="text-center w-responsive mt-3 me-5">Logistique</p>
            </div>

            <div class="col-lg-1 col-md-3"></div>

            <div class="col-lg-1 col-md-3"></div>

            <div class="col-lg-1 col-md-3">
                <a href="messageriePalette.php" role="button" aria-pressed="true"
                        class="btn btn-outline btn-floating btn-lg active ms-lg-3 w-responsive" data-mdb-ripple-color="#000000"> <i class="fas fa-pallet"></i>
                </a>
                <p class="text-center w-responsive mt-3 me-2">Messagerie Palette</p>
            </div>

            <div class="col-lg-1 col-md-3"></div>

            <div class="col-lg-1 col-md-3"></div>

            <div class="col-lg-1 col-md-3">
                <a href="longueDistance.php" role="button" aria-pressed="true"
                        class="btn btn-outline btn-floating btn-lg active ms-lg-3 w-responsive" data-mdb-ripple-color="#000000"> <i class="fas fa-truck-moving"></i>
                </a>
                <p class="text-center w-responsive mt-3 me-2">Transports Longue Distance</p>
            </div>

            <div class="col-lg-1 col-md-3"></div>

        </div>
    </div>
    <!-- Fin Service -->


</body>

<?php require 'footer.php'?>

</html>
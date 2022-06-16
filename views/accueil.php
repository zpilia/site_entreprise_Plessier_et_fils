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
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <h1 class="text-white mb-0">Transports PLESSIER & FILS</h1>
            </div>
        </div>
    </div>
    <!-- Background image -->


    <!-- Resume entreprise -->

    <div class="container">
        <div class="row gx-5 justify-content-center">

            <p class="text-justifiy">
                .....
            </p>

        </div>
    </div>


    <!-- Resume entreprise -->

    <!-- Service -->
    <div class="container">
        <div class="row gx-5 justify-content-center">

            <div class="col-lg-4 col-md-12 mt-4">
                <button type="button"
                        class="btn btn-outline btn-floating btn-lg" data-mdb-ripple-color="#000000"><i class="fas fa-truck-loading"></i></button>
                <p class="text-justify mt-3">Logistique</p>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <button type="button"
                        class="btn btn-outline btn-floating btn-lg" data-mdb-ripple-color="#000000"> <i class="fas fa-pallet"></i> </button>
                <p class="text-justify mt-3">Messagerie Palette</p>
            </div>

            <div class="col-lg-4 col-md-6 mt-4">
                <button type="button"
                        class="btn btn-outline btn-floating btn-lg" data-mdb-ripple-color="#000000"> <i class="fas fa-truck-moving"></i> </button>
                <p class="text-justify mt-3">Transports Longue Distance</p>
            </div>

        </div>
    </div>
    <!-- Fin Service -->


</body>

<?php require 'footer.php'?>

</html>
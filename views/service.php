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
    <title>Transports Plessier - Services</title>
</head>

<?php require 'header.php'?>

<body>

    <div class="container mt-4">

        <h3 class="font-weight-bold text-center mb-4">Nos Services</h3>

        <div class="row">

            <div class="col-lg-4 col-md-12 mb-4">

                <div class="view z-depth-1">
                    <a href="logistique.php">
                        <img src="../public/img/stockage.jpg" class="img-fluid" alt="smaple image">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-black mt-2">Logistique</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="view z-depth-1">
                    <a href="messageriePalette.php">
                        <img src="../public/img/camion_volupal_2.jpg" class="img-fluid" alt="smaple image">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-black mt-2">Messagerie Palette</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="view z-depth-1">
                    <a href="longueDistance.php">
                        <img src="../public/img/camion_city.jpg" class="img-fluid" alt="smaple image">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <p class="text-black mt-2">Transport Longue Distance</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


</body>

<?php require 'footer.php'?>

</html>

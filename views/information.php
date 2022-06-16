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
    <title>Transports Plessier - Information</title>
</head>

<?php require 'header.php'?>


<body>

    <div class="container mt-4">
    <section class="mb-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col col-5">
                <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top" alt="Vehicule"/>
                    <div class="card-body">
                        <h5 class="card-title mb-3" style="text-align: center">Nos Véhicules</h5>
                        <p class="card-text">
                            Nous possédons différents types de véhicules.
                        </p>
                        <a href="vehicule.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../public/img/evolutrans-hlogo-quadri-baseline.jpeg" class="card-img-top" alt="Evolutrans"/>
                    <div class="card-body">
                        <h5 class="card-title mb-3" style="text-align: center">Evolutrans</h5>
                        <p class="card-text">
                            Evolutrans est un réseau de transporteurs et logisticiens.
                        </p>
                        <a href="evolutrans.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../public/img/volupal.png" class="card-img-top" alt="Volupal"/>
                    <div class="card-body">
                        <h5 class="card-title mb-3" style="text-align: center"> Réseau Volupal</h5>
                        <p class="card-text">
                            Expédition de vos lots palettisés de 1 à 15 palettes
                        </p>
                        <a href="volupal.php" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>


<?php require 'footer.php'?>

</html>
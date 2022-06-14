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
    <title>Transports Plessier - Service - Messagerie Palette</title>
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

    <div class="container mt-4">

        <h1 class="font-weight-bold text-center mb-5"><i class="fas fa-pallet"></i> Messagerie Palette <i class="fas fa-pallet"></i></h1>

        <div class="row justify-content-center">

            <div class="col-lg-4">

                <div class="view overlay z-depth-1">
                    <img src="../public/img/messageriePalette_2.jpg" class="img-fluid" alt="First sample image">
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <p class="mt-5">
                    Dans le service exploitation / Volupal, nous prenons auprès de nos clients des rendez-vous
                    pour assurer les livraisons puis nous gérons les saisies, les suivies et les exploitations de
                    chaque commande Volupal.
                </p>
            </div>
        </div>

        <table class="table align-middle mb-3 mt-5 bg-white text-center">
            <thead class="bg-light">
            <tr>
                <th>Nom</th>
                <th>Rôle</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mathias</td>
                <td>Responsable management</td>
                <td>mathias@plessier.fr</td>
                <td>03.44.00.00.00</td>
            </tr>
            <tr>
                <td>Thierry</td>
                <td>Service exploitation / Volupal</td>
                <td>thierry@plessier.fr</td>
                <td>03.44.00.00.00</td>
            </tr>
            </tbody>
        </table>



    </div>


</body>

<%- include('footer.ejs'); %>

</html>
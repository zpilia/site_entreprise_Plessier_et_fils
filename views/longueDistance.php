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
    <title>Transports Plessier - Service - Transports Longue Distance</title>
</head>

<%- include('header.ejs'); %>

<body>

    <div class="container mt-4">

        <h1 class="font-weight-bold text-center mb-5"><i class="fas fa-truck-moving"></i> Transports Longue Distance <i class="fas fa-truck-moving"></i></h1>

        <div class="row justify-content-center">

            <div class="col-lg-4">

                <div class="view overlay z-depth-1">
                    <img src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg" class="img-fluid" alt="First sample image">
                </div>
            </div>

            <div class="col-lg-6 mb-4">

                <p class="mt-5">
                    Dans le service de Transports longue Distance, ....
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
                <td>David</td>
                <td>Responsable</td>
                <td>davids@plessier.fr</td>
                <td>03.44.00.00.00</td>
            </tr>
            <tr>
                <td>Denis</td>
                <td>Responsable</td>
                <td>denis@plessier.fr</td>
                <td>03.44.00.00.00</td>
            </tr>
            <tr>
                <td>Christophe</td>
                <td>Responsable</td>
                <td>christophe@plessier.fr</td>
                <td>03.44.00.00.00</td>
            </tr>
            </tbody>
        </table>



    </div>


</body>

<%- include('footer.ejs'); %>

</html>
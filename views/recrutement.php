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
    <title>Transports Plessier - Recrutement</title>
</head>

<%- include('header.ejs'); %>

<body>

<section class="dark-grey-text mb-5">

    <h3 class="font-weight-bold text-center mb-4">Nous recrutons</h3>

    <p class="text-center w-responsive mx-auto pb-5">Vous voulez nous rejoindre ? <br>
        Remplissez ce formulaire et nous reviendrons vers vous dans les plus brefs délais.</p>

    <div class="row d-flex justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="POST">
                        <div class="md-form">
                            <label for="form-surname">Nom</label>
                            <input type="text" id="form-surname" class="form-control" name="surname">
                        </div>
                        <br>
                        <div class="md-form">
                            <label for="form-name">Prénom</label>
                            <input type="text" id="form-name" class="form-control" name="name">
                        </div>
                        <br>
                        <div class="md-form">
                            <label for="form-email">Email</label>
                            <input type="email" id="form-email" class="form-control" />
                        </div>
                        <br>
                        <div class="md-form">
                            <label for="form-text">Message</label>
                            <textarea id="form-text" class="form-control md-textarea" rows="3" name="content"></textarea>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-3">
                                    <button type="button" class="btn btn-primary  btn-floating  btn-lg"><i class="fas fa-download"></i></button>
                                    <p class="text-justify">CV</p>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary  btn-floating  btn-lg"><i class="fas fa-download"></i></button>
                                    <p class="text-justify">Lettre de motivation</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-3">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</body>

<%- include('footer.ejs'); %>

</html>

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

<%- include('header.ejs'); %>

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



<%- include('footer.ejs'); %>

</html>
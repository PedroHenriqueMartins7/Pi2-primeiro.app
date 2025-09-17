<?php
require '../vendor/autoload.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" constent="width=device-width, initial-scale=1.0">
    <title>Larika</title>
    <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href = "./css/default.css" rel="stylesheet" />
</head>
<body>

        <nav class = "navbar navbar-expand-lg navbar-light">
            <div class = "container-fluid">
                <a class = "navbar-brand" href="#">
                    <img src = "./img/ham-ico-64.png" alt="" width = "32" height = "32">
                    Larika
    </a>
    <button class = "navbar-toggler" type="button" data-bs-toggler="collapse" data-bs-target="#navbarMain"
        aria-controls="navbarMain" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="colapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home page</a>
                     </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Cardapio</a>
                <ul class="dropdown-menu" aria-labelledby="menuLink">
                    <li>
                        <a class="dropdown-item" href="#">Hamburguer</a>
                    </li>
                     <li>
                        <a class="dropdown-item" href="#">Hot Dog</a>
                    </li>
                     <li>
                        <a class="dropdown-item" href="#">Batatas Recheadas</a>
                    </li>
                     <li>
                        <a class="dropdown-item" href="#">Petiscos</a>
                    </li>
                     <li>
                        <a class="dropdown-item" href="#">Bebidas</a>
                    </li>
                </ul>
            </li>
                      
                 </ul>
         </div>

            

</div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="public/img/hamburger-h500.png" class="d-block" alt="...">
    </div>
         <div class="carousel-item">
        <img src="public/img/hotdog-h500.png" class="d-block" alt="...">
    </div>
     <div class="carousel-item active">
        <img src="public/img/potato-h500.png" class="d-block" alt="...">
    </div>
     <div class="carousel-item active">
        <img src="public/img/snacks-h500.png" class="d-block" alt="...">
    </div>
    </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria hidden="true"></span>
                     <span class="visually-hidden".>Previus</span>
        </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-co trol-next-icom" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main class="container - 3">
    <div class="row">
        <div class="col">
            <img class="card-img-top" src="public/img/hamburger-cartoon-w358.png" alt="card image cap">
            <div class="card-body">
                <p class="card-text">some quick example text to build on the card title and make up the bulk of the card´s contente.</p>
            </div>
        </div> 
    </div>
        <div class="col">
            <div class="card text-white bg-warning ">
                <img class="card-img-top" src="public/img/hotdog-cartoon-w358.png" alt="card image cap">
                <div class="card-body">
                    <p class="card-text">some quick example text to build on the card title and make up the bulk of the card´s contente.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-warning ">
                <img class="card-img-top" src="public/img/potato-cartoon-w358.png" alt="card image cap">
                <div class="card-body">
                    <p class="card-text">some quick example text to build on the card title and make up the bulk of the card´s contente.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-white bg-warning ">
                <img class="card-img-top" src="public/img/snacks-cartoon-w358.png" alt="card image cap">
                <div class="card-body">
                    <p class="card-text">some quick example text to build on the card title and make up the bulk of the card´s contente.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="text-warning bg-danger">
    <div class="container">
        <div class="row">
            <div class="col" style="text-align: center;">
                <img class="mb-2" src="public/img/ham-ico-64.png" alt="" width="64" height="64">
                <span class="display-5">Larika</span>
                <small class="d-bloc mb-3">&copy;2021</small>
            </div>
        </div>
    </div>
</footer>
        
        

        


<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" /></script>


</body>
</html>


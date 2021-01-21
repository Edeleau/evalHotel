<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Chambres</title>
    <?php
    include("./link.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-9 mx-auto">
                    <div class="container">
                        <div id="monSlider" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#monSlider" data-slide-to="0"></li>
                                <li data-target="#monSlider" data-slide-to="1"></li>
                                <li data-target="#monSlider" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/img/room/room04.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block d-none">
                                        <h2>Lorem ipsum dolor sit.</h2>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, placeat!
                                    </div>
                                </div>
                                <!-- d-block => display: block // w-100 => width: 100 -->
                                <div class="carousel-item">
                                    <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block d-none">
                                        <h2>Lorem ipsum dolor sit.</h2>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, placeat!
                                    </div>
                                    <!-- le d-none est là pour enlever la légende dans le cas où l'affichage se fait sur mobile -->
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/sdb03.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-md-block">
                                        <h2>Lorem ipsum dolor sit.</h2>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, placeat!
                                    </div>
                                </div>
                            </div>
                            <a href="#monSlider" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Suivant</span>
                            </a>

                            <a href="#monSlider" class="carousel-control-next" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Suivant</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
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
    <section class="sectionSize">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-9 col-12 mx-auto my-auto">
                    <div class="sectionTitle pb-3">
                        <h3 class="gammeTitle">Chambres et suites</h3>
                        <div class="smallHr"></div>
                        <h4 class="mb-5">Composez votre séjour parisien</h4>
                    </div>
                    <p class="text-center">
                        Déclinées en trois catégories (Classique, Confort et Deluxe), les 41 Chambres se caractérisent par un style unique. D’une superficie moyenne de 35m², ces chambres, toutes différentes, offrent espace et confort.<br><br>
                        Les Suites d’une superficie de 70 à 75m², s’ouvrent pour la plupart sur la cour intérieure de l’hôtel garantissant calme et tranquillité.
                    </p>
                    <div class="container mt-2">
                        <div id="monSlider" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                                <li data-target="#monSlider" data-slide-to="0"></li>
                                <li data-target="#monSlider" data-slide-to="1"></li>
                                <li data-target="#monSlider" data-slide-to="2"></li>
                                <li data-target="#monSlider" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/img/room/room04.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption">
                                        <h2><a href="chambre-classique.php">Chambre Classique</a></h2>
                                        <a href="chambre-classique.php" class="linkButton chooseButton">En savoir plus</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption">
                                        <h2><a href="chambre-confort.php">Chambre Confort</a></h2>
                                        <a href="chambre-confort.php" class="linkButton chooseButton">En savoir plus</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/sdb03.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption">
                                        <h2><a href="chambre-deluxe.php">Chambre Deluxe</a></h2>
                                        <a href="chambre-deluxe.php" class="linkButton chooseButton">En savoir plus</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption">
                                        <h2><a href="chambre-suite.php">Suite</a></h2>
                                        <a href="chambre-suite.php" class="linkButton chooseButton">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#monSlider" role="button" data-slide="prev">
                                <img src="./assets/img/arrow-left.png" class="d-block w-50 arrowColor" alt="arrow left">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#monSlider" role="button" data-slide="next">
                                <img src="./assets/img/arrow-right.png" class="d-block w-50 arrowColor" alt="arrow right">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
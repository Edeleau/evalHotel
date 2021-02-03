<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Restaurant</title>
    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/restaurant.css">
    <?php
    include("./link-queries.php");
    ?>
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <section class="sectionSize">
        <div class="sectionTitle col-10 mx-auto mb-5">
            <h2 class="gammeTitle">Restaurant</h2>
            <div class="smallHr"></div>
            <h4>Un cadre idylique pour une dégustation atypique</h4>
        </div>
        <div id="restaurantOverview">
            <div class="col-12 mx-auto text-center">
                <p>Une table parisienne à deux pas de la Seine, dans le cadre de l'élégant Hôtel 5 étoiles : Hotelcop, vous comblera été comme hiver
                    avec sa « terrasse-jardin », son ambiance velours,
                    son coin cheminée et son piano-bar.</p>
                <p>Le chef Damian Vera propose une cuisine goûteuse et gourmande, composée exclusivement à partir de produits rigoureusement sélectionnés.</p>
            </div>
        </div>
        <div id="restaurantGamme" class="container">
            <div class="row ml-0 mr-0">
                <div class="sectionTitle col-12 mx-auto mb-5">
                    <h4>Découvrez notre offre gourmande</h4>
                    <div class="smallHr mb-3"></div>
                </div>
                <div class="col-xl-6 col-12 mx-auto ml-0 mr-0 p-0 d-xl-none ">
                    <img src="./assets/img/restaurant/restaurant06.jpg" class="img-fluid" alt="plat 1">
                </div>
                <div class="carteDescription text-center col-xl-6 col-12 mx-auto ml-0 mr-0 px-5">
                    <h5>Carte Brasserie</h5>
                    <p>Installé au calme de l’agitation parisienne, découvrez des
                        grands classiques et des créations maison concoctés
                        au feu de bois par notre Chef et son équipe.</p>
                    <p class="linkRestaurantContainer text-center"><a class="linkRestaurant underline" href="./assets/doc/carte_suggestions_web.pdf" target="_blank">Découvrir</a></p>
                </div>
                <div class="col-xl-6 col-12 mx-auto ml-0 mr-0 p-0 d-xl-block d-none">
                    <img src="./assets/img/restaurant/restaurant06.jpg" class="img-fluid" alt="plat 1">
                </div>
                <div class="row ml-0 mr-0">
                    <div class="col-xl-6 col-12 mx-auto ml-0 mr-0 p-0">
                        <img src="./assets/img/restaurant/restaurant13.jpg" class="img-fluid" alt="plat 2">
                    </div>
                    <div class="carteDescription text-center col-xl-6 col-12 mx-auto ml-0 mr-0 px-5">
                        <h5>Carte Dégustation</h5>
                        <p> Une carte riche et colorée aux saveur d'autres mondes. Proposé en 6 escales, ce menu gourmand dévoile des produits d’exception – dont certains issus du jardin du Chef - sublimés par d’audacieuses associations de saveurs.</p>
                        <p class="linkRestaurantContainer text-center"><a class="linkRestaurant underline" href="./assets/doc/carte_suggestions_web.pdf" target="_blank">Découvrir</a></p>
                    </div>
                    <div class="col-xl-6 col-12 mx-auto ml-0 mr-0 p-0 d-xl-none ">
                        <img src="./assets/img/restaurant/restaurant14.jpg" class="img-fluid" alt="plat 3">
                    </div>
                    <div class="carteDescription text-center col-xl-6 col-12 mx-auto ml-0 mr-0 px-5">
                        <h5>Carte Restaurant</h5>
                        <p> Notre chef Damian Vera et son équipe sont impatients d’accueillir les amoureux de la gastronomie. Découvrez une cuisine créative et raffinée, dans une ambiance intime et chaleureuse.</p>
                        <p class="linkRestaurantContainer text-center"><a class="linkRestaurant underline" href="./assets/doc/carte_suggestions_web.pdf" target="_blank">Découvrir</a></p>
                    </div>
                    <div class="col-xl-6 col-12 mx-auto ml-0 mr-0 p-0 d-xl-block d-none">
                        <img src="./assets/img/restaurant/restaurant14.jpg" class="img-fluid" alt="plat 3 ">
                    </div>
                </div>
            </div>
    </section>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Home</title>

    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/index.css">
    <?php
    include("./link-queries.php");
    ?>
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <main>
        <div id="landingPage1" class="container-fluid">
            <div class="container containerLandingPage1">
                <div class="row ml-0 mr-0">
                    <div class="col-12 p-0">
                        <div class="container mt-2 pl-0 pr-0">
                            <div id="monSlider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4500">
                                <ol class="carousel-indicators">
                                    <li data-target="#monSlider" data-slide-to="0"></li>
                                    <li data-target="#monSlider" data-slide-to="1"></li>
                                    <li data-target="#monSlider" data-slide-to="2"></li>
                                    <li data-target="#monSlider" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active indexBgImg1"></div>
                                    <div class="carousel-item indexBgImg2"></div>
                                    <div class="carousel-item indexBgImg3"></div>
                                    <div class="carousel-item indexBgImg4"></div>
                                </div>
                                <a class="carousel-control-prev" href="#monSlider" role="button" data-slide="prev">
                                    <img src="./assets/img/arrow-left.png" class="d-block arrowIndexWidth arrowColor" alt="arrow left">
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#monSlider" role="button" data-slide="next">
                                    <img src="./assets/img/arrow-right.png" class="d-block arrowIndexWidth arrowColor" alt="arrow right">
                                    <span class="sr-only">Next</span>
                                </a>
                                <img id="logoLandingPage" src="./assets/img/logo_projet_front.png" alt="logo Hotelcop">
                                <a id="reserveButton" class="linkButton" href="./reserve.php">Réservez</a>
                                <div id="warning" href="./reserve.php">
                                    <p>Ce site web est développé dans le cadre d'un projet personnel d'école et aucunement dans un but commercial. Toutes les informations présentes sur ce site web sont purement fictives et n'ont aucune réalité juridique. <a>J'ai compris.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <a href="#landingPage2"></a>
    <section id="landingPage2" class="container-fluid">
        <div class="sectionTitle">
            <h2>Tour d'horizon</h2>
            <div class="smallHr"></div>
            <h3>HOTELCOP</h3>
        </div>
        <div id="whoWeAreContainer" class="row">
            <div id="imgWhoWeAre1" class="col-xl-7 ml-auto mr-auto col-12">
                <img src="./assets/img/who-we-are/tour-eiffel.jpg" class="photoResize" alt="tour eiffel">
            </div>
            <div id="whoWeAreText" class="col-xl-4 col-11 pl-0">
                <h4>Le Prestige Hotelcop</h4>
                <p>L'hôtel Hotelcop situé dans le 8ème arrondissement à deux pas du pont d'Alma impose une vision inédite de l‘hôtellerie parisienne : faire découvrir « le Paris des parisiens ». L’hôtel aux prestations haut de gamme revendique une authentique simplicité. Dans son décor architectural ou le classique est confronté à d’audacieuses touches modernes, l’épicurisme est une religion : chambres et suites d'hôtel de luxe à Paris, sports et soins personnalisés, piscine hors du commun, café et restaurant chic, bar lounge parisien, terrasse luxuriante. Ce lieu de vie hybride et complet du 8ème arrondissement de Paris accueille riverains, touristes, femmes et hommes d’affaires en toute harmonie.
                </p>
            </div>
        </div>
    </section>
    <a href="#landingPage3"></a>
    <section id="landingPage3" class="container-fluid">
        <div class="sectionTitle sectionRoom">
            <h2>Le Séjour</h2>
            <div class="smallHr"></div>
            <h3>HOTELCOP</h3>
        </div>

        <div id="journey" class="row mx-auto">
            <div id="imgRoom2" class="col-lg-3 mr-auto">
                <img src="./assets/img/room/suite02.jpg" alt="Suite 02">
            </div>

            <div id="imgRoom1" class="col-lg-6 col-md-9 mx-md-auto col-sm-12">
                <a href="chambre-suite.php" class="linkButton imgButton imgButtonOut">Découvrir</a>
                <img src="./assets/img/room/suite08.jpg" class="w-100" alt="Suite 8">
                <div class="imgLegend legendOut">
                    <p>Nos Suites</p>
                </div>
            </div>

            <div id="imgRoom3" class="col-lg-3">
                <img src="./assets/img/room/suite01.jpg" alt="Suite 1">
            </div>
        </div>
        <div id="linkRoomContainer" class="col-12 text-center">
            <div id="lineUpRoom1" class="lineWhite"></div>
            <p><a id="linkRoom" class="underline" href="room.php">Toutes nos chambres</a></p>
        </div>
    </section>
    <section id="landingPage4" class="container-fluid">
        <div class="sectionTitle">
            <h2>L'Expérience</h2>
            <div class="smallHr"></div>
            <h3>HOTELCOP</h3>
        </div>
        <div id="experience" class="row mx-auto">
            <div id="imgExperience1" class="col-xl-5 col-lg-5 col-md-7 col-sm-7 col-10 mx-auto my-lg-auto my-xl-auto">
                <a href="care.php" class="linkButton imgButton imgButtonOut">Découvrir</a>
                <img src="./assets/img/care/care05.jpg" class="img-fluid" alt="Spa & Bien-être">
                <p class="imgLegend legendOut">Spa & Bien-être</p>
            </div>
            <div id="imgExperience2" class="col-xl-5 col-lg-5 col-md-7  col-sm-7 col-10 mx-auto my-lg-auto my-xl-auto">
                <a href="restaurant.php" class="linkButton imgButton imgButtonOut">Découvrir</a>
                <img src="./assets/img/restaurant/restaurant03.jpg" class="img-fluid" alt="restaurant ">
                <p class="imgLegend legendOut">Restaurant</p>
            </div>
        </div>

    </section>
<<<<<<< HEAD
    <div class="newsletterIndexContainer text-center">
        <form action="#" method="POST" class="my-auto">
            <label for="newsletterIndex">Abonnez-vous à notre Newsletter</label>
            <br>
            <input id="newsletterIndex" type="email" name="emailNewsletter" placeholder="Mon adresse Email">
            <input class="newsletterIndexSubmit" type="submit" value="Envoyer">
        </form>
    </div>
=======
    
>>>>>>> fa470570d7445269029241ada4b5135065e8103f
    <?php
    include("./footer.php");
    ?>
    <script src="./assets/js/index.js"></script>

</body>

</html>
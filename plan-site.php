<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Qui sommes nous ?</title>
    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/plan-site.css">
    <?php
    include("./link-queries.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>

    <section class="sectionSize">
        <div class="container-fluid">
            <div class="row ml-0 mr-0">
                <div class="sectionTitle col-10 mx-auto">
                    <h3 class="gammeTitle">Plan du site</h3>
                    <div class="smallHr mb-5"></div>
                </div>
            </div>
            <div class="row mx-auto w-75">
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6  mx-auto">
                    <h5><a href="index.html">Accueil</a></h5>
                    <ul>
                        <li><a href="who-we-are.html">Qui sommes nous ?</a></li>
                        <li><a href="event.html">Évenèments</a></li>
                        <li><a href="actu.html">Actualités</a></li>
                        <li><a href="advise.html">Avis</a></li>
                        <li><a href="presse.html">Presse</a></li>
                        <li><a href="access.html">Accès</a></li>
                        <li><a href="contact.html">Nous contacter</a></li>
                        <li><a href="recrutement.html">Recrutement</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6  mx-auto">
                    <h5><a href="room.html">Chambres</a></h5>
                    <ul>
                        <li><a href="chambre-classique.html">Classique</a></li>
                        <li><a href="chambre-confort.html">Confort</a></li>
                        <li><a href="chambre-deluxe.html">Deluxe</a></li>
                        <li><a href="chambre-suite.html">Suite</a></li>
                    </ul>
                    <h5><a href="care.html">Spa</a></h5>
                    <h5><a href="restaurant.html">Restaurant</a></h5>

                </div>
                <div class="col-xl-2 col-lg-3 col-md-5 col-sm-6  mx-auto">
                    <h5>Réservations et conditions</h5>
                    <ul>
                        <li><a href="reservation.html">Réservation</a></li>
                        <li><a href="cart.html">Panier</a></li>
                        <li><a href="cgv.html">Conditions générales de vente</a></li>
                        <li><a href="mentions-legales.html">Mentions légales</a></li>
                    </ul>
                </div>

            </div>



        </div>
    </section>


    <?php
    include("./footer.php");
    ?>
</body>

</html>
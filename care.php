<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Soin et bien être</title>
    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/care.css">
    <?php
    include("./link-queries.php");
    ?>
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <section class="sectionSize mb-5">
        <div class="container">
            <div class="row ml-0 mr-0">
                <div class="col-xl-9 col-lg-9 col-md-9 col-12 mx-auto my-auto ml-0 mr-0">
                    <div class="sectionTitle pb-3">
                        <h2 class="gammeTitle">Soin & Bien-Être</h2>
                        <div class="smallHr"></div>
                    </div>
                    <div class="container mt-2 pl-0 pr-0">
                        <div id="monSlider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4500">
                            <ol class="carousel-indicators">
                                <li data-target="#monSlider" data-slide-to="0"></li>
                                <li data-target="#monSlider" data-slide-to="1"></li>
                                <li data-target="#monSlider" data-slide-to="2"></li>
                                <li data-target="#monSlider" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/img/room/room04.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/sdb03.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
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
        <h4 class="mb-2 mt-5 text-center">Spa & Piscine</h4>
        <div class="smallHr mb-5"></div>
        <div class="row">
            <div class="text-center col-xl-8 col-lg-8 col-11 mx-auto">
                <p>Accessible aux hôtes d'Hotelcop comme aux visiteurs, notre Spa s’étend sur quelques 250 m². Avec son décor sobre et luxueux, cet espace aux teintes douces invite à la relaxation.</p>

                <p>Dès l’accueil, on se sent choyé. Dans les vestiaires, peignoirs enveloppants, coiffeuses et larges fauteuils. Avec deux salons de soins dont un duo, un sauna, un hammam, une salle de fitness et une piscine de 15 mètres, le Spa Hotelcop est une destination en soi.</p>
            </div>
        </div>
        <div id="spaDescritpion" class="row">
            <div id="spaHours" class="pr-xl-5 pr-lg-5 mt-5 col-xl-4 col-lg-4 col-md-10 col-sm-10 col-11">
                <h5 class="mb-4 text-xl-right text-lg-right text-center">Horaires d'Ouverture</h5>
                <div class="text-xl-right text-lg-right text-center">
                    <p>Pour les hôtes Hotelcop :</p>
                    <p>7h00 - 23h00</p>


                    <p>Pour les clients extérieurs :</p>
                    <p>10h00 - 20h00 du dimanche au vendredi</p>
                    <p>10h00 - 20h30 le samedi</p>
                    <p>Les soins sont prodigués au Spa de 10h00 à 19h30</p>
                </div>
            </div>
            <div id="spaPrices" class="pl-xl-5 pl-lg-5 mt-5 col-xl-4 col-lg-4 col-md-10 col-sm-10 col-11">
                <h5 class="mb-4 text-xl-left text-lg-left text-center">Tarification</h5>
                <div class="text-xl-left text-lg-left text-center">
                    <p>Accès journée Spa : 250€</p>
                    <p>Complément pour tout rendez-vous d’une durée
                        supérieure à 1 heure : 50 €</p>
                    <p>Complément pour tout rendez-vous d’une durée
                        inférieure à 1 heure : 100 €</p>
                    <p>L’Accès Spa est offert pour tout rendez-vous d’une durée
                        supérieure à 2 heures (le soin et l’accès au Spa doivent
                        être effectués le même jour).</p>
                    <p>Gratuit à partir de 2h de soins: accès possible à la piscine et aux installations, avec un supplément de 50€ à partir d’1h30 de soin.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionSize bgColor1-Op2">
        <div id="care" class="container-fluid">
            <div class="sectionTitle">
                <h4 class="mb-0">Notre gamme de soins</h4>
                <div class="smallHr mb-5"></div>
            </div>
            <div id="care1" class="row mx-auto">
                <div class="careCard col-xl-5 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto mb-4vh">
                    <div id="imgCare1">
                        <a href="reserve.php" class="linkButton imgButton">Réserver</a>
                        <img src="./assets/img/care/soin01.jpeg" class="img-fluid" alt="image soin détente">
                        <p class="imgLegend legendOut">Soin Détente</p>
                    </div>
                    <p>Durée : 1h</p>
                    <p>Tarif : 185€</p>
                    <p>Le toucher expert “L’Ayuroma Touch” associé aux pouvoirs des huiles Clarins vous invite à l’évasion. La relaxation est profonde grâce au massage du visage et cuir chevelu.</p>
                </div>


                <div class="careCard col-xl-5 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto">
                    <div id="imgCare2">
                        <a href="reserve.php" class="linkButton imgButton">Réserver</a>
                        <img src="./assets/img/care/soin01.jpeg" class="img-fluid" alt="image soin découverte">
                        <p class="imgLegend legendOut">Soin Découverte</p>
                    </div>
                    <p>Durée : 1h30</p>
                    <p>Tarif : 200€</p>
                    <p>Goûtez au plaisir et aux bienfaits d’un massage profond se concentrant sur les muscles du trapèze, du visage et le cuir
                        chevelu en vous offrant une relaxation infinie. Pensé pour être une expérience de pure détente, ce soin vous apportera
                        une sensation de légèreté et de volupté.</p>
                </div>
            </div>
            <div id="care2" class="row mx-auto">
                <div class="careCard col-xl-5 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto mb-4vh">
                    <div id="imgCare3">
                        <a href="reserve.php" class="linkButton imgButton">Réserver</a>
                        <img src="./assets/img/care/soin01.jpeg" class="img-fluid" alt="image soin relaxant">
                        <p class="imgLegend legendOut">Soin Relaxant</p>
                    </div>
                    <p>Durée : 1h20</p>
                    <p>Tarif : 220€</p>
                    <p>Ce massage pratiqué avec la pression de votre choix est une invitation à réconcilier le corps et l’esprit. Idéal pour les
                        personnes surmenées, fatiguées ou tendues, il favorise le lâcher-prise et l’éveil des sens. Vous retrouvez une paix
                        intérieure profonde et durable.</p>
                </div>


                <div class="careCard col-xl-5 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto">
                    <div id="imgCare4">
                        <a href="reserve.php" class="linkButton imgButton">Réserver</a>
                        <img src="./assets/img/care/soin01.jpeg" class="img-fluid" alt="image soin découverte">
                        <p class="imgLegend legendOut">Soin Plaisir</p>
                    </div>
                    <p>Durée : 1h30</p>
                    <p>Tarif : 250€</p>
                    <p>Ce massage relaxant qui revitalise et équilibre votre corps et votre esprit a été conçu en parfaite association avec les textures
                        onctueuses et riches d’une sélection d’huiles délicatement parfumées. Ce modelage délicieusement enveloppant se
                        compose d’étirements et d’enchaînements de mouvements ciblés pour évacuer stress et tensions. Vous retrouvez toute
                        votre sérénité et une belle énergie vitale.</p>
                </div>
            </div>

            <div id="care3" class="row mx-auto">
                <div class="careCard col-xl-5 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto">
                    <div id="imgCare5">
                        <a href="reserve.php" class="linkButton imgButton">Réserver</a>
                        <img src="./assets/img/care/soin01.jpeg" class="img-fluid" alt="image soin détente">
                        <p class="imgLegend legendOut">Soin Évasion</p>
                    </div>
                    <p>Durée : 1h30 à 2h</p>
                    <p>Tarif : 220 à 250€</p>
                    <p>Cette thérapie est basée sur des techniques orientales qui vous permettront d’éprouver un sentiment de détente totale.
                        En appliquant une pression sur les points méridiens spécifiques des pieds qui sont reliés aux organes principaux du corps,
                        la réflexologie permet de débloquer les énergies pour qu’elles circulent librement, en relâchant les tensions accumulées.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
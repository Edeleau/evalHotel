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
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <section class="sectionSize">
        <div id="care" class="container-fluid">
            <div class="sectionTitle">
                <h2>Soin & Bien-être</h2>
                <div class="smallHr"></div>
                <h3>Notre séléction</h3>
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
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Home</title>
    <?php
    include("./link.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <main>
        <div id="landingPage1" class="container-fluid">
            <img id="logoLandingPage" src="./assets/img/logo_projet_front.png" alt="logo Hotelcop">
            <a id="reserveButton" class="linkButton" href="./reserve.php">Réservez</a>
        </div>
    </main>
    <hr>
    <section id="landingPage2" class="container-fluid">
        <div class="sectionTitle">
            <h2>Tour d'horizon</h2>
            <div class="smallHr"></div>
            <h3>HOTELCOP</h3>
        </div>
        <div id="whoWeAreContainer" class="row">
            <div id="imgTest1" class="col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
            <div id="whoWeAreText" class="col-lg-5 col-md-12">
                <h4>Le Prestige Hotelcop</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro accusantium enim mollitia quo aliquid eaque minus magnam repellendus suscipit. Non est beatae sed praesentium omnis repellendus mollitia ullam impedit incidunt.
                    Laudantium, unde? Temporibus iusto facilis id repellat iste autem nobis fuga quibusdam voluptatem molestias adipisci officia, consequuntur doloribus suscipit fugit numquam molestiae? Laboriosam voluptatem numquam aliquid hic expedita et non.
                    Voluptatem eaque saepe neque tempore ullam placeat earum nisi atque. Minus magnam repellendus nobis provident voluptates incidunt, culpa in laborum temporibus voluptatibus quidem sed expedita et porro ex accusamus aspernatur.
                    Error cumque, debitis ut fuga, voluptas tempora consectetur reiciendis maxime id necessitatibus ullam a provident. Laboriosam tempore, alias cumque earum incidunt facilis illo dolorem dolores nesciunt nulla quasi aliquam est?
                </p>
            </div>
        </div>
    </section>
    <!-- FIXME: -->
    <section id="landingPage3" class="container-fluid">
        <div class="sectionTitle">
            <h2>Le Séjour</h2>
            <div class="smallHr"></div>
            <h3>HOTELCOP</h3>
        </div>
        <div id="journey" class="row">
            <div id="imgRoom2" class="col-lg-3">
                <!-- <div id="imgRoom2Hover" class="imgHover"></div> -->
            </div>

            <div id="imgRoom1" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <!-- <div id="imgRoom1Hover" class="imgHover"></div> -->
                <a class="linkButton journeyButton">Découvrir</a>
                <img src="./assets/img/room/room01.jpg" alt="chambre 01" style="height: 100%;">
            </div>

            <div id="imgRoom3" class="col-lg-3">
                <!-- <div id="imgRoom3Hover" class="imgHover"></div> -->
            </div>

        </div>
        </div>
    </section>
    <section id="landingPage4" class="container-fluid">
        <div class="sectionTitle">
            <h2>L'Expérience</h2>
            <div class="smallHr"></div>
            <h3>HOTELCOP</h3>
        </div>
        <div id="experience" class="row">
            <div id="imgExperience1" class="col-lg-5">
                <a href="restaurant.php" class="linkButton experienceButton">Découvrir</a>
            </div>
            <div id="imgExperience2" class="col-lg-5 ml-auto">
                <a href="care.php" class="linkButton experienceButton">Découvrir</a>
            </div>
        </div>
    </section>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP</title>
    <?php
    include("./link.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <section class="sectionSize">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 mx-auto my-auto">
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
                    <div class="description text-center mx-auto col-12 col-xl-9 col-lg-9">
                        <h3 class="gammeTitle text-center mt-5">Chambre Classique</h3>
                        <div class="smallHr mb-4"></div>
                        <p class="text-center"> Imaginée comme un atelier d’artiste, la Chambre Classique est un véritable havre de paix baigné de lumière naturelle.
                        </p>
                        <p class="pb-4">
                            La Chambre Classique constitue le pied-à-terre idéal pour un séjour parisien inoubliable. Cette chambre élégante dispose d’une guitare acoustique pour laisser libre cours à votre créativité et d’une sélection d’œuvres d’art de la collection privée de l’hôtel. Nous disposons de 32 unités dans cette catégorie.
                        </p>
                        <a href="reserve.php" class="linkButton">Réserver</a>
                        <div class="row mt-5">
                            <div class="col-xl-2 col-lg-3 col-12 d-flex ml-auto  justify-content-center iconContainer">
                                <img src="./assets/img/icon/icon-person.png" class="iconSize my-auto" alt="nombre de personne">
                                <p class="my-auto pl-3">2 personnes</p>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-12 d-flex  justify-content-center iconContainer">
                                <img src="./assets/img/icon/icon-bed.png" class="iconSize my-auto" alt="nombre de personne">
                                <p class="my-auto pl-3">Double</p>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-12 d-flex  justify-content-center iconContainer">
                                <img src="./assets/img/icon/icon-size.png" class="iconSize my-auto" alt="taille de la pièce">
                                <p class="my-auto pl-3">27m²</p>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-12 d-flex  justify-content-center iconContainer">
                                <img src="./assets/img/icon/icon-bath.png" class="iconSize my-auto" alt="nombre de personne">
                                <p class="my-auto pl-3">Douche & Baignoire</p>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-12 d-flex mr-auto  justify-content-center iconContainer">
                                <img src="./assets/img/icon/icon-wifi.png" class="iconSize my-auto" alt="nombre de personne">
                                <p class="my-auto pl-3">Wifi Gratuit</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="text-center mt-5 gammeTitle">Equipements & Services</h4>
                    <div class="smallHr mb-4"></div>
                    <div class="mx-auto width40">
                        <p>- Configuration: 1 chambre, 1 espace bureau, 1 dressing, 1 salle de bains</p>
                        <p>- Mobilier d’exception créé par le designer contemporain Philippe Starck</p>
                        <p> - Minibar réfrigéré avec une sélection de produits artisanaux français</p>
                        <p>- Ecran de télévision plasma HD offrant un bouquet de 99 chaînes de plus de 20 pays</p>
                        <p>- Produits d’accueil Clarins disponibles dans notre spacieuse salle de bain</p>
                        <p>- Accès illimité à notre Spa My Blend by Clarins de 1,500 m2 (piscine, fitness, sauna, watsu)</p>
                        <p>- Oeuvres d’art issues de la Collection Privée de l’Hôtel</p>
                        <p>- Sélection de livres d’art mise à disposition</p>
                        <p>- Guitare acoustique</p>
                        <p>- Linge de lit en lin et oreillers en plumes d’oie</p>
                        <p>- Newsletter artistique de notre Art Concierge</p>
                        <p>- Room Service disponible 24h/24</p>
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
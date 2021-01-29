<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Qui sommes nous ?</title>
    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/whoweare.css">
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 window">
            <div class="col-xl-9 col-lg-9 col-md-9 col-12 mx-auto my-auto">
                <div class="title text-center">
                    <h2 class="m-0">L’excellence comme un art de Vivre</h2>
                    <div class="smallHr"></div>
                    <h4 class="mb-5">Composez votre séjour parisien</h4>
                </div>
                <p class="text-center pt-3">
                    Vivez L'Hotelcop Paris
                    Qualité inhérente de l’hôtel L'Hotelcop Paris, l'excellence du service se traduit par un engagement indéfectible des équipes et un art de recevoir qui perpétuent une tradition sans se départir de modernité.
                </p>
                <p class="text-center pb-3">L'Hotelcop Hôtel***** & Spa fait renaître une adresse intemporelle habitée d’histoire, inspirée par l’élégante Cléo de Mérode, muse qui incarna la “Parisienne” à travers le monde.

                    À la fois danseuse, actrice, artiste, Cléo inspira les plus grands de son temps :
                    Klimt, Nadar, Lautrec ou encore Marcel Proust. Son ami, le compositeur Reynaldho Hahn, la surnommait “Joli petit narcisse”.</p>
            </div>
            <div id="monSlider" class="carousel slide mb-5 mt-5" data-ride="carousel" data-interval="4500">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row ">
                            <div class="col-11 col-sm-11 col-ml-6 col-xl-6 my-auto mx-auto text-caroussel">
                                <h3>Un peu d’histoire</h3>
                                <p> Peu le savent mais l’hôtel L'Hotelcop Paris a ouvert ses portes en 1850. Le quartier de la Madeleine, alors en plein essor, est un des plus animés de la capitale avec ses théâtres, ses cafés, ses commerces de bouches et ses enseignes de luxe.

                                    Si l’origine du nom de l’hôtel demeure à ce jour un mystère, la mode étant alors à l’anglomanie, il est fort à parier que « Burgundy » fut choisi pour satisfaire la clientèle de l’Angleterre victorienne très présente à Paris. Depuis près de 170 ans, L'Hotelcop, qui a connu plusieurs vies au gré de ses divers propriétaires, accueille les voyageurs du monde entier, faisant de leur séjour parisien un moment d’exception.

                                    Entièrement restructuré au cours de grands travaux en 2010, L'Hotelcop Paris se veut aujourd’hui le reflet d’une demeure particulière idéale au cœur de Paris.</p>
                            </div>
                            <div class="col-12 col-sm12 col-ml-6 col-xl-6  img-bg2">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ">
                            <div class="col-11 col-sm-11 col-ml-6 col-xl-6 my-auto mx-auto text-caroussel">
                                <h3>Une maison d'esthète</h3>
                                <p>Guy de Rougemont, peintre sculpteur membre de l’Académie des Beaux-Arts, a investi l’hôtel du lobby à la Verrière en passant par la réception, faisant de chaque espace un écrin pour ses œuvres. La sculpture-tableau, comme une explosion de couleurs dominant le grand comptoir d’accueil conçu par l’ébéniste Luc Avenel, et le puzzle blanc et gris entrelacé de rubans de laitons sur le sol ouvrant le chemin vers la Verrière où trône une imposante sculpture de marbre composent un décor qui ne laisse pas indifférent. Les éléments du mobilier choisis par l'architecte d'intérieur Patrick Juliot achèvent de conférer à cet espace ouvert à la fois sur le restaurant, sur le bar, et sur la ville, ce style si particulier qui fait aujourd’hui la signature du Burgundy Paris. Un style qu'il a su interpréter de façon drastiquement différente au Restaurant Le Baudelaire mais aussi dans l’ensemble des Suites.</p>

                            </div>
                            <div class="col-12 col-sm-12 col-ml-6 col-xl-6 img-bg1">

                            </div>
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
    <?php
    include("./footer.php");
    ?>
</body>

</html>
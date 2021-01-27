<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Avis</title>
    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/form.css">
    <link rel="stylesheet" href="./assets/css/advise.css">
</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <div class="container-fluid window">
        <div class="row">
            <div class="sectionTitle col-12">
                <h2 class="col-12 text-center mb-3">Votre expérience</h2>
                <div class="smallHr"></div>
            </div>
            <ul class="nav nav-pills mt-5 col-12 col-xl-8 col-sm-10 col-md-8 col-ml-8 mx-auto justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item col-5 col-sm-5 mb-2 col-md-4 col-ml-3 text-center">
                    <a class="nav-link active" id="pills-general-tab" data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">Général</a>
                </li>
                <li class="nav-item col-5 col-sm-5 mb-2 col-md-4 col-ml-3 text-center">
                    <a class="nav-link" id="pills-chambre-tab" data-toggle="pill" href="#pills-chambre" role="tab" aria-controls="pills-chambre" aria-selected="false">Chambres</a>
                </li>
                <li class="nav-item col-5 col-sm-5 mb-2 col-md-4 col-ml-3 text-center">
                    <a class="nav-link" id="pills-restaurant-tab" data-toggle="pill" href="#pills-restaurant" role="tab" aria-controls="pills-restaurant" aria-selected="false">Restaurant</a>
                </li>
                <li class="nav-item col-5 col-sm-5 mb-2 col-md-4 col-ml-3 text-center">
                    <a class="nav-link" id="pills-soin-tab" data-toggle="pill" href="#pills-soin" role="tab" aria-controls="pills-soin" aria-selected="false">Soins</a>
                </li>
            </ul>
            <div class="tab-content col-11 col-xl-8 col-sm-10 col-md-8 col-ml-8 mx-auto" id="pills-tabContent">

                <div class="tab-pane mt-3 fade show active" id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Le meilleur séjour de ma vie " </h4>

                        <p class="font-italic"> J'ai séjourné au «Paris France Hotel» et j'ai trouvé cet hôtel charmant. Il est situé dans le troisième arrondissement, juste à côté d'une station de métro, et les chambres sont simples, très propres et le personnel est plutôt sympa. Je ne voulais pas dépenser tout mon argent dans un hôtel cher. J'avais une chambre au sixième étage, à côté de l'église, ce qui offrait beaucoup d'intimité. Je pouvais voir la Tour Eiffel depuis ma chambre et le soir j'ai apprécié le spectacle de lumière. C'était utile d'avoir un ascenseur, mais c'était petit. Mon petit déjeuner était inclus et j'ai mangé quand je suis descendu l'escalier le matin. Il y avait une option de céréales, pain grillé, fruits, yaourts, croissants et café. Je recommanderais cet hôtel à tous ceux qui souhaitent un hôtel pas cher et magnifique à Paris.</p>
                        <p class='font-weight-bold ml-5 signature'>Charlotte</p>
                    </div>
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Un accueil sans pareil " </h4>
                        <p> Très bon accueil à la réception.
                            Chambre simple mais correcte, salle de bain propre.

                            Point négatif le manque de prises près du lit, pas pratique !
                            Il faisait assez froid également dans la chambre.

                            Je conseil cet hôtel bon rapport qualité prix !</p>
                        <p class='font-weight-bold ml-5 signature'>George</p>
                    </div>
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Simple mais très bon ! " </h4>
                        <p> Très bon accueil à la réception.
                            Chambre simple mais correcte, salle de bain propre.

                            Point négatif le manque de prises près du lit, pas pratique !
                            Il faisait assez froid également dans la chambre.

                            Je conseil cet hôtel bon rapport qualité prix !</p>
                        <p class='font-weight-bold ml-5 signature'>Gertrude</p>
                    </div>
                </div>
                <div class="tab-pane mt-3 fade" id="pills-chambre" role="tabpanel" aria-labelledby="pills-chambre-tab">
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Une perle rare ! " </h4>

                        <p>Toujours aussi agréable de séjourner dans cet Hotel, personnel très sympatique. A l'écoute.
                            Cadre simple, mais stylé, propre, chambres de belle taille. Bien équipé, la bouilloire permettant de se préparer un thé ou un café, est bien appréciée.
                            Très bien situé, proche Metro Temple, à quelques pas de la Place e la République.
                            Pas mal de commerces aux alentours, on peut y trouver son bonheur, (cafés, boulangeries, supermarché, restos....)
                            Rv repris..</p>
                        <p class='font-weight-bold ml-5 signature'>Mireille</p>
                    </div>
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Une très bonne literie " </h4>
                        <p>Satisfait de mon séjour à l'hôtel (2 nuitées).
                            Chambre propre, fonctionnelle, climatisée (un vrai plus!) et bac de douche assez grand (d'autant plus pour Paris).

                            Je ne met pas la note maximale pour trois raisons :
                            - le petit déjeuner est vendu comme continental... sauf qu'il est assez succinct. Une viennoiserie, un morceau de pain, un jus d'orange, une boisson chaude, et c'est tout. Pas de yaourt, pas de céréales.
                            - l'isolation est mauvaise. J'ai eu droit à mes voisins de chambrée (au-dessus) qui sont rentrés à 3h du matin... ça parlait assez fortement, ça marchait, ça a pris a sa douche à 4h du matin... c'était comme si j'étais avec eux. Résultat j'ai mal dormi, j'ai été réveillé.
                            - quelques défauts dans la chambre (ampoule grillée, verre sur le bureau fêlé et réparé par du scotch, l'eau de la douche qui est évacuée très difficilement, butée de porte branlante).

                            Enfin, je pense qu'il est préférable de demander une chambre côté église plutôt que côté rue (plus calme).</p>
                        <p class='font-weight-bold ml-5 signature'>Léone</p>
                    </div>
                    <div class=' avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Personnel très souriant " </h4>
                        <p>Excellente adresse sur Paris: service excellent, un personnel souriant et de bon conseil, emplacement parfait (à 5min à pied de la place de la République, de toutes commodités (métro, bus...), également vous serez en 15-20min de marche sur l'île de la Cité), plein de petits restos et de brasseries à proximité, un hotel climatisé, très propre, une bonne literie (moi qui ai mal au dos c'est un critère important), et les chambres sont très bien insonorisées.
                            Seul point à améliorer, selon moi: le petit déjeuner; mais ce n'est pas très grave étant donné que plein de petits bistros en proposent aux alentours.
                            Nous reviendrons avec plaisir dans cet hotel ! Merci à toute l'équipe</p>
                        <p class='font-weight-bold ml-5 signature'>Manu</p>
                    </div>
                </div>
                <div class="tab-pane mt-3 fade" id="pills-restaurant" role="tabpanel" aria-labelledby="pills-restaurant-tab">
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Pas cher pour la qualité " </h4>
                        <p>Petit hôtel très charmant, et très bien tenu, le tout à un tarif raisonnable au regard de la prestation.
                            Ascenseur typique, chambre très confortable, armoires, sdb très agréable.
                            Avec une jolie vue sur notre magnifique Dame de fer.
                            Ravie de notre séjour, que nous avons du écourter à cause des manifestations.
                            Nous recommandons vivement cet établissement, et nous n'hésiterons pas à y revenir prochainement.
                            (garage privé et couvert, certes à un prix élevé, mais allez trouver un parking dans Paris...):-)</p>
                        <p class='font-weight-bold ml-5 signature'>Ginette</p>
                    </div>
                    <div class=' avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Mon hotel de rêve " </h4>
                        <p>Toujours avec autant de plaisir que nous retournons à "notre pied à terre"... dans "notre chambre préférée". Merci
                            Personnel toujours aux petits soins, agréable et sympa. Toujours très propre, clim très bien surtout par grosses chaleurs.
                            Pourvu que l'ascenseur ne tombe pas en panne. Au lieu du "7e" nous nous contenterons, (si ça arrivait) du 1er. RIRE.
                            On s'y sent un peu comme "chez nous".
                            Merci
                            A bientot rv repris pr la rentrée si pas avant.</p>
                        <p class='font-weight-bold ml-5 signature'>Maurice</p>
                    </div>
                    <div class=' avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Séjour agréable " </h4>
                        <p>Correspond à sa réputation d’internet. l'Accueil comme la femme de ménage ont été agréables pdt les 3 jours du séjour (près d’un fer à repasser, bagagerie, petit déjeuner accepté d’être servi à une heure très matinale). hôtel stratégiquement placé. très propre et climatisation fonctionnelle On n’entend pas les voisins mais on entend les voitures. Petit ascenseur , alors anticiper votre heure de départ. Je n’ai pas testé personnellement le petit déjeuner. conclusion : J’ y retournerai</p>
                        <p class='font-weight-bold ml-5 signature'>Marius</p>
                    </div>
                </div>
                <div class="tab-pane mt-3 fade" id="pills-soin" role="tabpanel" aria-labelledby="pills-soin-tab">
                    <div class='avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" A l'écoute du client " </h4>
                        <p>A l'arrivée, accueil cordial et sympathique, à l'écoute du client, garde de vos bagages après l'heure de quitter la chambre; "ma" chambre" (n°41) sympa, on y est bien, suffisamment grande, salle de bains avec douche très propre, séchoir! AU VUE D'UN autre AVIS TripAdvisor:, on se fout du rideau de douche!..on est pas là pour faire un concours de relooking! tant est que le rideau soit propre et non moisi comme certain hôtel! REMARQUE: il y manque néanmoins une patère qui rendrait bien service... le lit est très bon, téléphone, télé, thé à disposition, armoire de rangement, la chambre se trouve sur la rue principale, bien calme la nuit, il en est de même pour l'hôtel. SUITE à un AUTRE AVIS: des voisins bruyants... il est bien dommage de l'incivilité de certains qui se croient seuls au monde, dérangent les autres et malheureusement font porter à l'hôtelier les inconvénients de ces attitudes!..Pour le petit déjeuner la salle est élégante et conviviale, très propre, le petit déjeuner est complet, il y a tout se qu'il faut pour le matin. UN AUTRE AVIS: celui qui n'a pas trouvé les yaourts, il faut qu'il ouvre ses yeux ou qu'il demande car au petit déjeuner il y a toujours quelqu'un!
                            je fais de cet hôtel une référence a garder pour mes séjours de visite sur Paris et ne manquerais pas d'en faire la PUB autour de mes amis.</p>
                        <p class='font-weight-bold ml-5 signature'>Gérard</p>
                    </div>
                    <div class=' avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Prix raisonnable " </h4>
                        <p>Accueil très agréable
                            Chambres propres et assez grandes. Salle de bains propres
                            Emplacement top près métro temple et à cinq minutes de République
                            Petit déjeuner simple mais pour une fois à un prix raisonnable
                            Bref nous reviendrons</p>
                        <p class='font-weight-bold ml-5 signature'>Arlette</p>
                    </div>
                    <div class=' avis'>
                        <h4 class=' text-center font-italic font-weight-light'>" Joli et spacieux " </h4>
                        <p>De passage à nouveau sur Paris, et de retour à l'Hotel Paris-France... Accueil très sympatique par la jeune femme de la réception, qui nous a proposé 2 chb au choix... J'ai suivi son conseil... Jolie, spacieuse (dommage qu'l y ait une baignoire, (salle de bain récente) et non une douche italienne) Mais bon, sans hésitation, nous y retournerons. L'ascenseur cette fois ci fonctionnait correctement...8 étages à monter à pieds auraient été, pénible !Literie 160, de bonne qualité... Propreté, espace, jolie vue des toits de Paris...Beaubourg... Le hall de l'hotel est très joli, belle déco et bel espace. mériterait bien + que les 2*</p>
                        <p class='font-weight-bold ml-5 signature'>Alphonce</p>
                    </div>
                </div>
            </div>
            <form class="col-11 col-xl-8 col-sm-10 col-md-8 col-ml-8 mx-auto booking-form">
                <h4 class='text-center'>Partagez votre expérience</h4>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <input class="form-control" type="text" required>
                            <span class="form-label">En quelques mots</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="form-control" type="text" required>
                            <span class="form-label">Nom</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" id="textArea" rows="12"></textarea>
                            <span class="form-label" id="labelTextArea">Message</span>
                        </div>
                    </div>
                </div>
                <div class="form-btn">
                    <button class="submit-btn">Envoyez votre message</button>
                </div>
            </form>
        </div>

    </div>
    </div>


    <?php
    include("./footer.php");
    ?>
    <script src="./assets/js/form.js"></script>
</body>

</html>
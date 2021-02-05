<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Ma Réservation</title>
    <link rel="stylesheet" href="./node_modules/vanillajs-datepicker/dist/css/datepicker-bs4.min.css">
    <?php
    include("./link.php");
    ?>
    <link rel="stylesheet" href="./assets/css/cart.css">
    <?php
    include("./link-queries.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <section class="sectionSize container-fluid ">
        <div class="row">
            <div class="sectionTitle col-12 mx-auto mb-5">
                <h4>Récapitulatif de réservation</h4>
                <div class="smallHr mb-5"></div>
            </div>
            <div class="containerPresta col-xl-5 col-10 p-0 row">
                <div class="cartTitle col-8 m-0">
                    <h5 class="pl-5">Prestation</h5>
                </div>
                <div class="cartTitle col-4 m-0 text-center">
                    <h5>Prix</h5>
                </div>
                <div class="col-8 p-0 m-0 ">
                    <div class="article"><strong>Chambre Confort - 9 nuits</strong>
                        <div class="articleDetail">
                            <p>Arrivée : lun. 12 avril 2021</p>
                            <p>Départ : mer. 21 avril 2021</p>
                        </div>
                    </div>
                </div>
                <div class="article col-4 p-0 m-0">
                    <p class="text-center pt-3">3800€</p>
                    <p class="text-center">780€ pour 1 nuit</p>
                </div>

                <div class="col-8 p-0 m-0 ">
                    <div class="article"><strong>Soin Relaxant - 1h30</strong>
                        <div class="articleDetail">
                            <p>Date : mer. 14 avril 2021</p>
                            <p>Heure : 18h45</p>
                        </div>
                    </div>
                </div>
                <div class="article col-4 p-0 m-0">
                    <p class="text-center pt-3">250€</p>
                </div>
            </div>
            <div class="col-0 col-xl-1"></div>

            <div class="containerPayment col-xl-2 col-lg-5 col-md-7 col-10 text-center p-0">
                <div class="cartTitle">
                    <h5>Total à payer</h5>
                </div>
                <p class="totalPrice pt-4"><strong>4050.00€</strong></p>
                <form action="#" method="POST">
                    <div class="d-flex justify-content-around p-3 mx-auto">
                        <input type="checkbox" name="cgvAgreement" id="cgvAgreement" required>
                        <label for="cgvAgreement">J'ai lu et accepté les <a href="./cgv.php">conditions générales de ventes Hotelcop</a></label>
                    </div>

                    <input class="linkButton bgColor1" type="submit" value="Valider">
                </form>
            </div>
        </div>
    </section>
    <?php
    include("./footer.php");
    ?>
    <script type="module" src="./assets/js/form.js"></script>
    <script type="module" src="./assets/js/datepicker.js"></script>

</body>

</html>
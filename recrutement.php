<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Recrutement</title>
    <link rel="stylesheet" href="./node_modules/vanillajs-datepicker/dist/css/datepicker-bs4.min.css">
    <?php
    include("./link.php");
    ?>

    <link rel="stylesheet" href="./assets/css/form.css">


</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <div class="container-fluid p-0">
        <div class="row">
            <div id="booking" class="section col-12">
                <div class="section-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <div class="booking-cta">
                                    <h1>Rejoignez notre équipe !</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-8 col-md-offset-1">
                                <div class="booking-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" required>
                                                    <span class="form-label">Nom</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" required>
                                                    <span class="form-label">Prénom</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text">
                                                    <span class="form-label">Entreprise</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" required>
                                                    <span class="form-label">Email</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <input type="file" class="custom-file-input form-control" id="customFile" name="filename" required>
                                                    <span class="form-label">CV</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="sandbox">
                                            <div class="d-flex flex-row date input-daterange">
                                                <div class="col-md-6 pl-0">
                                                    <div class="form-group">
                                                        <input type="text" name="range-start" class="form-control datepicker-input" style="display: none;" required>
                                                        <span class="form-label">Date d'entrée</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pr-0">
                                                    <div class="form-group">
                                                        <input type="text" name="range-end" class="form-control datepicker-input" required>
                                                        <span class="form-label">Date de sortie</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button class="submit-btn">Envoyez votre candidature</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("./footer.php");
    ?>
    <script type="module" src="./assets/js/reserve.js"></script>

</body>

</html>
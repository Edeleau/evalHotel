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
    <div class="container-fluid">
        <div class="row">
            <div id="recrute" class="section col-12">
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
                                                    <input class="form-control" type="text" name="nom" required>
                                                    <span class="form-label">Nom</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="prenom" required>
                                                    <span class="form-label">Prénom</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="entreprise">
                                                    <span class="form-label">Entreprise</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="email" name="email" required>
                                                    <span class="form-label">Email</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control custom-file-input" type="file" name="cv" id="cv" required>
                                                    <input class="form-control" type="text" id="fakeInputCv" disabled="disabled">
                                                    <span class="form-label">Curriculum vitæ</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input class="form-control custom-file-input" type="file" id="motivation" name="motivation" required>
                                                    <input class="form-control" type="text" id="fakeInputMotivation" disabled="disabled">
                                                    <span class="form-label">Lettre de motivation</span>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="textArea" name="message" rows="12"></textarea>
                                                    <span class="form-label" id="labelTextArea">Message</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-btn">
                                            <button class="submit-btn" id="submit">Envoyez votre candidature</button>
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
    <script type="module" src="./assets/js/form.js"></script>

</body>

</html>
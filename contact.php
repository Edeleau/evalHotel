<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Contact</title>
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
        <div class="row first">
            <div id="contact" class="section col-12">
                <div class="section-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 ">
                                <div class="booking-cta">
                                    <h1>Contactez nous !</h1>
                                    <p>Remplissez les informations ci-dessous pour nous contacter par e-mail. Nous serons attentif à vous répondre dans les plus brefs délais. Tous les champs sont obligatoires.</p>
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
                                                    <input class="form-control" type="text" name="entreprise" required>
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
                                                    <input class="form-control" type="text" name="pays" required>
                                                    <span class="form-label">Pays</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group ">
                                                    <span class="form-label">Catégorie</span>
                                                    <select class="form-control" name="categorie" required>
                                                        <option value=""></option>
                                                        <option>Chambre</option>
                                                        <option>Restaurant</option>
                                                        <option>Spa</option>
                                                        <option>Ordre général</option>
                                                    </select>
                                                    <span class="select-arrow"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="sujet" required>
                                                    <span class="form-label">Sujet</span>
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
                                            <button class="submit-btn" id="submit">Envoyez votre avis</button>
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
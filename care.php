<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Soin et bien être</title>
    <?php
    include("./link.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <div class="sectionSize">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                    <!-- Carousel -->
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example" data-slide-to="1"></li>
                            <li data-target="#carousel-example" data-slide-to="2"></li>
                            <li data-target="#carousel-example" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                    <h1>Carousel: Change Arrow Colors</h1>
                                    <div class="carousel-caption-description">
                                        <p>How to Change the Arrow Colors of Carousel Controls in Bootstrap 4</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/room/room04.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                    <h3>Caption for Image 2</h3>
                                    <div class="carousel-caption-description">
                                        <p>This is the caption description text for image 2.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/room/room06.jpeg" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                    <h3>Caption for Image 3</h3>
                                    <div class="carousel-caption-description">
                                        <p>This is the caption description text for image 3.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img/room/room04.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption">
                                    <h3>Caption for Image 4</h3>
                                    <div class="carousel-caption-description">
                                        <p>This is the caption description text for image 4.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                        <img src="./assets/img/arrow-left.png" class="d-block w-50 arrowColor" alt="">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                            <img src="./assets/img/arrow-right.png" class="d-block w-50 arrowColor" alt="">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- End carousel -->

                </div>
            </div>
        </div>
    </div>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
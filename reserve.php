<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Réservation</title>
    <link rel="stylesheet" href="./node_modules/vanillajs-datepicker/dist/css/datepicker-bs4.min.css">
    <?php
    include("./link.php");
    ?>

    <link rel="stylesheet" href="./assets/css/reserve.css">


</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="booking-cta">
                            <h1>Make your reservation</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-1">
                        <div class="booking-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" required>
                                            <span class="form-label">Name</span>
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
                                            <input class="form-control" type="tel" pattern="[0-9]{10}" required>
                                            <span class="form-label">Phone</span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group ">
                                            <span class="form-label">Rooms</span>
                                            <select class="form-control" required>
                                                <option value=""></option>
                                                <option>Classique</option>
                                                <option>Confort</option>
                                                <option>Deluxe</option>
                                                <option>Suite</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="form-group ">
                                            <span class="form-label">Guests</span>
                                            <select class="form-control" required>
                                                <option value=""></option>
                                                <option value="1">1 Person</option>
                                                <option value="2">2 People</option>
                                                <option value="3">3 People</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="sandbox">
                                    <div class="d-flex flex-row date input-daterange">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="range-start" class="form-control datepicker-input" required>
                                                <span class="form-label">Check In</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="range-end" class="form-control datepicker-input" required>
                                                <span class="form-label">Check Out</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button class="submit-btn">Book Now</button>
                                </div>
                            </form>
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
    <script type="module" src="./assets/js/datepicker.js"></script>

</body>

</html>
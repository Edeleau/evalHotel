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

    <div id="sandbox">
        <div class="d-flex flex-row date input-daterange">
            <div class="form-group">
                <input type="text" name="range-start" class="form-control datepicker-input">
            </div>
            <div class="flex-grow-0">
                <a class="btn" disabled="">to</a>
            </div>
            <div class="form-group">
                <input type="text" name="range-end" class="form-control datepicker-input">
            </div>
        </div>
    </div>

    <?php
    include("./footer.php");
    ?>
    <script type="module" src="./assets/js/datepicker.js"></script>

</body>

</html>
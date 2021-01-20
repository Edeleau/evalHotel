<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELCOP | Réservation</title>
    <?php
    include("./link.php");
    ?>

</head>

<body>
    <?php
    include("./nav.php");
    ?>
    <div id="datePicker">
        <input type="text" name="start">
        <span>to</span>
        <input type="text" name="end">
    </div>
    <?php
    include("./footer.php");
    ?>
</body>

</html>
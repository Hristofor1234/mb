<?php
    require_once "vendor/autoload.php";
    $db = new App\DB();
    $avto_id = intval($_GET["id"]);
    $avto = $db->get_single_auto($avto_id);
?>
<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>Главная</title>
    <link rel = "stylesheet" href = "assets/css/common.css">
    <link rel = "stylesheet" href = "assets/css/avto_info.css">
</head>
<body>
<script src="assets/js/common.js" defer></script>

<?php include "include/header.php"?>

<main>
    <div class="inner_container">
        <div class="class_img">
            <p><?= $avto["Name"] ?></p>
            <img src = "<?= $avto["Img"] ?>" alt = "">
        </div>
        <div class="info">
            <p class="price">Цена <br> <span>OT <?= $avto["Price"] ?> ₸</span></p>
        </div>
        <div class="ad">
            <p class="font-size">Комфорт</p>
            <p class="big"><?= $avto["Text"] ?></p>
        </div>
    </div>
</main>

<hr>

<?php include "include/footer.php"?>

</body>
</html>
<?php
    require_once "vendor/autoload.php";
    $db = new App\DB();
    $data = $db->get_all_auto();
?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>avto</title>
    <link rel = "stylesheet" href = "assets/css/common.css">
    <link rel = "stylesheet" href = "assets/css/avto.css">
</head>
<body>
<script src="assets/js/carusel.js" defer></script>
<script src="assets/js/avto.js" defer></script>
<script src="assets/js/common.js" defer></script>

<?php include "include/header.php"?>

<main>
    <div class="container">
        <div class="photo show">
            <h2>
                Lorem ipsum dolor sit amet, consectetur.
                <br>
                Lorem ipsum dolor.
            </h2>
            <img  src="assets/img/mers1.jpg" alt="">
        </div>
        <div class="photo">
            <h2>
                Lorem ipsum dolor sit amet, consectetur.
                <br>
                Lorem ipsum dolor.
            </h2>
            <img src="assets/img/mers2.jpg" alt="">
        </div>
        <div class="photo">
            <h2>
                Lorem ipsum dolor sit amet, consectetur.
                <br>
                Lorem ipsum dolor.
            </h2>
            <img src="assets/img/mers3.jpg" alt="">
        </div>
        <div class="photo">
            <h2>
                Lorem ipsum dolor sit amet, consectetur.
                <br>
                Lorem ipsum dolor.
            </h2>
            <img src="assets/img/mers4.jpg" alt="">
        </div>
        <div class="photo">
            <h2>
                Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, sequi., consectetur.
                <br>
                Lorem ipsum dolor.
            </h2>
            <img src="assets/img/mers5.jpg" alt="">
        </div>
        <div class="button" id="bt1">
            <button><span></span></button>
            <button><span></span></button>
            <button><span></span></button>
            <button><span></span></button>
            <button><span></span></button>
        </div>
    </div>
    <div class="container">
        <div class="filter_amg">
            <button class="all">Все модели</button>
            <button class="amg">AMG</button>
        </div>
        <div class="filter">
            <div id="click" class = "class_list" data-id="1">
                <button>Седан</button>
            </div>
            <div id="click" class = "class_list" data-id="2">
                <button>Купе</button>
            </div>
            <div id="click" class = "class_list" data-id="3">
                <button>Внедорожник</button>
            </div>
            <div id="click" class = "class_list_not_amg" data-id="4">
                <button>Седан, длинная база</button>
            </div>
            <div id="click" class = "class_list_not_amg" data-id="5">
                <button>Минивэн</button>
            </div>
            <div id="click" class = "class_list" data-id="6">
                <button>Универсал</button>
            </div>
            <div id="click" class = "class_list" data-id="7">
                <button>4-дверное Купе</button>
            </div>
        </div>
    </div>
    <div class="inner_container">
        <div class="margin" id="container">
            <div class="help" data-id="1">
                <h3>Седан</h3>
                <div class="sedan">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "Седан"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>" class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="help" data-id="2">
                <h3>Купе</h3>
                <div class="kupe">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "Купе"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>"  class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="help" data-id="3">
                <h3>Внедорожник</h3>
                <div class="vnedoroznik">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "Внедорожник"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>"  class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="help" data-id="4" id="hiden">
                <h3>Седан, длинная база</h3>
                <div class="sedan_long">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "Седан, длинная база"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>"  class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="help" data-id="5" id="hiden">
                <h3>Минивэн</h3>
                <div class="miniven">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "Минивэн"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>"  class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="help" data-id="6">
                <h3>Универсал</h3>
                <div class="universal">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "Универсал"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>"  class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="help" data-id="7">
                <h3>4-дверное Купе</h3>
                <div class="kupe_4-door">
                    <?php foreach ($data as $avto): ?>
                        <?php if ($avto["Model"] === "4-дверное Купе"): ?>
                            <div class="avto">
                                <a href = "avto_info.php?id=<?= $avto["Id"] ?>"  class="class_items">
                                    <div class="class_img">
                                        <img src = "<?= $avto["Img"] ?>" alt = "">
                                    </div>
                                    <p><?= $avto["Name"] ?></p>
                                    <p class="price">OT: <?= $avto["Price"] ?> ₸</p>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<hr>

<?php include "include/footer.php"?>

</body>
</html>
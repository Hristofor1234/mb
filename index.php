<!doctype html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
    <title>Главная</title>
    <link rel = "stylesheet" href = "assets/css/common.css">
    <link rel = "stylesheet" href = "assets/css/index.css">
</head>
<body>
<script src="assets/js/carusel.js" defer></script>
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
    <hr>
    <div class="container">
        <div class="main_info">
            <div class="main_info_mobile">
                <h2>Курс валют</h2>
                <a class="href_news" href = "kyrs.php">Подробнее</a>
                <br>
                <h2>Новости</h2>
                <a class="href_news" href = "news.php">Подробнее</a>
                <br>
                <h2>Контакты</h2>
                <a href = "contacts.php">Подробнее</a>
            </div>
            <div class="main_kyrs">
                <h2>Курс валют</h2>
                <img src = "assets/img/kyrs.png" alt = "">
                <p>Коммерческий валютный курс</p>
                <a class="href_news" href = "kyrs.php">Подробнее</a>
            </div>
            <div class="main_news">
                    <h2>Новости</h2>
                    <p>Полное сопровождение страхования SmartCasco от СК «Евразия» для Вашего автомобиля.</p>
                    <p>Новое купе Mercedes-Benz GLC</p>
                    <a class="href_news" href = "news.php">Подробнее</a>
            </div>
            <div class="main_contacts">
                <h2>Контакты</h2>
                <img src = "assets/img/conntact.jpg" alt = "">
                <p>Телефон: +7 (727) 222 40 40</p>
                <p>Республика Казахстан,г. Алматы,пр. Суюнбая,Стасова 102</p>
                <a href = "contacts.php">Подробнее</a>
            </div>
        </div>
    </div>
</main>

<hr>

<?php include "include/footer.php"?>

</body>
</html>
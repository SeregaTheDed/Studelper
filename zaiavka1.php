<?php
if (isset($_COOKIE["name"]) == false)
    header("Location: start.html");
?>
<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="it.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Raleway&display=swap" rel="stylesheet">
    <title>StudHelper</title>
</head>
<body>

<div class="wrapper">
<header class="header">
    <div class="container">
        <div class="header_inner2">
            <a class="nav_link" href="#"><?php echo $_COOKIE['name'] ?></a>
            <nav class="nav2">
                <a class="nav_soc" href="#">Социальная жизнь</a>
                <a class="nav_soc" href="study.html">Учёба</a>
                <a class="nav_soc" href="kariera.html">Карьера</a>
                <nav class="social_nav">
                    <a class="social1_zaiavka" href="social_life.php">События</a>
                    <a class="social1" href="dobavit%20sobitie.html">Добавить событие</a>
                    <a class="social2" href="myChats.html">Мои чаты</a>
                    <a class="social3" href="interestsChats.html">Чаты по интересам</a>

                    <a class="back_social" href="social_life.php">Вернуться к списку событий</a>




        </div>

        <a class="settings" href="#" >
            <img style="vertical-align: middle; width: 40px;" src="images/settings.png" alt="" />
        </a>

        <a class="STUDHELPER" href="glavnaya.php" >
            <img style="vertical-align: middle; width:220px; height:120px; " src="images/logotip.png" alt="" />
        </a>

        <a class="zaiavka111" href="#">Подать заявку</a>

    </div>
    <hr class="line">
    <hr class="line2">


</header>
<div class="intro">
    <div class="container">
            <a class="btn1_soc_zaiavka" href="#">
                <h3 class="itmo_zaiavka">ITMO Energy CUP</h3>

                <p class="p1_za">Хакатон: 15-16 апреля 2022 г.<br>Приём заявок: до 8 апреля 2022г.<br> Формат: Online<br>Ссылка на источник:
                   <br>
                <p class="p2_za"><u>Формат:</u><br>
                Онлайн - 15.04.2022<br>
                Очно - Университет ИТМО, 16.04.2022<br>
                <br>
                <u>Описание</u><br>
                На базе Университета ИТМО будет  организован международный хакатон "ITMO Energy CUP", который проходит в рамках международного проекта Twin Campus, в рамках Программы Приграничного сотрудничества "Россия – Юго-Восточная Финляндия" на период 2014-2020 гг. С помощью хакатона мы хотим привлечь внимание молодежи к современным проблемам по трем секторам: информационные технологии, энергетика, устойчивое развитие.
            </p>
            </a>

        </div>

    </div>


    <img class="ivan" src="images/ivan.png" width="100" height="100">
    <img class="sob_zaiavka" src="images/man.png" width="200" height="200">
    <img class="strelka_zav"src="images/strelka2.png" width="30">
</div>

</div>


</body>

</html>
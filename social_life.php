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
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">
    <title>StudHelper</title>
</head>
<body>

<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header_inner2">
                <a class="nav_link" href="#"><?php echo $_COOKIE['name'] ?></a>
                <nav class="nav2">

                    <a class="nav_soc" href="social_life.php">Социальная жизнь</a>
                    <a class="nav_soc" href="study.html">Учёба</a>
                    <a class="nav_soc" href="kariera.html">Карьера</a>

                    <nav class="social_nav">
                        <a class="social1" href="social_life.php">События</a>
                        <a class="social1" href="dobavit%20sobitie.html">Добавить событие</a>
                        <a class="social2" href="myChats.html">Мои чаты</a>
                        <a class="social3" href="interestsChats.html">Чаты по интересам</a> </nav>
            </div>

            <a class="settings" href="#" >
                <img style="vertical-align: middle; width: 40px;" src="images/settings.png" alt="" />
            </a>

            <a class="STUDHELPER" href="glavnaya.php" >
                <img style="vertical-align: middle; width:220px; height:120px; " src="images/logotip.png" alt="" />
            </a>

        </div>
        <hr class="line">
        <hr class="line2">
        <div class="search_box2">

            <input type="text" class="search-txt" placeholder="Поиск...">
            <button class="search_btn" value="Search">
                <img style="vertical-align: middle; width: 24px;" src="images/search.png" alt="" />
            </button>

        </div>

    </header>
    <div class="intro">

        <div class="container">
            <div class="intro_inner">

                <h2 class="intro_title3">г. Ярославль</h2>
                <h2 class="intro_title4">ЯРГУ</h2>
                <img class="ivan" src="images/ivan.png" width="100" height="100">

            </div>
            <div class='main'>
                <div class='info'>
                    <div class='info-box'>
                        <img class='info_image' src='images/man.png'>
                        <div class='itmo' >ITMO Energy CUP</div>
                        <div class='description'>Описание: Реальные кейсы городского уровня, познакомиться с представителями крупных энергокомпаний. <br> Хакатон: 15-16 апреля 2022 г.<br>
                            Приём заявок: до 8 апреля 2022г.<br>  Формат: Online</div>
                        <button class="zaiavka_btn">Подать заявку</button> </div>
                    <div class='info-box'>
                        <img class='info_image' src='images/man.png'>
                        <div class='itmo' >ITMO Energy CUP</div>
                        <div class='description'>Описание: Реальные кейсы городского уровня, познакомиться с представителями крупных энергокомпаний. <br> Хакатон: 15-16 апреля 2022 г.<br>
                            Приём заявок: до 8 апреля 2022г.<br>  Формат: Online</div>
                        <button class="zaiavka_btn">Подать заявку</button> </div>
                    <div class='info-box'>
                        <img class='info_image' src='images/man.png'>
                        <div class='itmo' >ITMO Energy CUP</div>
                        <div class='description'>Описание: Реальные кейсы городского уровня, познакомиться с представителями крупных энергокомпаний. <br> Хакатон: 15-16 апреля 2022 г.<br>
                            Приём заявок: до 8 апреля 2022г.<br>  Формат: Online</div>
                        <button class="zaiavka_btn">Подать заявку</button> </div>

                </div>


            </div>
</html>
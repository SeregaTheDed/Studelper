<?php
if (!isset($_COOKIE['email'])) {
    header('Location: Autorization.php');
    exit();
}
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
            <div class="header_inner">
                <ul class="navbar">
                    <nav class="nav">
                        <a class="nav_link" href="#"><?php echo $_COOKIE['name'] ?></a>
                        <a class="button1" href="study.html">Учёба</a>
                        <a class="button2" href="social_life.php">Социальная жизнь</a>
                        <a class="button3" href="kariera.html">Карьера</a></nav>

                    <a class="settings" href="#" >
                        <img style="vertical-align: middle; width: 40px;" src="images/settings.png" alt="" />
                    </a>

                    <a class="STUDHELPER" href="glavnaya.php" >
                        <img style="vertical-align: middle; width:220px; height:120px; " src="images/logotip.png" alt="" />
                    </a>



                </ul>
            </div>

        </div>
        <hr style="position: relative; top: 572px">
        <div class="search_box">
            <label>
                <input type="text" class="search-txt" placeholder="Поиск...">
            </label>

            <button class="search_btn" value="Search">
                <img style="vertical-align: middle; width: 24px;" src="images/search.png" alt="" />
            </button>

            <div class="strelki">
                <button class="strelka1" value="List">
                    <img style="vertical-align: middle; width: 50px;" src="images/strelka1.png." alt="" />
                </button>
                <button class="strelka2" value="List">
                    <img style="vertical-align: middle; width: 50px;" src="images/strelka2.png." alt="" />
                </button>


            </div>
        </div>


    </header>
    <div class="intro">

        <div class="container">
            <div class="intro_inner">
                <h1 class="intro_title">Здесь ты найдешь всё самое важное: от работы до тусовки!</h1>

                <h1 class="intro_title2">Мероприятия</h1>
                <h2 class="intro_title3">г. Ярославль</h2>
                <h2 class="intro_title4">ЯРГУ</h2>



                <a class="btn1" href="https://vk.com/hackathonclub">
                    <img style="vertical-align: middle; width: 300px; height: 150px; border-radius: 23px;" src="images/itttp.jpg" alt="" />
                </a>
                <a class="btn2" href="https://vk.com/yaroslavl_state_university?w=wall-108604898_6694">
                    <img style="vertical-align: middle; width: 300px; height: 150px; border-radius: 23px;" src="images/scien.jpg" alt="" />
                </a>
                <a class="btn3" href="https://vk.com/studclub_yargu?w=wall-16279663_9713">
                    <img style="vertical-align: middle; width: 300px; height: 150px; border-radius: 23px;" src="images/xod.jpg" alt="" />
                </a>

            </div>


        </div>

        <img class="img2" src="images/students.png" width="250" height="200">
        <img class="ivan" src="images/ivan.png" width="100" height="100">
    </div>

</div>


</body>

</html>
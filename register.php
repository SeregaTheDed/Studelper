<?php

?>
<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="it.css">
    <link rel="stylesheet" href="Saroja.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Raleway&display=swap" rel="stylesheet">
    <title>StudHelper</title>
</head>
<body>
    <div class="intro">
        <img class="img" src="images/logotip.png" width="220" height="120" alt="studelper">
        <div class="RegCont">
            <form style="margin-top: -53px"   method="post" class="RegistrationForm">
                <h3 style="text-align: center; margin-top: 10px">Регистрация</h3>
                <input  name="name" type="text" class="InputField" placeholder="Имя">
                <input  name="email" type="text" class="InputField" placeholder="e-mail">
                <input  name="pass" type="text" class="InputField" placeholder="Пароль">
                <input  name="pass_again" type="text" class="InputField" placeholder="Подтвердить пароль">
                <select name="group" class="InputField">
                    <option value=Student>Студент</option>
                    <option value=Employer>Работодатель</option>
                    <option value=Entrant>Абитуриент</option>
                </select>
                <button type="submit" name="submit" class="InputButton">Регистрация</button>
                <?php
                require_once('scripts/Authorization.php');
                error_reporting(E_ERROR | E_PARSE);
                if (isset($_POST["submit"]))
                {
                    $email = $_POST["email"];
                    $pass = $_POST["pass"];
                    $pass_again = $_POST["pass_again"];
                    $group = $_POST["group"];
                    $name = $_POST["name"];
                    //echo "<div style=\"text-align: center\">".$group."</div>";
                    try {
                        if ($_POST["pass"] != $_POST["pass_again"])
                        {
                            echo "<div style=\"text-align: center\">"."Пароли не совпадают"."</div>";
                            exit();
                        }
                        Authorization::Register($name, $email, $pass, $group);
                        echo "<div style=\"text-align: center\">"."Регистрация успешна"."</div>";
                        echo "<a class='InputButton' style='text-align: center; text-decoration: none'  href='authorization.php'>Авторизация</a>";
                        //sleep(2);
                        $new_url = "authorization.php";
                        //header("Location: ".$new_url);

                    }
                    catch (Exception $e)
                    {
                        echo "<div style=\"text-align: center\">".$e->getMessage()."</div>";
                    }
                }
                ?>
            </form>
        </div>
    </div>





</body>

</html>
<?php
require_once("AllScripts.php");
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST["submit_auth"]))
{
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    //echo "<div style=\"text-align: center\">".$group."</div>";
    try {
        Auth::Authorization($email, $pass);
        header("location: glavnaya.php");
        //echo "<a class='InputButton' style='text-align: center; text-decoration: none'  href='glavnaya.php'>На главную!</a>";

    }
    catch (Exception $e)
    {
        echo "<div style=\"text-align: center\">".$e->getMessage()."</div>";
    }
}
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
        <form  style="margin-top: 20px" method="post" class="RegistrationForm">
            <h3 style="text-align: center; margin-top: 10px">Авторизация</h3>
            <input  name="email" type="text" class="InputField" placeholder="e-mail">
            <input  name="pass" type="text" class="InputField" placeholder="Пароль">
            <button type="submit" name="submit_auth" class="InputButton">Войти</button>

        </form>
    </div>
</div>





</body>

</html>
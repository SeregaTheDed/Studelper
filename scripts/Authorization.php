<?php
require_once('Database.php');
enum GroupOfUser : string
{
    case Moderator = "Moderator";
    case Student = "Student";
    case Employer = "Employer";
    case Entrant = "Entrant";

}
class Authorization
{
    public static function Register(string $name, string $email, string $pass, string $group)
    {
        $db = new Database();
        $prev = $db->prepare("INSERT INTO users(name, email, hash, group_of_user) VALUE(?, ?, ?, ?)");
        $hash = password_hash($pass, PASSWORD_BCRYPT);
        $prev->bind_param('ssss', $name, $email, $hash, $group);
        $prev->execute();
    }
    public static function Authorization(string $email, string $pass) : bool
    {
        $db = new Database();
        $user = $db->getUserByEmail($email)->fetch_assoc();
        if ($user === null)
        {
            return false;
        }
        if (!password_verify($pass, $user['hash']))
        {
            return false;
        }
        $name = $user['name'];
        $email = $user['email'];
        setcookie('name', $name, time()+420);
        setcookie('email', $email, time()+420);
        //MyPrint::PrintBeutiful("Конец авторизации");
        return true;
    }
}

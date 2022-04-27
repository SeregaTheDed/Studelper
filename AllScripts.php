<?php

class Auth
{
    public static function Register($email, $name, $pass, $group)
    {
        $db = new Database("users.txt");
        $user = $db->GetUserByEmail($email);
        if (isset($user)) {
            //echo "Пользователь уже зарегистрирован!";
            //return;
            throw new Exception("Пользователь уже зарегистрирован!");
        }
        $user = new stdClass();
        //MyPrint::PrintBeutiful($user);
        $user = new MyUser($email, $name, password_hash($pass, PASSWORD_BCRYPT), $group);
        $db->UpdateBaseByUser($user);
        //MyPrint::PrintBeutiful($user);
    }
    public static function Authorization($email, $pass)
    {
        if (self::HasUser($email) == false)
        {
            throw new Exception("Такого пользователя нет");
        }
        $db = new Database("users.txt");
        $user = $db->GetUserByEmail($email);
        if (password_verify($pass, $user->Password) == false)
        {
            throw new Exception("Неверный пароль");
        }
        setcookie("name", $user->Name, time()+30);
        setcookie("group", $user->GroupOfUser, time()+30);
        setcookie("email", $user->Email, time()+30);
    }

    public static function HasUser($email)
    {
        $db = new Database("users.txt");
        $user = $db->GetUserByEmail($email);
        return isset($user);
    }


}



class Database
{
    private $table;
    private string $nameOfTable;

    public function __construct(string $NameOfTable)
    {
        $this->nameOfTable = $NameOfTable;
        $this->table = json_decode(file_get_contents($NameOfTable));
        if ($this->table === null)
            $this->table = new stdClass();
    }

    public function GetUserByEmail($email)
    {
        //MyPrint::PrintBeutiful($this->table);
        return $this->table->$email;
    }

    public function UpdateBaseByUser(MyUser $user)
    {
        $email = $user->Email;
        $this->table->$email = $user;
        file_put_contents($this->nameOfTable, json_encode($this->table));
    }

    public function GetAllUsers()
    {
        return $this->table;
    }

}



class MyUser
{
    public string $Name;
    public string $Email;
    public string $Password;
    public GroupOfUser $GroupOfUser;
    public string $image;

    public function __construct($Email, $Name, $Password, $GroupOfUser)
    {
        $this->Email = $Email;
        $this->Name = $Name;
        $this->Password = $Password;
        if (is_string($GroupOfUser))
            $this->GroupOfUser = GroupOfUser::from($GroupOfUser);
        else
            $this->GroupOfUser = $GroupOfUser;
    }

}

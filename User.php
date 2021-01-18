<?php
// definire una classe User che "mappa" la tabella users
class User {
    public $user_id;
    public $name;
    public $lastname;
    public $userName;
    public $password;
    public $email;
    public $age;
    public $telephone;
    public $address;

    function __construct($_userName, $_password = '********', $_email = '*****@gmail.com') {
        $this->userName = $_userName;
        $this->password = $_password;
        $this->email = $_email;
    }
}
?>

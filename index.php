<?php
// definire la struttura di una tabella users che contiene i dati degli utenti di un blog
// definire una classe User che "mappa" la tabella users
class User {
    public $name;
    public $lastname;
    public $userName;
    public $password;
    public $email;
    public $age;
}

// creare alcune istanze della classe User per stampare i dati degli utenti
$user1 = new User;
$user2 = new User;
$user3 = new User;
?>

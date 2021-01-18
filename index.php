<?php
// includo User.php nel file index.php
require('User.php');

// creare alcune istanze della classe User per stampare i dati degli utenti
$user1 = new User;
$user2 = new User;
$user3 = new User;

var_dump($user1);
var_dump($user2);
var_dump($user3);
?>

<?php
// includo User.php nel file index.php
require('User.php');

// creare alcune istanze della classe User per stampare i dati degli utenti
$user1 = new User('LRossi32');
$user2 = new User('SVerdi22');
$user3 = new User('GNeri45');

$user1->name = 'Luca';
$user1->lastname = 'Rossi';
$user1->setAge(32);
$user1->telephone = '123456';
$user1->address = 'Via dei mille 20 Torino';
var_dump($user1);

$user2->name = 'Silvia';
$user2->lastname = 'Verdi';
$user2->setAge(22);
$user2->telephone = '123456';
$user2->address = 'Via dei mille 20 Torino';
var_dump($user2);

$user3->name = 'Giulio';
$user3->lastname = 'Neri';
$user3->setAge(45);
$user3->telephone = '123456';
$user3->address = 'Via dei mille 20 Torino';
var_dump($user3);
?>

<?php
// includo User.php nel file index.php
require('User.php');

// creare alcune istanze della classe User
$user1 = new User('LRossi32');
$user2 = new User('SVerdi22');
$user3 = new User('GNeri45');

$user1->name = 'Luca';
$user1->lastname = 'Rossi';
$user1->setAge(32);
$user1->telephone = '123456';
$user1->address = 'Via dei mille 20 Torino';
// var_dump($user1);

$user2->name = 'Silvia';
$user2->lastname = 'Verdi';
$user2->setAge(22);
$user2->telephone = '123456';
$user2->address = 'Via dei mille 20 Torino';
// var_dump($user2);

$user3->name = 'Giulio';
$user3->lastname = 'Neri';
$user3->setAge(45);
$user3->telephone = '123456';
$user3->address = 'Via dei mille 20 Torino';
// var_dump($user3);
?>

<!-- stampare i dati degli utenti in pagina -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog Users</title>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!-- style -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section id="users">
            <div class="container">
                <h1>Blog Users</h1>
                <div class="user">
                    <h2>User1</h2>
                    <span><?php echo $user1->name ?></span>
                    <span><?php echo $user1->lastname ?></span>
                    <p><?php echo $user1->age ?> anni</p>
                    <p>Indirizzo: <?php echo $user1->address ?></p>
                    <p>numero di telefono: <?php echo $user1->telephone ?></p>
                    <p>Email: <?php echo $user1->email; ?></p>
                    <p>Username: <?php echo $user1->userName ?></p>
                    <p>Password: <?php echo $user1->password ?></p>

                </div>
                <div class="user">
                    <h2>User2</h2>
                    <span><?php echo $user2->name ?></span>
                    <span><?php echo $user2->lastname ?></span>
                    <p><?php echo $user2->age ?> anni</p>
                    <p>Indirizzo: <?php echo $user2->address ?></p>
                    <p>numero di telefono: <?php echo $user2->telephone ?></p>
                    <p>Email: <?php echo $user2->email; ?></p>
                    <p>Username: <?php echo $user2->userName ?></p>
                    <p>Password: <?php echo $user2->password ?></p>

                </div>
                <div class="user">
                    <h2>User3</h2>
                    <span><?php echo $user3->name ?></span>
                    <span><?php echo $user3->lastname ?></span>
                    <p><?php echo $user3->age ?> anni</p>
                    <p>Indirizzo: <?php echo $user3->address ?></p>
                    <p>numero di telefono: <?php echo $user3->telephone ?></p>
                    <p>Email: <?php echo $user3->email; ?></p>
                    <p>Username: <?php echo $user3->userName ?></p>
                    <p>Password: <?php echo $user3->password ?></p>

                </div>
            </div>
        </section>
    </body>
</html>

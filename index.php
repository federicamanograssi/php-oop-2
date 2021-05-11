<?php
ini_set('display_errors', 1);

//file necessari
require 'classes/user.php';
    
$ppl01 = new User('utonto01', 'amministratore');
$ppl01->user_id = 01;
$ppl01->user_name="Federica";
$ppl01->user_lastname="Federica";
$ppl01->user_email="federica@gmail.com";

$ppl02 = new User('utonto02', 'moderatore');
$ppl02->user_id = 02;
$ppl02->user_name="Laura";
$ppl02->user_lastname="Laura";
$ppl02->user_email="laura@gmail.com";

$ppl03 = new User('utonto03', 'utente');
$ppl03->user_id = 03;
$ppl03->user_name="Michela";
$ppl03->user_lastname="Michela";
$ppl03->user_email="michela@gmail.com";

$users = [$ppl01,$ppl02,$ppl03];

// var_dump($users);

foreach ($users as $user) {
    echo 
    '<h1>User id : '.$user->user_id.'</h1>
    <p><strong>Nome :</strong> '.$user->user_name.'</p>
    <p><strong>Cognome :</strong> '.$user->user_lastname.'</p>
    <p><strong>Nickname :</strong> '.$user->user_nickname.'</p>
    <p><strong>Email :</strong> '.$user->user_email.'</p>
    <p><strong>Ruolo :</strong> '.$user->user_role.'</p>';
}

?>
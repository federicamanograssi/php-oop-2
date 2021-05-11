<?php
ini_set('display_errors', 1);

//file necessari
require 'classes/user.php';
    
$ppl01 = new User('utonto01', 'amministratore');
$ppl01->user_id = 01;
$ppl01->user_name="Federica";
$ppl01->user_email="federica@gmail.com";

$ppl02 = new User('utonto02', 'amministratore');
$ppl02->user_id = 02;
$ppl02->user_name="Laura";
$ppl02->user_email="laura@gmail.com";

$ppl03 = new User('utonto03', 'amministratore');
$ppl03->user_id = 03;
$ppl03->user_name="Michela";
$ppl03->user_email="michela@gmail.com";
var_dump($ppl01,$ppl02,$ppl03);
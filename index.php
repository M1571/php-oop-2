<?php

require_once __DIR__ . '/fold/user.php';
require_once __DIR__ . '/fold/registrati.php';
require_once __DIR__ . '/fold/prodotti.php';
require_once __DIR__ . '/fold/carta.php';

$DateAndTime = date('m');  
echo $DateAndTime;

$AUser = new user('Mimmo', 'Mimmetti');
$BUser = new registrati('Arturo', 'Menegatti', 'Art-gat', 'PasswordGattosa');

$Cuccia = new prodotti('cucce', 'rosso', 30);
$Antipulci = new prodotti('antipulci', 'verde', 20);

$cartaDiCredito = new cartaDiCredito(20, 04, 2022);

var_dump($AUser);
var_dump($BUser);
var_dump($Cuccia);
var_dump($Antipulci);
var_dump($cartaDiCredito);

?>
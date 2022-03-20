<?php

require_once __DIR__ .'/classi/Utente.php';
require_once __DIR__.'/classi/CartaCredito.php';

$myuser = new utente('Mattia', 'Bardino' , 'Mattia.errol@gmail.com');

$myCreditCard = new cartaCredito();

$myCreditCard->setMonth('04');
$myCreditCard->setYear('22');
$myCreditCard->setCvv('533');
$myCreditCard->setNumber('1313131313131313');
$myCreditCard->owner = 'Mattia Bardino';

if (!$myCreditCard->isExpired()) {
    $myuser->setCreditCard($myCreditCard);
}

var_dump($myuser);
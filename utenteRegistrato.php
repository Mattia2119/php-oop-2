<?php

require_once __DIR__ . '/Utente.php';

class utenteRegistrato extends utente {
    //imposto un valore sconto di default per la classe che rappresenta il mio utente registrato
    protected $discount = 20;
}

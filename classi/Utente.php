<?php

class utente {
    public $nome;
    public $cognome;
    protected $email;
    protected $discount = 0; //lo sconto di default per il mio utente generico sarà 0//
    protected $creditCard;

    public function __construct($nome,$cognome,$email)
    {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this ->setEmail($email); //passo direttamente la setEmail alla proprietà $email da costruttore//
    }

    //Essendo $email e $discount proprietà protette, per potervi accedere fuori dalla classe dovrò creare dei metodi di getter//
    public function getEmail() {
        return $this -> email;
    }

    public function getDiscount() {
        return $this -> discount; 
    }
    
    //Funzione per la validazione della mail//
    public function setEmail($email) {
        if (strpos($email,'@') !== false && strpos($email,'.') !== false) {
            $this -> email = $email;
        } else {
            echo"La mail che hai inserito non è valida";
        }
    }

    public function setCreditCard($creditCard) {
        $this -> creditCard = $creditCard;
    } 
}
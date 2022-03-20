<?php 

class cartaCredito {
    public $owner;
    private $expirationMonth;
    private $expirationYear;
    private $cvv;
    private $number;

    //Creo una funzione di settaggio del mese
    public function setMonth($number) {
        if (is_numeric($number) && $number <= 12 && $number > 0) {
            $this -> expirationMonth = $number;
        } else {
            echo 'La data di scadenza del mese non è corretta';
        }
    }
    //Creo una funzione di settaggio dell'anno
    public function setYear($number) {
        if (is_numeric($number) && $number >= 0 && $number <= 99){
            $this -> expirationYear = $number;
        } else {
            echo "La data di scadenza dell'anno non è corretta";
        }
    }
    //Creo una funzione di settaggio del numero Cvv
    public function setCvv($number) {
        if(is_numeric($number) && $number >= 0 && $number <= 999) {
            $this -> cvv = $number;
        }
    } 
    //Creo una funzione di settaggio del numero della carta
    public function setNumber($number) {
        if(is_numeric($number) && strlen($number) == 16) {
            $this -> number = $number;
        }
    } 
    //Essendo metodi protected mi creo dei metodi get per richiamarli fuori da questa classe
    public function getExpirationMonth() {
        return $this -> expirationMonth;
    }

    public function getExpirationYear() {
        return $this -> expirationYear;
    }

    public function getCvv() {
        return $this -> cvv;
    }

    public function getNumber() {
        return $this -> number;
    }

    //Creo una funzione di controllo della scadenza della carta di credito

    public function isExpired() {
        $expires = DateTime::createFromFormat('m-y', $this->expirationMonth. '-'. $this ->expirationYear);
        $now = new DateTime();

        if ($expires < $now) {
            return true;
        } else {
            return false;
        }
    }
}



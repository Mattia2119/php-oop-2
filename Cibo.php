<?php 
//importo il contenuto della cartella Prodotto.php che mi contiene la classe genitore
require_once __DIR__ . '/Prodotto.php';

//Vado a creare la sottoclasse Cibo come extend della classe product
class food extends product {
     public $expiration;
}
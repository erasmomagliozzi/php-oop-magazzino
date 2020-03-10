<?php

 require_once 'Prodotto.php';
 require_once 'Alimentari.php';


$newProdotto = new Prodotto('Banana');
$newProdotto->prezzo = '1.99';
$newProdotto->categoria = 'Alimentari';
$newProdotto->pesoLordo = 0.6;
$newProdotto->pesoTara = 0.1;
$newProdotto->scadenza = '05/20';
echo $newProdotto->pesoNetto();

var_dump($newProdotto);

$newProdotto = new Prodotto('Arancia');
$newProdotto->prezzo = '0.99';
$newProdotto->categoria = 'Alimentari';
$newProdotto->pesoLordo = 0.9;
$newProdotto->pesoTara = 0.1;
$newProdotto->scadenza = '04/20';
echo $newProdotto->pesoNetto();

var_dump($newProdotto);

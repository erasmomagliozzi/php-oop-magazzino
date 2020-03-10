<?php

 require_once 'Prodotto.php';
 require_once 'Alimentari.php';


$newProdotto = new Prodotto('Alimentari');
$newProdotto->titolo = 'Banana';
$newProdotto->prezzo = '1.99';
$newProdotto->pesoLordo = 0.6;
$newProdotto->pesoTara = 0.1;
$newProdotto->scadenza = '05/20';
echo $newProdotto->pesoNetto();
echo $newProdotto->title();

var_dump($newProdotto);

$newProdotto = new Prodotto('Alimentari');
$newProdotto->titolo = 'Arancia';
$newProdotto->prezzo = '0.99';
$newProdotto->pesoLordo = 0.9;
$newProdotto->pesoTara = 0.1;
$newProdotto->scadenza = '04/20';
echo $newProdotto->pesoNetto();
echo $newProdotto->title();

var_dump($newProdotto);

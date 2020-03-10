<?php
class Prodotto
{
  public $titolo;
  public $descrizione;
  public $prezzo;
  public $categoria;
  function __construct($titolo) {
    $this->titolo = $titolo;
  }

}
class Alimentari extends Prodotto
{
  public $pesoLordo;
  public $pesoTara;
  public $scadenza;
  public function pesoNetto()
  {
    return $this->pesoLordo - $this->$pesoTara;
  }

}

 $banana = new Alimentari('Banana');
 $descrizione = 'Banane dal Congo';
 $prezzo = '1.99 kg';
 $categoria = 'Alimentari';
 $pesoLordo = 0.6;
 $pesoTara = 0.1;
 $scadenza = '05/20';
 pesoNetto();
 var_dump($banana);

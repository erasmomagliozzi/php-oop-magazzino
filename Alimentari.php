<?php
require_once 'Prodotto.php';

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

 

<?php
require_once __DIR__ . '/traits/price.php';
class Prodotto
{
  use Price;
  public $titolo;
  public $descrizione;
  public $categoria;
  function __construct($_titolo)
  {
    $this->titolo = $_titolo;
  }
  public function pesoNetto()
  {
    return $this->pesoLordo - $this->pesoTara;
  }

}


// cat php_error.log

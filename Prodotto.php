<?php
require_once __DIR__ . '/traits/price.php';
class Prodotto
{
  use Price;
  public $titolo;
  public $descrizione;
  public $categoria;
  function __construct($_categoria)
  {
    $this->categoria = $_categoria;
  }
  public function pesoNetto()
  {
    return $this->pesoLordo - $this->pesoTara;
  }
  public function title() {
    if(empty($this->titolo)) {
      die('Non hai messo il titolo');
    }
    return $this->titolo;
  }

}


// cat php_error.log

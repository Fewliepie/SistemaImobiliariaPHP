<?php

class Apartamento extends Imovel {
  private $condominio;

  function __construct(int $quartos, float $valor, string $endereco, float $condominio) {
    parent::__construct($quartos, $valor, $endereco);
    $this->condominio = $condominio;
  }

  function __toString() {
    return parent::__toString() . ", condomínio R$ {$this->condominio}";
  }
}
?>

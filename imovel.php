<?php

class Imovel {
  private $quartos;
  private $valor;
  private $endereco;

  function __construct(int $quartos, float $valor, string $endereco) {
    $this->quartos = $quartos;
    $this->valor = $valor;
    $this->endereco = $endereco;
  }

  function __toString() {
    return "Imóvel: {$this->quartos} quartos, valor R$ {$this->valor}, endereço: {$this->endereco}";
  }
}
?>

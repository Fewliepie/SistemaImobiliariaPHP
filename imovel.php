<?php

 //Preciso de uma classe imóvel que contenha os atributos:
 //quartos(int), valor(float), endereco(string),  
 //com um construtor e um tostring em php

class Imovel {
  private int $quartos;
  private float $valor;
  private string $endereco;

  function __construct(int $quartos, float $valor, string$endereco) {
    $this->quartos = $quartos;
    $this->valor = $valor;
    $this->endereco = $endereco;
  }

  function __toString() {
    return "Imóvel: {$this->quartos} quartos, valor R$ {$this->valor}, endereço: {$this->endereco}";
  }
}
?>

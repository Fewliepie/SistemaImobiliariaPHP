<?php
//Agora preciso de uma classe "Apartamento" 
//que herde tudo de imóvel, 
//mas tenha tambem um atributo condominio(float)


final class Apartamento extends Imovel {
  private float $condominio;

  function __construct(int $quartos, float $valor, string $endereco, float$condominio) {
    parent::__construct($quartos, $valor, $endereco);
    $this->condominio = $condominio;
  }

  function __toString() {
    return parent::__toString() . ", condomínio R$ {$this->condominio}";
  }
}
?>

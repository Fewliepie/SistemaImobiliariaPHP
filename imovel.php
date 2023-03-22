<?php

 //Preciso de uma classe imóvel que contenha os atributos:
 //quartos(int), valor(float), endereco(string),  
 //com um construtor e um tostring em php

class Imovel {
    private $quartos;
    private $valor;
    private $endereco;
    
    public function __construct($quartos, $valor, $endereco) {
        $this->quartos = $quartos;
        $this->valor = $valor;
        $this->endereco = $endereco;
    }
    
    public function __toString() {
        return "Endereço: ".$this->endereco.", Quartos: ".$this->quartos.", Valor: R$".$this->valor;
    }
}

?>

<?php
//Agora preciso de uma classe "casa" que herde tudo de imóvel,
// mas tenha também um atributo quintal(boolean) 


class Casa extends Imovel {
    private $quintal;
    
    public function __construct($quartos, $valor, $endereco, $quintal) {
        parent::__construct($quartos, $valor, $endereco);
        $this->quintal = $quintal;
    }
    
    public function __toString() {
        return parent::__toString().", Quintal: ".($this->quintal ? "Sim" : "Não");
    }
}

?>

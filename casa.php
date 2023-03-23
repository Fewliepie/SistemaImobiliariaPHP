<?php
//Agora preciso de uma classe "casa" que herde tudo de imóvel,
// mas tenha também um atributo quintal(boolean) 


final class Casa extends Imovel {
    private bool $quintal;
    
    public function __construct(int $quartos, float $valor, string $endereco, bool $quintal) {
        parent::__construct($quartos, $valor, $endereco);
        $this->quintal = $quintal;
    }
    
    public function __toString() {
        return parent::__toString().", Quintal: ".($this->quintal ? "Sim" : "Não");
    }
}
?>

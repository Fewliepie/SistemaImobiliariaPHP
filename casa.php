<?php

class Casa extends Imovel {
    private $quintal;
    
    public function __construct(int $quartos, float $valor, string $endereco, bool $quintal) {
        parent::__construct($quartos, $valor, $endereco);
        $this->quintal = $quintal;
    }
    
    public function __toString() {
        return parent::__toString().", Quintal: ".($this->quintal ? "Sim" : "Não");
    }
}
?>

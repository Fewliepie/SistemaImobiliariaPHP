<?php

include('imovel.php');
include('casa.php');
include('apartamento.php');

function menu() {
    
    $casas = array();
    $apartamentos = array();
    $opcao = 0;

    do {
        echo "==============================\n";
        echo " 1- CADATRAR CASA.\n";
        echo " 2- CADASTRAR APARTAMENTO.\n";
        echo " 3- LISTAR CASAS.\n";
        echo " 4- LISTAR APARTAMENTOS.\n";
        echo " 5- SAIR. \n";
        echo "==============================\n";

        $opcao = (int) readline("Opção: ");
        

        switch($opcao) {
            case 1: 
                echo "CADASTRAR CASA \n";
                echo "\n";
                $quartos    = readline("Quantidade de quartos: ");
                $valor      = readline("Valor do imóvel: ");
                $endereco   = readline("Insira o endereço: ");
                $quintal    = readline("Possui quintal? "); 
                echo "\n";

                $casa = new Casa ($quartos, $valor, $endereco, $quintal);

                $casas[] = $casa;
                
                echo "CASA CADASTRADA.\n";
                echo "\n";
                break;

            case 2:
                echo "CADASTRAR APARTAMENTO \n";
                echo "\n";
                $quartos    = readline("Quantidade de quartos: ");
                $valor      = readline("Valor do imóvel: ");
                $endereco   = readline("Insira o endereço: ");
                $condominio    = readline("Valor do condomínio: ");
                echo "\n";

                $apartamento = new Apartamento($quartos, $valor, $endereco, $condominio);

                $apartamentos[] = $apartamento;
                
                echo "APARTAMENTO CADASTRADO. \n";
                echo "\n";
                break;

            case 3:
                echo "LISTAR CASAS \n";
                
                if (count($casas) == 0) {
                    echo "Não há casas cadastradas. \n";
                }
                else{
                foreach ($casas as $casa) {
                    echo $casa->__toString() . "\n";}
                }
                break;

            case 4:
                echo "LISTAR APARTAMENTOS \n";
                
                if (count($apartamentos) == 0) {
                     echo "Não há apartamentos cadastrados. \n";
                } 
                else {
                foreach ($apartamentos as $apartamento) {
                    echo $apartamento->__toString() . "\n";}
                }
                break;
                
            case 5:
                echo "Sair \n";
                break;
                
            default:
            menu();
            
        }

    } while ($opcao >= 1 && $opcao <= 3);

}
menu ();
?>
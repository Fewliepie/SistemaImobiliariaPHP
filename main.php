<?php

include(imovel.php);
include(casa.php);
include(apartamento.php);

function menu() {
    
    $casas = array();
    $opcao = 0;

    do {

        echo " 1- selecione para cadastrar casa. ". "\n";
        echo " 2- selecione para cadastrar apartamento. ". "\n";
        echo " 3- listar casas.". "\n";
        echo " 4- Sair". "\n";

        $opcao = (int) readline("Opção: ");

        switch($opcao) {
            case 1: 
                echo "cadastrar casa \n";
                $quartos    = readline("Quantidade de quartos: ");
                $valor      = readline("Valor do imóvel: ");
                $endereco   = readline("Insira o endereço: ");
                $quintal    = readline("Possui quintal? "); 

                $casa = new Casa($quartos, $valor, $endereco, $quintal, $condominio);

                $casa[] = $casa;

                echo "Imóvel cadastrado. "."\n";
                break;

            case 2:
                echo "cadastrar apartamento \n";
                break;

            case 3:
                echo "listar imóveis \n";
                break;

            case 4:
                echo "Sair \n";
                break;

            default:
            menu();
            
        }

    } while ($opcao >= 1 && $opcao <= 3);

}
menu ();
?>
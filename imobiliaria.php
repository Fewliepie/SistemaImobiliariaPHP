<?php

require 'metodos/cadastrar.php';

function menu() {
    
    $imoveis = array (); 
    $opcao = 0;


    do {

        echo " 1- selecione para cadastrar casa. ". "\n";
        echo " 2- selecione para cadastrar apartamento. ". "\n";
        echo " 3- listar imóveis.". "\n";
        echo " 4- Sair". "\n";

        echo ("---------------------------------\n");
        echo ("Total de imóveis cadastrados: ".count($imoveis)."\n");
        echo ("---------------------------------\n");

        $opcao = (int) readline("Opção: ");

        switch($opcao) {
            case 1: 
                echo "cadastrar casa \n";
                $quartos    = readline("Quantidade de quartos: ");
                $valor      = readline("Valor do imóvel: ");
                $endereco   = readline("Insira o endereço: ");
                $quintal    = readline("Possui quintal? "); 
                $condominio = readline("Valor do condminio: ");

                $cadastrado = new CadastroImoveis ($quartos, $valor, $endereco, $quintal, $condominio);

                // guarda obj no vetor
                $imoveis[] = $cadastrado;

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
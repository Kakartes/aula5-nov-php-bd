<?php

require_once("util/Conexao.php");

//testar a conexao

//$objConexao = new Conexao(); <--não precisa mais pq agr é direto na classe conexao, pq mudou pra stetic
/*$conexao = Conexao::getConexao();
print_r($conexao);*/
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");


do{
    echo "\n\n-----cadastro de cliente---\n\n";
    echo "1- inserir cliente PF\n";
    echo "2- inserir cliente PJ\n";
    echo "0- sair\n";

    $opcao = readline("informe uma opção ");

    switch($opcao){
        case 1:
            //inserir
            $clientePF = new ClientePF();
            $clientePF->setNomeCompleto(readline(" informe nome completo: "));
            $clientePF->setNomeSocial(readline(" nome social: "));
            $clientePF->setCpf(readline(" informe cpf: "));
            $clientePF->setEmail(readline("informe o e-mail: "));


            break;

        case 2:
            //inserir
            


            break;



        case 0:
            echo "\n programa encerrado! \n";

            break;

            default:
            echo "\n opção invalida";
            break;


    } 

} while($opcao != 0);
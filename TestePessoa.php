<?php
require_once("Pessoa.class.php");//importando classe Pessoa

$pessoa = new Pessoa(); //Instanciando classe pessoa
$pessoa->setNome("Pedro Henrique Santos de Jesus"); //Atribuindo conteúdo
echo $pessoa->getNome(); //Exibindo Dados

?>
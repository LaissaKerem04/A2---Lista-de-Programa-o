<?php

class Pessoa {
    public $nome;
    public $idade;
    public $dependentes = array();
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = intval($idade); 
    }
}

$dados = array_slice($argv, 1);

$responsavel = new Pessoa($dados[0], $dados[1]);

$dependentes = array_slice($dados, 2);

for ($i = 0; $i < count($dependentes); $i += 2) {
    $nome = $dependentes[$i];
    $idade = $dependentes[$i + 1];
    $dependente = new Pessoa($nome, $idade);
    $responsavel->dependentes[] = $dependente;
}

var_dump($responsavel);

?>
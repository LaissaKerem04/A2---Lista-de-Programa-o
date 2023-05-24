<?php

$caminho_arquivo = $argv[1];

function exibir_conteudo($caminho_arquivo) {
    $conteudoArquivo = file_get_contents($caminho_arquivo);
    return $conteudoArquivo;
}

var_dump(exibir_conteudo($caminho_arquivo));

?>
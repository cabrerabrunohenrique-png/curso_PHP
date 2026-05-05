<?php

$nomes = [
    'aluno1' => 'erica',
    'aluno2' => 'ana',
    'aluno3' => 'igor',
    'aluno4' => 'leandro',
];

// esse comando é mais simples para leitura de lista
// o foreach vai precisar do "Array" nesse caso é o $nome
// depois ele vai pedir o nome das variaves para distrubuir os dados
// no caso "aluno e erica"

foreach ($nomes as $chave => $nome)
    {
        echo"{$nome}";
    }


?>
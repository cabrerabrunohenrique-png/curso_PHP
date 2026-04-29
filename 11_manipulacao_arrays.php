<?php

echo '<pre>';


$nome = [
    'rubes', 'senac', 'america'
];
var_dump($nome);

// comando para colocar as palavras no formato maisculo

$nome[0] = strtoupper ($nome[0]);
$nome[1] = strtoupper ($nome[1]);
$nome[2] = strtoupper ($nome[2]);


var_dump($nome);


echo'<br>';
echo '<br>'; echo '<hr>'; 

// ele mapea a array e CRIOU UMA FUNCAO

$nome = array_map ('transformarParaMaiuscula', $nome);
function transformarParaMaiuscula ($valor)
{
    return strtoupper ($valor);
}


var_dump($nome);

?>
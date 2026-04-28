<?php

$carrinho = [

0 => 'macarrao',
1 => 'feijao',
2 =>  'arroz',
3 => 'batata',
4 => 'aaaaaa'
];


echo '<pre>';


// ele colocar em ordem crescente
arsort($carrinho);
var_dump($carrinho);


echo '<br>'; echo '<hr>';

//ele colocar em ordem descrescente
asort($carrinho);
var_dump($carrinho);

echo '<hr>'; echo '<br>';

//ele vai zerar a linha principal e vai renumerar
sort($carrinho);
var_dump($carrinho);
echo '<hr>';

?>
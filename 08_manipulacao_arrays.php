<?php

echo '<pre>';

$carrinho = [
    'arroz', 'sabao', 'feijao', 'balinhas'
];
var_dump($carrinho);

echo '<hr>';

//remove o ultimo elemento do ARRAY
//array_pop($carrinho);

/*var_dump($carrinho);

echo '<hr>';

array_shift($carrinho);
var_dump($carrinho);*/

echo '<hr>';

//para remover o campo selecionado 
unset($carrinho[3]);
var_dump($carrinho);

echo '<br>';
echo '<hr>';

//para adicionar mais campos
array_push($carrinho,'tapete');
array_push ($carrinho, 'rodo');
var_dump($carrinho);

echo '<br>'; echo '<hr>';

//para adicionar na frente 
array_unshift($carrinho,'microondas');
array_unshift($carrinho, 'tapete');
var_dump($carrinho); 

echo '<br>'; echo '<hr>';


//ele nao repete informação repetida, mostrando só os valores uma vez
$carrinho = array_unique($carrinho);
var_dump($carrinho);

?>
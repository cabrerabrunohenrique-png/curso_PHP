<?php

$nome ='carlos';


    // funcao para validar se existe a variavel( no caso saida é verdadeira)
if (isset($nome)){
    echo $nome. '<hr>';

}else{
    echo 'nao exixte'. '<hr>';
}

//funcao para "matar" a variavel
unset ($nome);
if (isset($nome)){
    echo $nome;

}else{
    echo 'nao existe';
}



?>
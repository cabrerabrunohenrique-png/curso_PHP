<?php

echo '<pre>';
//comando tras a casa que vc quer
$idade = [12,14,18,20,44,50,98,78,56];
echo $idade[count($idade)-2];

echo '<br>';

//comando tras a casa que vc quer
echo end ($idade);

echo '<br>'; echo '<hr>';



// comando tras o valor maior ou igual conforme solicitado

$idadeFiltradas = array_filter(
    $idade,function ($idade)
         {
            return $idade <= 18  ;
        });

    var_dump($idadeFiltradas);


echo '<br>'; echo '<hr>';

?>
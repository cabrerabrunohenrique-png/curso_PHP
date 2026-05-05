<?php

function escrever($texto){
    echo "{$texto} <br>";
}

escrever("algo");



function soma($n1, $n2){
    return $n1 + $n2;
}

echo soma(12,90).'<br>';


function conta ($n1, $n2, $taxa =2){
    return ($n1 + $n2) * $taxa;

}
echo conta(1,2) .'<br>';


function media($n1,$n2,$n3,$n4){
    return($n1+$n2+$n3+$n4) / 4;

}
echo  'Sua média é ' . media(2,5,8,10);


?>
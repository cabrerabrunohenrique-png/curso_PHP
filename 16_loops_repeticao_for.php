<?php

$nomes = [
    'joao',
    'rita',
    'claudio',
    'fernanda'
    ];

    echo '<hr>';

 // essa é a estrutura de loope de repeticao
 // primeiro vc informa o inicio
 // segundo a condicao
 // terceira o encremendo 

 // primeiro( começar no 0)
 //segundo ( enquanto o conut( nesse caso é um comando que conta a
 // cas do array))
 // terceiro ele vai somar 

    for ($i = 0; $i <count($nomes); $i++){
            echo $nomes [$i] .'<br>' ;
    }


    for ($i = 10; $i>0; $i --){
        echo "{$i} <br>";
    }

    echo "<hr>";

    for ($i = 0; $i<10; $i++){
        echo "{$i} <br>";
    }

    echo "<br>"."<hr>";



?>
<?php

$estado ='sao paulo/sp';
//ele vai "desconsiderar" e vai pular para um array novo
$arrayEstado = explode ('/', $estado);
echo '<pre>';
var_dump($arrayEstado);
print_r ($arrayEstado) . '<br>';



$info ='sao paulo/sp/brasil/terra';
$arrayInfo = explode ('/', $info);
var_dump($arrayInfo);
print_r ($arrayInfo);



?>
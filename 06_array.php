<?php
//$carros = ['uno','gol','fusion','civic'];
//echo $carros [2];

//$carroUm = ['uno','fiat','branco'];
//echo $carroUm[2];

$carroUm = [
    'modelo' =>'uno',
    'marca' => 'fiat',
    'cor' =>   'branco',
];

echo $carroUm[ 'cor']; 
echo "<br>";
echo $carroUm['modelo'];
echo '<br>';
echo $carroUm['marca'];
echo ' - ';
echo $carroUm['marca'];
echo '<br>';
echo '<br>';
echo '<br>';


$carroDois = [
    'modelo' => 'punto',
    'marca' => 'fiat',
    'cor' => 'amarelo'
];

echo $carroDois ['modelo'];
echo '<br>';
echo $carroDois ['marca'];
echo'<br>';
echo $carroDois ['cor'];
echo '<br>';

echo '<br>'; echo '<br>';



$carroTresTheer = [
    'modelo' => 'S10',
    'marca' => 'Fiat',
    'cor' => 'black',
];

echo $carroTresTheer ['modelo'];
echo '<br>';
echo $carroTresTheer ['marca'];
echo '<br>';
echo $carroTresTheer ['cor'];
echo '<br>'; echo '<br>';


$carroQuatroFour = [
    'modelo' => 'Toro',
    'marca' =>  'Ford',
    'cor' => 'Blue'
];

echo 'Modelo: '; echo $carroQuatroFour ['modelo']; echo'<br>';
echo 'Marca: '; echo $carroQuatroFour ['marca']; echo '<br>';
echo 'Cor: '; echo $carroQuatroFour ['cor']; echo '<br>';






?>
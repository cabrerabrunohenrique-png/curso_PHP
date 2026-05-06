<?php

$empresa = 'senac jau';
echo "$empresa <br>";
//ele troca as palavras, no caso trocou o jau por americana
$novaEmpresa = str_replace('jau','americana', $empresa);
echo "$novaEmpresa <br>" . '<hr>';

// vai mostrar a quantidada de caracteres conforme solicitado
echo substr($novaEmpresa,0,4). '<br>'. '<hr>';


//vai contar as quantidades de caracteres
echo strlen($novaEmpresa) .'<br>'. '<hr>';
?>
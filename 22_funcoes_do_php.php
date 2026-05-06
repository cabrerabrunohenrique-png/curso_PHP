<?php

$name ='senac americana - cursos de ti';
// tudo em letra maiscula
echo strtoupper($name). '<hr>';

// tudo em letra minuscula
echo strtolower($name). '<hr>';

// ele pega a primeira letra da varivel e transforma em maiscula
echo ucfirst(strtolower($name)). '<hr>';

// ele deixa todas as primeiras letras maiscula
echo ucwords(strtolower($name)) . '<hr>';



?>
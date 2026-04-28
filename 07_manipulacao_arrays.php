<?php

$inforEmpresa = [
    'nome' => 'Senac Amercaian',
    'funcionarioi' => 'Paulo SAntos',
    'anoAtual' => 2026,
    ];

    echo $inforEmpresa ['nome'];
   

    $infoCursos = [
        'curso' => ['pho','js','VueJs','Laravel'],
        'totalCurso' => 26,
    ];

    echo '<pre>';

    /* o ARRAY KEYS vai informar as chaves do ARRAY e nao o valor;
    ou seja o TITUlo e nao o valor*/ 
    var_dump(array_keys($inforEmpresa));

    /* o ARRAY VALUES vai  o valor*/ 
    var_dump(array_values($inforEmpresa));
    /* informa a quantidade de colunas dentro de um ARRAY*/
    var_dump(count($inforEmpresa));

    $inforEmpresa = array_merge($inforEmpresa,$infoCursos);
    print_r($inforEmpresa);


    

    ?>
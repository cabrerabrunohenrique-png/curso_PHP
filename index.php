<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    // aqui criar o array de mulheres

    $ArrayMulheres = [
        ['Ada Lovelace','ada-lovelace.webp','Matemática inglesa, reconhecida como a primeira programadora da história. Escreveu o primeiro algoritmo para ser processado pela Máquina Analítica de Babbage, prevendo que computadores poderiam ir além de simples cálculos matemáticos.
'],
        ['Dorothy Vaughan','dorothy-vaughan.png','Matemática e "computador humano" da NASA. Foi a primeira supervisora negra da agência. Previu a ascensão das máquinas, aprendeu a linguagem FORTRAN e liderou a transição de sua equipe para a era da computação digital.'],
        ['Grace Hopper
','grace-hopper.webp','Almirante e cientista da computação norte-americana. Criou o primeiro compilador e foi fundamental no desenvolvimento da linguagem COBOL. Popularizou o termo "debugging" após remover uma mariposa física de dentro de um computador.
'],
        ['Margaret Hamilton
','margareth-hamilton.webp','Cientista da computação que liderou a equipe que desenvolveu o software de voo para o Programa Apollo da NASA. Seu trabalho foi crucial para o pouso na Lua em 1969, priorizando funções críticas para evitar falhas durante a missão.
'],
        ['Marissa Mayer
','marissa-mayer1.png','Executiva e engenheira de software, foi uma das primeiras funcionárias do Google, onde liderou o desenvolvimento de produtos icônicos como a Busca e o Gmail. Posteriormente, atuou como CEO do Yahoo!, sendo uma das mulheres mais influentes do Vale do Silício.
'],

    ]
    
    ?>

    <div class="galeria">
        
    <div class = "item">
        <img src ="<?php
            echo $ArrayMulheres [0][1];?>"
        >
        <h3>
            <?php
                echo $ArrayMulheres[0][0];
            ?>
        </h3>
        <p>
            <?php
                echo $ArrayMulheres[0][2];
            ?>
        </p>

    </div>

    <div class = "item">
        <img src ="<?php
            echo $ArrayMulheres [1][1];?>"
        >
        <h3>
            <?php
                echo $ArrayMulheres[1][0];
            ?>
        </h3>
        <p>
            <?php
                echo $ArrayMulheres[1][2];
            ?>
        </p>

    </div>

     <div class = "item">
        <img src ="<?php
            echo $ArrayMulheres [2][1];?>"
        >
        <h3>
            <?php
                echo $ArrayMulheres[2][0];
            ?>
        </h3>
        <p>
            <?php
                echo $ArrayMulheres[2][2];
            ?>
        </p>

    </div>

     <div class = "item">
        <img src ="<?php
            echo $ArrayMulheres [3][1];?>"
        >
        <h3>
            <?php
                echo $ArrayMulheres[3][0];
            ?>
        </h3>
        <p>
            <?php
                echo $ArrayMulheres[3][2];
            ?>
        </p>

    </div>

     <div class = "item">
        <img src ="<?php
            echo $ArrayMulheres [4][1];?>"
        >
        <h3>
            <?php
                echo $ArrayMulheres[4][0];
            ?>
        </h3>
        <p>
            <?php
                echo $ArrayMulheres[4][2];
            ?>
        </p>

    </div>

   

   
    
</body>
</html> 
<?php

   $nome = readline("Digite seu nome: ");
   $produto = readline("Digite um nome de um produto: ");
   $valor_unit = readline("Digite seu valor unitário R$ ");
   $quant = readline("Digite a sua quantidade: ");

   $total = $valor_unit * $quant;

   //echo "O produto " . $produto . " no valor de R$ " . $valor_unit . " na quantidade solicitada, deu um total de R$ " . $total . "\n";
   echo "O produto {$produto}, no valor de R$ $valor_unit e na quantidade solicitada, deu um total de R$ $total \n";
<?php
// Definindo códigos de cores ANSI
$corAzul = "\033[1;34m";     // Azul claro
$corVerde = "\033[1;32m";    // Verde claro
$corAmarelo = "\033[1;33m";  // Amarelo
$corVermelho = "\033[1;31m"; // Vermelho claro
$corReset = "\033[0m";       // Resetar cor

// Solicita o nome do usuário
echo "{$corAmarelo}Digite o seu nome: {$corReset}";
$nome = trim(fgets(STDIN));

// Solicita o nome do produto
echo "{$corAmarelo}Digite o nome do produto: {$corReset}";
$produto = trim(fgets(STDIN));

// Solicita o valor do produto
echo "{$corAmarelo}Digite o valor do produto: {$corReset}";
$valorProduto = (float) trim(fgets(STDIN));

// Solicita a quantidade de itens
echo "{$corAmarelo}Digite a quantidade de itens: {$corReset}";
$quantidade = (int) trim(fgets(STDIN));

// Calcula o valor total
$total = $valorProduto * $quantidade;

// Mostra o resultado
echo "\n{$corAzul}========= Resumo do Pedido ========={$corReset}\n";
echo "{$corVerde}Cliente: {$corReset}$nome\n";
echo "{$corVerde}Produto: {$corReset}$produto\n";
echo "{$corVerde}Valor unitário: {$corReset}R$ " . number_format($valorProduto, 2, ',', '.') . "\n";
echo "{$corVerde}Quantidade: {$corReset}$quantidade\n";
echo "{$corVerde}Total do Pedido: {$corReset}R$ " . number_format($total, 2, ',', '.') . "\n";
echo "{$corAzul}====================================={$corReset}\n";
?>

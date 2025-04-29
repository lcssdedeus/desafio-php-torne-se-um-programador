<?php
// Solicita o nome do usuário
echo "Digite o seu nome: ";
$nome = trim(fgets(STDIN));

// Solicita o nome do produto
echo "Digite o nome do produto: ";
$produto = trim(fgets(STDIN));

// Solicita o valor do produto
echo "Digite o valor do produto: ";
$valorProduto = (float) trim(fgets(STDIN));

// Solicita a quantidade de itens
echo "Digite a quantidade de itens: ";
$quantidade = (int) trim(fgets(STDIN));

// Calcula o valor total
$total = $valorProduto * $quantidade;

// Mostra o resultado
echo "\nResumo do Pedido:\n";
echo "Cliente: $nome\n";
echo "Produto: $produto\n";
echo "Valor unitário: R$ " . number_format($valorProduto, 2, ',', '.') . "\n";
echo "Quantidade: $quantidade\n";
echo "Total do Pedido: R$ " . number_format($total, 2, ',', '.') . "\n";
?>

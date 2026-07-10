<?php

/*Atividade 1- Compra no supermercado
Uma pessoa comprou arroz, feijão e leite. Armazene e calcule
● o preço e a quantidade de cada produto.
● calcule o valor total da compra.
● exiba o valor de cada item e o total.
● calcule e exiba o valor final após o desconto.
● Se o total da compra for maior que R$ 100,00, exiba: “Você ganhou um
desconto de R$ 10,00.*/

// Entradas - Variáveis 
$produto1 = "Arroz";
$preco1 = 21.00;
$quantidade1 = 2;
$totalProduto1 = $preco1 * $quantidade1;

$produto2 = "Feijão";
$preco2 = 10.00;
$quantidade2 = 1;
$totalProduto2 = $preco2 * $quantidade2;

$produto3 = "Leite";
$preco3 = 4.50;
$quantidade3 = 2;
$totalProduto3 = $preco3 * $quantidade3;

// Processamento
$valorTotalCompra = $totalProduto1 + $totalProduto2 + $totalProduto3;

$desconto = 0;

if ($valorTotalCompra >= 100.00) {
    $desconto = $valorTotalCompra * 10 / 100;
}

$valorTotalComDesconto = $valorTotalCompra - $desconto;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>

    <h2>Atividade 1</h2>
    <br>
    <p>Uma pessoa comprou arroz, feijão e leite. Armazene e calcule
        ● o preço e a quantidade de cada produto.
        ● calcule o valor total da compra.
        ● exiba o valor de cada item e o total.
        ● calcule e exiba o valor final após o desconto.
        ● Se o total da compra for maior que R$ 100,00, exiba: “Você ganhou um
        desconto de R$ 10,00.</p>

    <p><?php echo ("Produto: " . $produto1); ?></p>
    <p><?php echo ("Preço unitário: " . $preco1); ?> </p>
    <p><?php echo ("Quantidade: " . $quantidade1); ?></p>
    <p><?php echo ("Valor total: " . $totalProduto1); ?></p>
<br>
    <p><?php echo ("Produto: " . $produto2); ?></p>
    <p><?php echo ("Preço unitário: " . $preco2); ?></p>
    <p><?php echo ("Quantidade: " . $quantidade2); ?></p>
    <p><?php echo ("Valor total: " . $totalProduto2); ?></p>
<br>
    <p><?php echo ("Produto: " . $produto3); ?></p>
    <p><?php echo ("Preço unitário: " . $preco3); ?></p>
    <p><?php echo ("Quantidade: " . $quantidade3); ?></p>
    <p><?php echo ("Valor total: " . $totalProduto3); ?></p>
<br>
    <p><?php echo ("Valor da compra: " . $valorTotalCompra); ?></p>
<br>
    <p><?php echo ("Desconto: " . $desconto); ?></p>
<br>
    <p><?php echo ("Valor final da compra: " . $valorTotalComDesconto); ?></p>



</body>

</html>
<?php
/*Atividade 9 - Cálculo de frete 
Uma loja virtual precisa calcular o valor final de um pedido. Armazene e calcule:  
● Armazene o nome do produto. 
● Armazene o preço do produto. 
● Armazene a quantidade comprada. 
● Calcule o subtotal. 
● Calcule e exiba o valor final do pedido. 
● Considere um frete de R$ 20,00. 
● Se o subtotal for maior que R$ 200,00, o frete deverá ser zerado.*/

// Entradas - Variáveis
$nomeProduto = "Hidratante";
$precoProduto = 6;
$qtdProduto = 5;
$frete = 20;

//Processamento
$subtotal = ($precoProduto * $qtdProduto) + $frete;

if ($subtotal > 200) {
    $frete = 0;
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>
    <h3>Atividade 9</h3>

    <p>Uma loja virtual precisa calcular o valor final de um pedido. Armazene e calcule:
        ● Armazene o nome do produto.
        ● Armazene o preço do produto.
        ● Armazene a quantidade comprada.
        ● Calcule o subtotal.
        ● Calcule e exiba o valor final do pedido.
        ● Considere um frete de R$ 20,00.
        ● Se o subtotal for maior que R$ 200,00, o frete deverá ser zerado.</p>

        <p> <?php echo ("Nome do produto: " . $nomeProduto); ?> </p>
        <p> <?php echo ("Preço do produto: " . $precoProduto); ?> </p>
        <p> <?php echo ("Quantidade do produto: " . $qtdProduto); ?> </p>
        <p> <?php echo ("Valor do frete: " . $frete); ?> </p>
        <p> <?php echo ("Valor final da compra: " . $subtotal); ?> </p>

</body>

</html>
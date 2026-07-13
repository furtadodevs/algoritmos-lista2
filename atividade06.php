<?php
/*Atividade 6 - Venda de ingressos 
Um cinema deseja calcular o valor de uma compra. Armazene e calcule  
● Armazene a quantidade de ingressos. 
● Considere que cada ingresso custa R$ 30,00. 
● Calcule o valor total da compra. 
● Calcule e exiba o desconto. 
● Exiba o valor final da compra. 
● Se forem comprados mais de 5 ingressos, aplique um desconto de 10%.*/

// Entradas - Variáveis 
$qtdIngressos = 7;
$valorIngresso = 30.00;
$desconto = "Desconto de 10%";
// Processamento 
$valorCompra = $qtdIngressos * $valorIngresso;
$valorFinal = $valorCompra;
$valorDesconto = $valorCompra * 10 / 100;


// Se forem comprados mais de 5 ingressos, aplique um desconto de 10%.
if ($qtdIngressos > 5) {
    $valorFinal = $valorCompra - $valorDesconto;
} else {
    $desconto = "Sem desconto";
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
    <h3>Atividade 6</h3>

    <p>Um cinema deseja calcular o valor de uma compra. Armazene e calcule
        ● Armazene a quantidade de ingressos.
        ● Considere que cada ingresso custa R$ 30,00.
        ● Calcule o valor total da compra.
        ● Calcule e exiba o desconto.
        ● Exiba o valor final da compra.
        ● Se forem comprados mais de 5 ingressos, aplique um desconto de 10%.
    </p>

    <p> <?php echo ("Quantidade de ingressos: " . $qtdIngressos);  ?> </p>
    <p> <?php echo ("Valor do ingresso: " . $valorIngresso);  ?> </p>
    <p> <?php echo ("Valor da compra: " . $valorCompra);  ?> </p>
    <p> <?php echo ("Valor do desconto: " . $desconto);  ?> </p>
    <p> <?php echo ("Valor final da compra: " . $valorFinal);  ?> </p>

</body>

</html>
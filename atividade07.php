<?php
/*Atividade 7 - Comissão de vendedor 
Uma loja paga comissão aos vendedores. Armazene e calcule:  
● Armazene o nome do vendedor. 
● Armazene o valor total vendido. 
● Calcule uma comissão de 5% sobre as vendas. 
● Calcule o valor total recebido em comissão e bônus. 
● Exiba todos os resultados. 
● Se o valor vendido for maior que R$ 5.000,00, acrescente um bônus de R$ 
200,00.*/

// Entradas - Variáveis 
$nomeVendedor = "Gabrielle";
$valorVendido = 5000;
$bonus = "R$200,00";

// Processamento
$valorFinal = $valorVendido;

if ($valorVendido > 5000) {
    $valorFinal = $valorVendido + 200;
} else {
    $bonus = "Sem Bônus";
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
    <h3>Atividade 7</h3>

    <p>Uma loja paga comissão aos vendedores. Armazene e calcule:
        ● Armazene o nome do vendedor.
        ● Armazene o valor total vendido.
        ● Calcule uma comissão de 5% sobre as vendas.
        ● Calcule o valor total recebido em comissão e bônus.
        ● Exiba todos os resultados.
        ● Se o valor vendido for maior que R$ 5.000,00, acrescente um bônus de R$
        200,00.</p>

        <p> <?php echo ("Nome do vendendor: " . $nomeVendedor); ?> </p>
        <p> <?php echo ("Valor vendido: " . $valorVendido); ?> </p>
        <p> <?php echo ("Bônus: " . $bonus); ?> </p>
        <p> <?php echo ("Valor final: " . $valorFinal); ?> </p>
</body>

</html>
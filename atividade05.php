<?php
/*Atividade 5 - Conta de energia 
Uma empresa deseja calcular o valor da conta de energia de um cliente. Armazene e 
calcule 
● Armazene o nome do cliente. 
● Armazene a quantidade de quilowatts consumidos. 
● Considere o preço de R$ 0,90 por quilowatt. 
● Calcule o valor da conta. 
● Exiba o consumo, o valor inicial, a taxa e o valor final. 
● Se o consumo for maior que 200 quilowatts, acrescente uma taxa de R$ 25,00.*/

// Entradas - Variáveis 
$nomeCliente = "Gabrielle";
$consumoQuilowatts = 150;
$precoQuilowatts = 0.90;
$taxa = 25;
 
// Processamento
$valorConta = $consumoQuilowatts * $precoQuilowatts;
$valorFinal= $valorConta;

// Se o consumo for maior que 200 quilowatts, acrescente uma taxa de R$ 25,00.
if ($consumoQuilowatts > 200) {
    $valorFinal = $valorConta + $taxa;
} else {
    $taxa = " Não foi cobrada taxa adicional";
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
    <h3>Atividade 5</h3>
    <p>Uma empresa deseja calcular o valor da conta de energia de um cliente. Armazene e
        calcule
        ● Armazene o nome do cliente.
        ● Armazene a quantidade de quilowatts consumidos.
        ● Considere o preço de R$ 0,90 por quilowatt.
        ● Calcule o valor da conta.
        ● Exiba o consumo, o valor inicial, a taxa e o valor final.
        ● Se o consumo for maior que 200 quilowatts, acrescente uma taxa de R$ 25,00.</p>

    <p> <?php echo ("Nome do cliente: " . $nomeCliente); ?> </p>
    <p> <?php echo ("Consumo de quilowatts: " . $consumoQuilowatts); ?> </p>
    <p> <?php echo ("Valor da conta: " . $valorConta); ?> </p>
    <p> <?php echo ("Valor da taxa: " . $taxa); ?> </p>
    <p> <?php echo ("Valor final da conta: " . $valorFinal); ?> </p>
   
</body>

</html>
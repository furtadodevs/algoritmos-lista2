<?php
/*Atividade 10 - Academia 
Uma academia deseja calcular o valor do plano de um cliente. Armazene e calcule:  
● Armazene o nome do cliente. 
● Armazene o valor mensal do plano. 
● Armazene a quantidade de meses contratados. 
● Calcule o valor total do plano. 
● Calcule o valor do desconto. 
● Exiba o valor original, o desconto e o valor final. 
● Se forem contratados 6 meses ou mais, aplique um desconto de 15%.*/

// Entradas - Variáveis
$nomeCliente = "Gabrielle";
$valorPlano = 120;
$qtdMeses = 12;

// Processamentos
$valorPlano = $valorPlano * $qtdMeses;
$desconto = $valorPlano * 15 / 100;
$valorFinal = $valorPlano;

if ($qtdMeses >= 6) {
    $valorFinal = $valorPlano - $desconto;
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
    <h3>Aitividade 10</h3>

    <p>Uma academia deseja calcular o valor do plano de um cliente. Armazene e calcule:
        ● Armazene o nome do cliente.
        ● Armazene o valor mensal do plano.
        ● Armazene a quantidade de meses contratados.
        ● Calcule o valor total do plano.
        ● Calcule o valor do desconto.
        ● Exiba o valor original, o desconto e o valor final.
        ● Se forem contratados 6 meses ou mais, aplique um desconto de 15%.</p>

    <p> <?php echo ("Nome do cliente: " . $nomeCliente); ?> </p>
    <p> <?php echo ("Valor mensal: " . $valorPlano); ?> </p>
    <p> <?php echo ("Meses contratados: " . $qtdMeses); ?> </p>
    <p> <?php echo ("Valor do desconto: " . $desconto); ?> </p>
    <p> <?php echo ("Valor final: " . $valorFinal); ?> </p>
    
</body>

</html>
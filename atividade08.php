<?php
/*Atividade 8 - Reserva de hotel 
Um hotel deseja calcular o valor de uma hospedagem. Armazene e calcule:  
● Armazene o nome do hóspede. 
● Armazene a quantidade de diárias. 
● Considere o valor de R$ 180,00 por diária. 
● Calcule o valor da hospedagem. 
● Exiba o nome do hóspede, o valor inicial, o desconto e o valor final. 
● Se a quantidade de diárias for maior ou igual a 5, aplique um desconto de R$ 
100,00.*/

// Entradas - Variáveis
$nomeHospede = "Gabrielle";
$qtdDiarias = 4;
$valorDiarias = 180.00;

// Processamento
$somaDiarias = $qtdDiarias * $valorDiarias;
$desconto = $somaDiarias * 10 / 100;
$valorFinal = $somaDiarias;

if ($qtdDiarias >= 5) {
    $valorFinal = $somaDiarias - $desconto;
} else {
    $desconto = "Hospedagem sem desconto";
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
    <h3>Atividade 8</h3>

    <p>Um hotel deseja calcular o valor de uma hospedagem. Armazene e calcule:
        ● Armazene o nome do hóspede.
        ● Armazene a quantidade de diárias.
        ● Considere o valor de R$ 180,00 por diária.
        ● Calcule o valor da hospedagem.
        ● Exiba o nome do hóspede, o valor inicial, o desconto e o valor final.
        ● Se a quantidade de diárias for maior ou igual a 5, aplique um desconto de R$
        100,00. </p>

    <p> <?php echo ("Nome do hóspede: " . $nomeHospede); ?> </p>
    <p> <?php echo ("Valor da diária: " . $valorDiarias); ?> </p>
    <p> <?php echo ("Quantidade de diárias: " . $qtdDiarias); ?> </p>
    <p> <?php echo ("Soma das diárias: " . $somaDiarias); ?> </p>
    <p> <?php echo ("Valor do desconto: " . $desconto); ?> </p>
    <p> <?php echo ("Valor final: " . $valorFinal); ?> </p>
</body>

</html>
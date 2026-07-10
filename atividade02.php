<?php
/*Atividade 2 - Pagamento de funcionário
Uma empresa deseja calcular o salário de um funcionário. Armazene e calcule
 ● o nome do funcionário.
 ● o valor da hora trabalhada.
 ● a quantidade de horas trabalhadas.
 ● o salário bruto.
 ● exiba o nome, o salário bruto, o desconto e o salário final.
 ● Se o salário bruto for maior que R$ 2.500,00, desconte R$ 200,00.
*/

// Entradas - Variáveis
$nomeFuncionario = "Gabrielle";
$valorHorasTrabalhadas = 15;
$qtdHorasTrabalhadas = 200;
$salarioBruto = $valorHorasTrabalhadas * $qtdHorasTrabalhadas;
$salarioLiquido = 0;

$desconto = 0;

//Se o salário for maior que R$2500 desconte R$200
if ($salarioBruto > 2500) {
    $salarioLiquido = $salarioBruto - 200;
} else {
    $salarioLiquido = $salarioBruto;
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
<h2>Atividade 2</h2>
    <br>
    <p>Uma empresa deseja calcular o salário de um funcionário. Armazene e calcule
● o nome do funcionário.
● o valor da hora trabalhada.
● a quantidade de horas trabalhadas.
● o salário bruto.
● exiba o nome, o salário bruto, o desconto e o salário final.
● Se o salário bruto for maior que R$ 2.500,00, desconte R$ 200,00.
</p>

    <p><?php echo ("Nome do funcionário: " . $nomeFuncionario); ?></p>
    <p><?php echo ("Valor de horas trabalhadas: " . $valorHorasTrabalhadas); ?> </p>
    <p><?php echo ("Quantidade de horas trabalhadas: " . $qtdHorasTrabalhadas); ?></p>
    <p><?php echo ("Salário bruto: " . $salarioBruto); ?></p>

    <p><?php echo ("Valor do desconto: R$200,00"); ?></p>

    <p><?php echo ("Salário liquído: " . $salarioLiquido); ?></p>
</body>

</html>
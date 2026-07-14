<?php
/*Atividade 3 - Consumo de combustível
Uma pessoa realizou uma viagem de carro. Armazene e calcule
● a distância percorrida.
● a quantidade de combustível consumida.
● Calcule o consumo médio: consumo médio = distância ÷ combustível
● Exiba a distância, o combustível gasto e o consumo médio.
● Se o consumo médio for maior ou igual a 12 km/l, exiba: O veículo teve um bom
consumo.*/

// Entradas - Variáveis
$kilometro = 60;
$combustivel = 5;
$consumo = "";

// Processamento
$consumoMedio = $kilometro / $combustivel;

//Se o consumo médio for maior ou igual a 12 km/l, exiba: O veículo teve um bom consumo
if ($consumoMedio >= 12) {
    $consumo = "Bom consumo";
} else {
    $consumo = "Consumo abaixo do esperado";
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
    <h2>Atividade 3</h2>
    <br>
    <p>Uma pessoa realizou uma viagem de carro. Armazene e calcule
        ● a distância percorrida.
        ● a quantidade de combustível consumida.
        ● Calcule o consumo médio: consumo médio = distância ÷ combustível
        ● Exiba a distância, o combustível gasto e o consumo médio.
        ● Se o consumo médio for maior ou igual a 12 km/l, exiba: O veículo teve um bom
        consumo.
    </p>

    <p><?php echo ("Kilomêtro: " . $kilometro); ?></p>
    <p><?php echo ("Combustível: " . $combustivel); ?> </p>
    <p><?php echo ("Consumo: " . $consumo); ?></p>
    <p><?php echo ("Consumo médio: " . $consumoMedio); ?></p>
</body>

</html>
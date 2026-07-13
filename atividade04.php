<?php
/*Atividade 4 - Média de um aluno 
Um professor precisa calcular a média de um aluno. Armazene e calcule: 
● Armazene o nome do aluno. 
● Armazene três notas. 
● Calcule a soma das notas. 
● Calcule a média. 
● Exiba o nome, as notas e a média. 
● Se a média for maior ou igual a 60, exiba: Aluno aprovado.*/

// Entradas - Variáveis
$nomeAluno = "Gabrielle";
$notaMatematica = 72.5;
$notaPortugues = 95;
$notaHistoria = 85;
$situacao = "";

// Processamento
$somaNotas = $notaMatematica + $notaPortugues + $notaHistoria;
$mediaNotas = $somaNotas / 3;


// Se a média for maior ou igual a 60, exiba: Aluno aprovado.
if ($mediaNotas >= 60) { 
    $situacao = "Aluno Aprovado";
} else {
    $situacao = "Aluno Reprovado";
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
    <h3>Atividade 4</h3>

<p>Um professor precisa calcular a média de um aluno. Armazene e calcule: 
● Armazene o nome do aluno. 
● Armazene três notas. 
● Calcule a soma das notas. 
● Calcule a média. 
● Exiba o nome, as notas e a média. 
● Se a média for maior ou igual a 60, exiba: Aluno aprovado. </p>

<p> <?php echo ("Nome do Aluno: " . $nomeAluno); ?></p>
<p> <?php echo ("Nota Matemática: " . $notaMatematica); ?></p>
<p> <?php echo ("Nota Português: " . $notaPortugues); ?></p>
<p> <?php echo ("Nota História: " . $notaHistoria); ?></p>

<p> <?php echo ("Soma das notas: " . $somaNotas); ?></p>
<p> <?php echo ("Média das notas: " . $mediaNotas); ?></p>

<p> <?php echo ("Situação: " . $situacao); ?></p>

</body>
</html>
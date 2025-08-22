<?php
// Desafio 1 – Alistamento militar
function verificarAceitacao($nome, $sexo, $idade): void {
    if ($sexo == "M" && $idade == 18) {
        echo "$nome: Alistamento obrigatório<br>";
    } else {
        echo "$nome: Alistamento facultativo, dispensado ou já prestado<br>";
    }
}

// Desafio 2 – Ordenar números em ordem crescente
function ordenarNumeros($num1, $num2, $num3): void {
    $numeros = [$num1, $num2, $num3];
    sort($numeros); // ordem crescente
    echo "Números em ordem crescente: " . implode(", ", $numeros) . "<br>";
}

// Desafio 3 – Média do aluno
function calcularMediaAluno($nota1, $nota2, $nota3): void {
    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma / 3;

    if ($media >= 6) {
        echo "Soma das notas = $soma com Média = $media está Aprovado<br>";
    } else {
        echo "Soma das notas = $soma com Média = $media está Reprovado<br>";
    }
}
?>
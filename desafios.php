<?php
// Função para verificar aceitação do desafio 1
function verificarAceitacao($nome, $sexo, $idade): void {
    if ($sexo == "F" && $idade < 25) {
        echo "$nome: ACEITA<br>";
    } else {
        echo "$nome: NÃO ACEITA<br>";
    }
}

// Função para ordenar números do desafio 2 (ordem decrescente)
function ordenarNumeros($num1, $num2, $num3): void {
    $numeros = [$num1, $num2, $num3];
    rsort($numeros); // ordena em ordem decrescente
    echo "Números em ordem decrescente: " . implode(", ", $numeros) . "<br>";
}

// Função para calcular média do desafio 3
function calcularMediaAluno($nota1, $nota2, $nota3): void {
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media >= 7) {
        echo "Média = $media, está Aprovado<br>";
    } else {
        echo "Média = $media, está Reprovado<br>";
    }
}
?>
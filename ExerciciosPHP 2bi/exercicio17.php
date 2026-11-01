<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
 26007590-2 - Ana Carolyne Basiewics Sprada
 26013429-2 - Andre Jose Rosa Neto
 26003158-2 - Pamela Gabriele Pereira
 26005480-2 - Paulo Henrique Sordo Carlim
 26011000-2 - Pedro Henrique Damazio de Arruda
 26013857-2 - Pedro Leonardo de Assis Barbosa
 26007980-2 - Victor Hugo Gonçalves dos Santos
Data: 01 de Novembro de 2026
Descritivo: Crie um array com 10 números inteiros
******************************************************************************/


// Cria um array com 10 números inteiros
$numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
// Inicializa a variável $i com 0 (primeira posição do array)
$i = 0;
// Inicializa a variável $soma com 0 para acumular os valores
$soma = 0;

while ($i < count($numeros)) { // Estrutura de repetição WHILE: repete enquanto $i for menor que a quantidade de números
    echo "Posição $i: " . $numeros[$i] . "\n"; // Exibe a posição atual e o número armazenado nela
    $soma += $numeros[$i]; // Adiciona o número atual à variável $soma
    $i++; // Incrementa $i em 1 para avançar para a próxima posição do array
}

echo "Soma: $soma\n"; // Exibe o resultado final da soma de todos os números
?>
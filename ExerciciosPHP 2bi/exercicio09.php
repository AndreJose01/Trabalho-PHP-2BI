<?php
/*******
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
**********
Turma: ADS2A
Componentes:
    26007590-2 - Ana Carolyne Basiewics Sprada
    26013429-2 - Andre Jose Rosa Neto
    26003158-2 - Pâmela Gabriele Pereira
    26005480-2 - Paulo Henrique Sordo Carlim
    26011000-2 - Pedro Henrique Damazio de Arruda
    26013857-2 - Pedro Leonardo de Assis Barbosa
    26007980-2 - Victor Hugo Gonçalves dos Santos
Data: 01 de Novembro de 2026
Descritivo: Este programa simula a leitura de números através de uma estrutura while que continua somando os valores fornecidos até que o número 0 seja encontrado como condição de parada[cite: 1, 3, 7].
*******************
******
*****
**********************************/

// Array contendo valores digitados pelo usuário (simulação de entrada de dados)
$entradas = [10, 5, 8, 3, 0];
$soma = 0;
$i = 0;

// Enquanto o valor do elemento for diferente de 0, realiza a soma
while ($entradas[$i] != 0) {
    $soma += $entradas[$i];
    $i++;
}

echo "Soma de todos os números digitados: " . $soma;
?>
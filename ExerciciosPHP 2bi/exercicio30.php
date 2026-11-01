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
Descritivo: O código constrói uma matriz multidimensional 3x3 preenchida com números inteiros e acessa diretamente os índices correspondentes à segunda linha (índice 1) e terceira coluna (índice 2)[cite: 1, 4, 7].
*******************
******
*****
**********************************/

// Matriz 3x3 (array de arrays)
$matriz = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

// Acessando a segunda linha (índice 1) e terceira coluna (índice 2)
echo "Elemento da 2ª linha e 3ª coluna: " . $matriz[1][2];
?>
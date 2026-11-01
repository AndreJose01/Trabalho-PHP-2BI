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
Descritivo: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
******************************************************************************/

$numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$soma = 0;

foreach ($numeros as $numero) {
    echo $numero . "\n";
    $soma += $numero;
}

echo "Soma: $soma";

?>
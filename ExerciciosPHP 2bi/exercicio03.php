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
Descritivo: Faça um programa que exiba a tabuada do 5, de 1 a 10.
******************************************************************************/

// Estrutura de repetição FOR que começa em 1 e vai até 10
for ($i = 1; $i <= 10; $i++) {

    // Multiplica o número 5 pelo valor atual de $i
    $resultado = 5 * $i;

    // Exibe a operação e o resultado na tela
    // O <br> pula uma linha no navegador
    echo "5 x $i = $resultado <br>";
}
?>
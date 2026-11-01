<?php
/*******************************
 Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
 Disciplina: Linguagem e Técnicas de Programação
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
    Descritivo: Lê um número e o imprime, repetindo até que o número
            informado seja negativo (estrutura do-while).
****************************************************************/

/*
 * EXPLICAÇÃO DA RESOLUÇÃO:
 * 1) O do-while executa o bloco PELO MENOS UMA VEZ, o que é ideal aqui,
 *    pois precisamos ler um número antes de decidir se continuamos.
 * 2) A cada iteração lemos o número com readline() e o convertemos em int.
 * 3) Usamos um if para imprimir o número somente quando ele for não negativo
 *    (ou seja, o número negativo que encerra o laço não é impresso).
 * 4) A condição while ($numero >= 0) repete o bloco enquanto o número
 *    digitado não for negativo.
 */

do {
    $numero = (int) readline("Digite um número (negativo para encerrar): ");

    if ($numero >= 0) {
        echo "Número lido: {$numero}\n";
    }

} while ($numero >= 0);

echo "Número negativo informado. Programa encerrado.\n";
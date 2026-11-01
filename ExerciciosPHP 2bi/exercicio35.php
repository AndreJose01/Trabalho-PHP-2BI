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
    Descritivo: Procedimento imprimirArray que recebe um array e imprime
            todos os seus elementos.
****************************************************************/

/*
 * EXPLICAÇÃO DA RESOLUÇÃO:
 * 1) Um PROCEDIMENTO é uma função sem retorno (não usa return de valor).
 * 2) imprimirArray() recebe um array como parâmetro e percorre seus
 *    elementos com foreach, exibindo índice e valor de cada um.
 * 3) Se o array estiver vazio, uma verificação com empty() evita que
 *    nada seja impresso (tratamento de caso limite).
 * 4) No final do arquivo, o procedimento é chamado duas vezes, com um
 *    array de números e com um array de nomes, mostrando sua reutilização.
 */

function imprimirArray(array $lista): void
{
    if (empty($lista)) {
        echo "Array vazio.\n";
        return;
    }

    foreach ($lista as $indice => $valor) {
        echo "[{$indice}] => {$valor}\n";
    }
    echo "Total de elementos: " . count($lista) . "\n";
}

echo "--- Array de números ---\n";
imprimirArray([10, 20, 30, 40, 50]);

echo "\n--- Array de nomes ---\n";
imprimirArray(["Ana", "Pedro", "Roberto", "Sergio", "Lauana"]);
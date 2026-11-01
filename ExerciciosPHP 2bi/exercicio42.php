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
    Descritivo: Função maiorNumero que recebe dois números e retorna
            o maior entre eles.
****************************************************************/

/*
 * EXPLICAÇÃO DA RESOLUÇÃO:
 * 1) Diferente do procedimento, a FUNÇÃO usa return para devolver um valor.
 * 2) maiorNumero() recebe dois parâmetros e usa o operador ternário
 *    ($a > $b ? $a : $b) para decidir qual é o maior e devolvê-lo.
 *    Em caso de empate, retorna $b (valor igual, então o resultado é o mesmo).
 * 3) Os tipos float são aceitos, permitindo comparar inteiros e decimais.
 * 4) O resultado retornado é exibido com echo nas chamadas de teste.
 */

function maiorNumero(float $a, float $b): float
{
    return ($a > $b) ? $a : $b;
}

echo "maiorNumero(10, 25)   => " . maiorNumero(10, 25)   . "\n";
echo "maiorNumero(-5, -12)  => " . maiorNumero(-5, -12)  . "\n";
echo "maiorNumero(7.5, 7.4) => " . maiorNumero(7.5, 7.4) . "\n";
echo "maiorNumero(3, 3)     => " . maiorNumero(3, 3)     . "\n";
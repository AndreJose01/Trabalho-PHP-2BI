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
    Descritivo: Função gerarArrayPares que recebe n e retorna um array
            com todos os números pares de 0 até n.
****************************************************************/

/*
 * EXPLICAÇÃO DA RESOLUÇÃO:
 * 1) A função recebe o limite $n e cria um array vazio ($pares = []).
 * 2) Um laço for percorre de 0 até $n (inclusive).
 * 3) A cada iteração, o operador módulo (%) verifica se o número é par
 *    ($i % 2 === 0). Se for, ele é adicionado ao array com $pares[] = $i.
 * 4) Ao final, a função retorna o array preenchido (return).
 * 5) No código principal, o array retornado é impresso com implode()
 *    para facilitar a leitura, e também é mostrada a quantidade de pares.
 * 6) Caso $n seja negativo, o laço não executa e o array volta vazio
 *    (tratamento do caso limite).
 */

function gerarArrayPares(int $n): array
{
    $pares = [];

    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 === 0) {
            $pares[] = $i;
        }
    }

    return $pares;
}

$limite = 20;
$resultado = gerarArrayPares($limite);

echo "Números pares de 0 até {$limite}:\n";
echo implode(", ", $resultado) . "\n";
echo "Quantidade de pares: " . count($resultado) . "\n";
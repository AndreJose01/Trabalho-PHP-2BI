<?php
/*
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
Descritivo: O código cria uma função que recebe um número e calcula seu fatorial, multiplicando os números de 1 até o valor informado.
*/

function fatorial($numero) {
    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

$numero = 5;

$resultado = fatorial($numero);

echo "Número escolhido: " . $numero . "<br>";
echo "Fatorial: " . $resultado;

?>
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
Descritivo: O código cria uma função que recebe dois números, calcula a soma e retorna o resultado.
*/

function somar($numero1, $numero2) {
    return $numero1 + $numero2;
}

$a = 10;
$b = 5;

$resultado = somar($a, $b);

echo "Primeiro número: " . $a . "<br>";
echo "Segundo número: " . $b . "<br>";
echo "Resultado da soma: " . $resultado;

?>
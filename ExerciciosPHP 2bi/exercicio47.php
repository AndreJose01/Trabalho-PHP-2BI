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
Descritivo: Crie uma função contarVogais que receba uma string e retorne o número de vogais.
******************************************************************************/

function contarVogais($texto) {

    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {

        if ($texto[$i] == "a" || $texto[$i] == "e" || $texto[$i] == "i" || $texto[$i] == "o" || $texto[$i] == "u") {
            $contador++;
        }

    }

    return $contador;
}

$palavra = "desenvolvimento";

echo "Quantidade de vogais: " . contarVogais($palavra);

?>
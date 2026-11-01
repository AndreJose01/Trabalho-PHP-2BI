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
Descritivo: O código cria um procedimento que recebe um número e verifica se ele é par ou ímpar, exibindo o resultado na tela.
*/

function verificarParImpar($numero) {
    echo "Número escolhido: " . $numero . "<br>";

    if ($numero % 2 == 0) {
        echo "Resultado: Par";
    } else {
        echo "Resultado: Ímpar";
    }
}

verificarParImpar(8);

?>
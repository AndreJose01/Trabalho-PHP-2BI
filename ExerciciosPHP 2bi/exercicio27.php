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
Descritivo: O código cria um array associativo com as notas de um aluno em 4 disciplinas e calcula a média geral.
*/

$notas = array(
    "Matemática" => 8,
    "Português" => 7,
    "História" => 9,
    "Geografia" => 6
);

    $media = array_sum($notas) / count($notas);

        echo "Média do aluno: " . $media;

?>
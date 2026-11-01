<?php
/*******
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
**********
Turma: ADS2A
Componentes:
    26007590-2 - Ana Carolyne Basiewics Sprada
    26013429-2 - Andre Jose Rosa Neto
    26003158-2 - Pâmela Gabriele Pereira
    26005480-2 - Paulo Henrique Sordo Carlim
    26011000-2 - Pedro Henrique Damazio de Arruda
    26013857-2 - Pedro Leonardo de Assis Barbosa
    26007980-2 - Victor Hugo Gonçalves dos Santos
Data: 01 de Novembro de 2026
Descritivo: Este código define um procedimento que recebe nome, idade e cidade como parâmetros e os exibe no terminal.
*******************
******
*****
**********************************/

// Procedimento (função sem retorno) com múltiplos parâmetros
function mostrarDados($nome, $idade, $cidade) {
    echo "Nome: " . $nome . "\n";
    echo "Idade: " . $idade . " anos\n";
    echo "Cidade: " . $cidade . "\n";
}

// Chamada do procedimento
mostrarDados("Ana Silva", 22, "Curitiba");
?>
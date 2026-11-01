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
Descritivo: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média
>= 7) ou "Reprovado".
******************************************************************************/


// Procedimento que recebe duas notas, calcula a média e imprime a situação do aluno
function calcularMediaAluno($nota1, $nota2) {
    // Calcula a média aritmética das duas notas
    $media = ($nota1 + $nota2) / 2;

    // Imprime a média formatada com 2 casas decimais
    echo "Média: " . number_format($media, 2, ',', '.') . "\n";

    // Verifica a situação do aluno
    if ($media >= 7) {
        echo "Situação: Aprovado\n";
    } else {
        echo "Situação: Reprovado\n";
    }
}

// Função auxiliar para ler uma nota válida (número entre 0 e 10) pelo terminal
function lerNota($mensagem) {
    while (true) {
        echo $mensagem;
        // Lê a entrada e troca vírgula por ponto (aceita "7,5" e "7.5")
        $entrada = str_replace(',', '.', trim(fgets(STDIN)));

        // Valida se é número e se está entre 0 e 10
        if (is_numeric($entrada) && $entrada >= 0 && $entrada <= 10) {
            return (float) $entrada;
        }

        echo "Nota inválida. Digite um valor entre 0 e 10.\n";
    }
}

// Programa principal: lê as duas notas do usuário
$nota1 = lerNota("Digite a primeira nota: ");
$nota2 = lerNota("Digite a segunda nota: ");

// Chama o procedimento
calcularMediaAluno($nota1, $nota2);
?>
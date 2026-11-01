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
Descritivo: Crie um menu de opções usando do-while até o usuário escolher Sair.
******************************************************************************/

do {
    echo "MENU DE OPÇÕES\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    if ($opcao == 1) {
        echo "Iniciando...\n";
    } elseif ($opcao == 2) {
        echo "Parando...\n";
    } elseif ($opcao == 3) {
        echo "Saindo do programa...\n";
    } else {
        echo "Opção inválida!\n";
    }

} while ($opcao != 3);
?>
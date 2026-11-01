
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
Descritivo: Criar um procedimento que imprima uma linha de 20 hifens.

Explicação:
O procedimento desenharLinha utiliza str_repeat para repetir
o caractere hífen 20 vezes. Como não possui retorno, ele apenas
executa a impressão da linha quando é chamado.
*******************************************************************************/

function desenharLinha() {
    echo str_repeat("-", 20);
}

desenharLinha();

echo "Esta é uma linha com 20 hifens.";

desenharLinha();

echo "Programa finalizado!";
?>

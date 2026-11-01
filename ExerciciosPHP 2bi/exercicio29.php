
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
Descritivo: Imprimir apenas os números maiores que 20 de um array.

Explicação:
O array contém os números fornecidos no enunciado.
O foreach percorre todos os elementos e o if verifica quais
são maiores que 20. Somente esses números são exibidos.
*******************************************************************************/

$numeros = [12, 5, 23, 18, 9, 45];
$quantidade = 0;

foreach ($numeros as $numero) {
    if ($numero > 20) {
        echo $numero . "<br>";
        $quantidade++;
    }
}

echo "Total encontrado: " . $quantidade;
?>

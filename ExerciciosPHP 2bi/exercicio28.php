<?php
/*******************************
 Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
 Disciplina: Linguagem e Técnicas de Programação
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
 Descritivo: Verifica se a fruta "Maçã" existe em um array de frutas.
****************************************************************/

/*
 * EXPLICAÇÃO DA RESOLUÇÃO:
 * 1) Criamos um array homogêneo com nomes de frutas.
 * 2) Usamos a função nativa in_array(), que percorre o array e retorna
 *    true se o valor procurado existir e false caso contrário.
 *    O terceiro parâmetro (true) faz a comparação estrita (tipo + valor).
 * 3) Com um if/else exibimos a mensagem correspondente ao resultado.
 */

$frutas = ["Banana", "Maçã", "Laranja", "Uva", "Pera", "Manga"];
$frutaProcurada = "Maçã";

echo "Array de frutas: " . implode(", ", $frutas) . "\n\n";

if (in_array($frutaProcurada, $frutas, true)) {
    $posicao = array_search($frutaProcurada, $frutas, true);
    echo "A fruta \"{$frutaProcurada}\" existe no array (índice {$posicao}).\n";
} else {
    echo "A fruta \"{$frutaProcurada}\" NÃO existe no array.\n";
}
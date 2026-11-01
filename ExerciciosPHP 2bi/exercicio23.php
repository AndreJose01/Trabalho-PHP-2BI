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
Descritivo:  Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
******************************************************************************/


// Array de produtos: cada produto é um array associativo com "nome" e "preço"
$produtos = [
    ["nome" => "Notebook", "preço" => 3500.00],
    ["nome" => "Mouse",    "preço" => 45.90],
    ["nome" => "Teclado",  "preço" => 120.50],
    ["nome" => "Monitor",  "preço" => 899.99],
];

// Exibe o título da listagem
echo "=== Lista de Produtos ===\n\n";

// Percorre o array de produtos com while
$i = 0;
$total = 0;

while ($i < count($produtos)) {
    // Acessa o produto atual (um array associativo)
    $produto = $produtos[$i];

    // Imprime o nome e o preço formatado em reais (2 casas decimais, vírgula decimal)
    echo ($i + 1) . ". " . $produto["nome"]
        . " - R$ " . number_format($produto["preço"], 2, ',', '.') . "\n";

    // Acumula o preço para calcular o total
    $total += $produto["preço"];

    $i++;
}

// Exibe a soma de todos os preços
echo "\nTotal: R$ " . number_format($total, 2, ',', '.') . "\n";
?>
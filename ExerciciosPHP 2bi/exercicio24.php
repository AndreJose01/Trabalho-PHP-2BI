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
Descritivo: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
******************************************************************************/


// Array de produtos do exercício 23: cada produto é um array associativo com "nome" e "preço"
$produtos = [
    ["nome" => "Notebook", "preço" => 3500.00],
    ["nome" => "Mouse",    "preço" => 45.90],
    ["nome" => "Teclado",  "preço" => 120.50],
    ["nome" => "Monitor",  "preço" => 899.99],
];

// Título da listagem
echo "=== Produtos ===\n\n";

// Percorre cada produto do array com foreach
// $produto recebe, a cada repetição, um array associativo (nome e preço)
foreach ($produtos as $produto) {
    // Acessa os dados pelas chaves "nome" e "preço"
    $nome  = $produto["nome"];
    $preco = $produto["preço"];

    // Imprime o nome e o preço formatado em reais (2 casas decimais, vírgula decimal)
    echo "Nome: $nome | Preço: R$ " . number_format($preco, 2, ',', '.') . "\n";
}
?>
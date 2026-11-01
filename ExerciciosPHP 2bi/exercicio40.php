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
Descritivo: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
******************************************************************************/

function mostrarCarro($carro) {
    echo "Marca: " . $carro["marca"] . "\n";
    echo "Modelo: " . $carro["modelo"] . "\n";
    echo "Ano: " . $carro["ano"] . "\n";
}

$carro = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "ano" => 2024
];

mostrarCarro($carro);

?>
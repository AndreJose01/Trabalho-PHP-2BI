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
Descritivo: Crie um programa que conte quantos dígitos tem um número inteiro fornecido pelo usuário.
 ******************************************************************************/


// Lê o número e valida até o usuário digitar um inteiro válido
while (true) {
    echo "Digite um número inteiro: ";
    $entrada = trim(fgets(STDIN));

    if (preg_match('/^-?\d+$/', $entrada)) {
        break;
    }

    echo "Valor inválido. Digite apenas números inteiros.\n";
}

// Remove o sinal de negativo e zeros à esquerda
$n = ltrim($entrada, "-");
$n = ltrim($n, "0");

if ($n === "") {
    $n = "0"; // o número 0 tem 1 dígito
}

// Conta os dígitos com while
$digitos = 0;
while (isset($n[$digitos])) {
    $digitos++;
}

echo "O número $entrada tem $digitos dígito(s).\n";
?>
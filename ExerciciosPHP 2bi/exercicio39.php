<?php
/******************************************************************************
Curso: Tecnologia em Analise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ADS2A
Componentes:
    26007590-2 - Ana Carolyne Basiewics Sprada
    26013429-2 - Andre Jose Rosa Neto
    26003158-2 - Pamela Gabriele Pereira
    26005480-2 - Paulo Henrique Sordo Carlim
    26011000-2 - Pedro Henrique Damazio de Arruda
    26013857-2 - Pedro Leonardo de Assis Barbosa
    26007980-2 - Victor Hugo Goncalves dos Santos
Data: 31 de Outubro de 2026
Descritivo: Calcular o reajuste salarial de acordo com o salário atual.
*******************************************************************************/

//Solicita o nome do funcionario
echo "Digite o nome do funcionário: ";
$nome = readline();

echo "Digite o salário atual: R$ ";
$salario = (float) readline();

// Verifica a faixa salarial e aplica o reajuste
if ($salario >= 0 && $salario <= 1000) {

    $reajuste = 20;

} elseif ($salario > 1000 && $salario <= 5000) {

    $reajuste = 10;

} elseif ($salario > 5000) {

    $reajuste = 0;

} else {

    echo "Salário inválido!";
    exit;
}

// Calcula o novo salário
$novoSalario = $salario + ($salario * $reajuste / 100);

// Exibe os resultados
echo "\nFuncionário: $nome\n";
echo "Salário atual: R$ " . number_format($salario, 2, ",", ".") . "\n";
echo "Reajuste aplicado: $reajuste%\n";
echo "Novo salário: R$ " . number_format($novoSalario, 2, ",", ".") . "\n";

?>
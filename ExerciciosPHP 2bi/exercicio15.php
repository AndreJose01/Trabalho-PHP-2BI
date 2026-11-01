
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
Descritivo: Encontrar e imprimir os números primos entre 1 e 50.

Explicação:
O primeiro for percorre os números de 2 até 50.
O segundo for verifica se cada número possui algum divisor.
Se não possuir divisores além de 1 e dele mesmo, é primo.
O número 1 não é considerado primo.
*******************************************************************************/

$quantidadePrimos = 0;

for ($numero = 2; $numero <= 50; $numero++) {
    $primo = true;

    for ($divisor = 2; $divisor * $divisor <= $numero; $divisor++) {
        if ($numero % $divisor == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo "Número primo: " . $numero . "<br>";
        $quantidadePrimos++;
    }
}

echo "<br>Total de números primos: " . $quantidadePrimos;
?>

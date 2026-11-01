
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
Descritivo: Imprimir os múltiplos de 3, de 3 a 30, usando while.

Explicação:
A variável numero começa em 3. O while verifica se ela é menor
ou igual a 30. A cada repetição, o número é exibido e são
adicionadas três unidades ao contador.
*******************************************************************************/

$numero = 3;
$quantidade = 0;

while ($numero <= 30) {
    echo "Múltiplo: " . $numero . "<br>";

    $quantidade++;
    $numero += 3;
}

echo "<br>Total de múltiplos: " . $quantidade;
?>

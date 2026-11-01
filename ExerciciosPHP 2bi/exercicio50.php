
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
Descritivo: Inverter uma string sem utilizar strrev().

Explicação:
A função inverterString separa o texto em caracteres utilizando
preg_split. Depois, o laço for percorre os caracteres do último
ao primeiro, formando uma nova string invertida. Por fim,
a função retorna o resultado sem utilizar strrev().
*******************************************************************************/

function inverterString($texto) {
    $caracteres = preg_split(
        '//u',
        $texto,
        -1,
        PREG_SPLIT_NO_EMPTY
    );

    if ($caracteres === false) {
        return "";
    }

    $textoInvertido = "";

    for ($i = count($caracteres) - 1; $i >= 0; $i--) {
        $textoInvertido .= $caracteres[$i];
    }

    return $textoInvertido;
}

$textoOriginal = "Programação";

$textoInvertido = inverterString($textoOriginal);

echo "Texto original: " .
    htmlspecialchars($textoOriginal, ENT_QUOTES, "UTF-8");

echo "<br><br>";

echo "Texto invertido: " .
    htmlspecialchars($textoInvertido, ENT_QUOTES, "UTF-8");
?>

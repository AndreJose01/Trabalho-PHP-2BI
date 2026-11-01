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
Descritivo: Crie uma função obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
******************************************************************************/


// Função que recebe um array e retorna o seu primeiro elemento
function obterPrimeiroElemento($array) {
    // Se o array estiver vazio, não há primeiro elemento: retorna null
    if (empty($array)) {
        return null;
    }

    // reset() move o ponteiro interno para o início e retorna o primeiro valor
    // (funciona mesmo que o array não comece no índice 0)
    return reset($array);
}

// Programa principal: o usuário digita os elementos separados por vírgula
echo "Digite os elementos do array separados por vírgula (ex: 10,20,30): ";
$entrada = trim(fgets(STDIN));

// Se o usuário não digitou nada, cria um array vazio
if ($entrada === "") {
    $elementos = [];
} else {
    // explode() separa a string em um array e array_map('trim') remove espaços extras
    $elementos = array_map('trim', explode(',', $entrada));
}

// Chama a função e guarda o valor retornado
$primeiro = obterPrimeiroElemento($elementos);

// Exibe o resultado
if ($primeiro === null) {
    echo "O array está vazio, não há primeiro elemento.\n";
} else {
    echo "O primeiro elemento do array é: $primeiro\n";
}
?>
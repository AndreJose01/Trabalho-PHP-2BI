
<?php
/******************************************************************************
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

Descritivo: Usando um array associativo com os dados de um aluno,
imprimir cada dado no formato "chave: valor".

Explicação:
O array associativo armazena o nome, a idade e o curso do aluno.
O foreach percorre o array, acessando cada chave e seu respectivo
valor, que são impressos no formato solicitado.
******************************************************************************/

$aluno = [
    "nome" => "André",
    "idade" => 23,
    "curso" => "Análise e Desenvolvimento de Sistemas"
];

foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

echo "<br>Dados apresentados com sucesso!";

?>

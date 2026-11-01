
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

Descritivo: Criar uma função converter Para Maiusculas que receba
uma string e a retorne em letras maiúsculas.

Explicação:
A função recebe um texto como parâmetro e utiliza mb_strtoupper()
para convertê-lo em letras maiúsculas, preservando corretamente
os caracteres acentuados. O resultado é retornado e exibido na tela.
******************************************************************************/

function converterParaMaiusculas($texto) {
    return mb_strtoupper($texto, "UTF-8");
}

$textoOriginal = "Olá, estou aprendendo PHP.";
$textoConvertido = converterParaMaiusculas($textoOriginal);

echo "Texto original: " . htmlspecialchars($textoOriginal, ENT_QUOTES, "UTF-8") . "<br>";
echo "Texto em maiúsculas: " . htmlspecialchars($textoConvertido, ENT_QUOTES, "UTF-8");

?>

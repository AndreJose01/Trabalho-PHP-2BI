<?php
/*******
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
**********
Turma: ADS2A
Componentes:
    26007590-2 - Ana Carolyne Basiewics Sprada
    26013429-2 - Andre Jose Rosa Neto
    26003158-2 - Pâmela Gabriele Pereira
    26005480-2 - Paulo Henrique Sordo Carlim
    26011000-2 - Pedro Henrique Damazio de Arruda
    26013857-2 - Pedro Leonardo de Assis Barbosa
    26007980-2 - Victor Hugo Gonçalves dos Santos
Data: 01 de Novembro de 2026
Descritivo: O código define uma função com retorno chamada calcularAreaRetangulo que recebe largura e altura como argumentos, calcula o produto dessas dimensões e retorna o valor final[cite: 1, 5, 24].
*******************
******
*****
**********************************/

// Função com retorno que calcula a área de um retângulo
function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

// Chamando a função e exibindo o valor retornado
$area = calcularAreaRetangulo(5.0, 10.0);
echo "Área do retângulo: " . $area;
?>
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
Descritivo: Ler dois numeros inteiros e calcular a multiplicacao entre eles
*******************************************************************************/

//Solicita os dois numeros
echo "Digite o primeiro numero: ";
$numero = (int) readline();

echo "Digite o segundo numero: ";
$numero2 = (int) readline();

//Calcula o produto
$produto = $numero * $numero2;

//Exibe o resultado
echo "O produto e igual a: $produto";

?>
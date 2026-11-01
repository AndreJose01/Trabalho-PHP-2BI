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
Descritivo: Identificar se um número é positivo, negativo ou nulo
*******************************************************************************/

//Solicita um numero
echo "Digite um numero: ";
$numero = (float) readline();

//Verifica a situacao do numero
if ($numero > 0) {
    echo "O numero digitado e positivo";
} elseif ($numero < 0) {
    echo "O numero digitado e negativo";
} else {
    echo "O numero digitado e nulo";
}

?>
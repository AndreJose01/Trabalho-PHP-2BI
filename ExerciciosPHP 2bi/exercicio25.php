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
Descritivo: Converter uma temperatura de Fahrenheit para Celsius.
*******************************************************************************/

//Solicita a temperatura em Fahrenheit
echo "Digite a temperatura em Fahrenheit: ";
$Fahrenheit = (int) readline();

//Realiza a conversao
$celsius = (5 / 9) * ($Fahrenheit - 32);

//Exibe o resultado
echo "Temperatura em Celsius: " . number_format($celsius, 2, ",", ".") . " graus";

?>
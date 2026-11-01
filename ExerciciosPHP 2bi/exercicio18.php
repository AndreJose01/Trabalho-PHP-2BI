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
Descritivo: Ler um numero de tres algarismos e identificar a dezena
*******************************************************************************/

//Solicita um numero
echo "Digite um numero de 100 a 999: ";
$numero = (int) readline();

//Verifica se o numero e valido
if ($numero >= 100 && $numero <= 999) {

    //Obtem o numero da dezena
    $dezena = (int) (($numero / 10) % 10);

    echo "Algarismo da dezena = $dezena";

} else {
    echo "Numero invalido! Digite um numero entre 100 e 999";
}

?>
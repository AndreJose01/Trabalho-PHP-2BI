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
Descritivo: Identificar a origem da pessoa através da sigla do estado.
*******************************************************************************/

// Solicita a sigla do estado
echo "Digite a sigla do estado onde nasceu: ";
$estado = strtoupper(trim(readline()));

// Verifica o estado informado
if ($estado == "RJ") {

    echo "Você é carioca.";

} elseif ($estado == "SP") {

    echo "Você é paulista.";

} elseif ($estado == "MG") {

    echo "Você é mineiro(a).";

} else {

    echo "Você é de outro estado.";
}

?>
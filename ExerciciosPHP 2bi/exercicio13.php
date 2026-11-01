<?php
/*
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
Descritivo: O código solicita uma senha ao usuário e utiliza o do-while para repetir a solicitação até que a senha correta (1234) seja digitada.
*/

$senha = "1234";

do {
    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];

        if ($senha != "1234") {
            echo "Senha incorreta! Tente novamente.<br>";
        }
    }

} while ($senha != "1234");

echo "Senha correta! Acesso permitido.";

?>
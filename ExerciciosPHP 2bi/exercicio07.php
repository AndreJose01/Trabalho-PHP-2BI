<?php
/*******************************
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
    Descritivo: Programa que pede ao usuário para adivinhar um número (7)
            e continua pedindo até que ele acerte (estrutura while).
****************************************************************/

/*
 * EXPLICAÇÃO DA RESOLUÇÃO:
 * 1) O número secreto (7) é armazenado em uma variável.
 * 2) A variável $tentativa começa com null, garantindo que a condição
 *    do while ($tentativa != $numeroSecreto) seja verdadeira na 1ª vez.
 * 3) Dentro do laço, lemos a entrada do usuário com readline(), convertemos
 *    para inteiro com (int) e incrementamos o contador de tentativas.
 * 4) Com if/elseif damos a dica ("Muito baixo" / "Muito alto").
 * 5) O laço só termina quando o usuário digita exatamente o número secreto.
 */

$numeroSecreto = 7;
$tentativa     = null;
$tentativas    = 0;

while ($tentativa != $numeroSecreto) {

    $tentativa = (int) readline("Adivinhe o número (entre 1 e 10): ");
    $tentativas++;

    if ($tentativa < $numeroSecreto) {
        echo "Muito baixo! Tente novamente.\n";
    } elseif ($tentativa > $numeroSecreto) {
        echo "Muito alto! Tente novamente.\n";
    }
}

echo "\nParabéns! Você acertou o número {$numeroSecreto} ";
echo "em {$tentativas} tentativa(s).\n";
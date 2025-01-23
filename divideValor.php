<?php
/**
 * Method in order to divide value.
 *
 * @author Luciano Palhares <lucianopalharesrosa@hotmail.com>
 * @example $valor = '10,250.25'
 * @example $quantidade = '40'
 */
function divideValor($valor, $quantidade) {
    // Remove separador de milhar e converte para ponto decimal
    $valor = str_replace(',', '', $valor);

    // Realiza a divisão
    $divisao = $valor / $quantidade;

    // Formata o número para o padrão 0,000,000,000.00
    $resultado = number_format($divisao, 2, '.', ',');

    return $resultado;
}

// Exemplo de uso
echo divideValor('10,250.25', '40'); // Retorna: 256.26
?>

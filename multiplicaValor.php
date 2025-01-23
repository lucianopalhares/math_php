<?php
/**
 * Method in order to multiply the value in money * amount.
 *
 * @author Luciano Palhares <lucianopalharesrosa@hotmail.com>
 * @example $valor = '10,250.25'
 * @example $quantidade = '10'
 */
function multiplicaValor($valor, $quantidade) {
    // Remove separador de milhar e converte para ponto decimal
    $valor = str_replace(',', '', $valor);

    // Realiza a multiplicação
    $multiplicacao = $valor * $quantidade;

    // Formata o resultado para o padrão 0,000,000,000.00
    $resultado = number_format($multiplicacao, 2, '.', ',');

    return $resultado;
}

// Exemplo de uso
echo multiplicaValor('10,250.25', '10'); // Retorna: 102,502.50
?>

<?php
/**
 * Method in order to sum the two values
 *
 * @author Luciano Palhares <lucianopalharesrosa@hotmail.com>
 * @example $valor1 = '10,250.25'
 * @example $valor2 = '10,250.25'
 */
function somaValor($valor1, $valor2) {
    // Remove separadores de milhar para converter para valores numéricos
    $valor1 = str_replace(',', '', $valor1);
    $valor2 = str_replace(',', '', $valor2);

    // Realiza a soma
    $soma = $valor1 + $valor2;

    // Formata o resultado para o padrão 0,000,000,000.00
    $resultado = number_format($soma, 2, '.', ',');

    return $resultado;
}

// Exemplo de uso
echo somaValor('10,250.25', '10,250.25'); // Retorna: 20,500.50
?>

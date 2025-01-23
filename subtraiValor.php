<?php
/**
 * Method in order to subtract values
 *
 * @author Luciano Palhares <lucianopalharesrosa@hotmail.com>
 * @example $valor1 = '10,500.25'
 * @example $valor2 = '10,250.25'
 */
function subtraiValor($valor1, $valor2) {
    // Remove separadores de milhar para converter para valores numéricos
    $valor1 = str_replace(',', '', $valor1);
    $valor2 = str_replace(',', '', $valor2);

    // Realiza a subtração
    $resultado = $valor1 - $valor2;

    // Formata o resultado para o padrão 0,000,000,000.00, incluindo o sinal negativo, se necessário
    return number_format($resultado, 2, '.', ',');
}

// Exemplo de uso
echo subtraiValor('10,500.25', '10,250.25'); // Retorna: 250.00
echo "\n";
echo subtraiValor('10,250.25', '10,500.25'); // Retorna: -250.00
?>

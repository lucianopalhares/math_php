<?php 
/**
 * method in order to subtract values
 *
 * @author   Luciano Palhares <lucianopalharesrosa@hotmail.com>
 * @example $valor1 = '10,500.25'
 * @example $valor2 = '10,250.25'
 */
	function subtraiValor($valor1,$valor2){
		
		$pega = explode(',',$valor1);
		$multi = null;
		foreach ($pega as $value) {
			$multi .= $value;
		}
		$valor1 = $multi;
		$pega2 = explode(',',$valor2);
		$multi = null;
		foreach ($pega2 as $value) {
			$multi .= $value;
		}
		$valor2 = $multi;
		$soma = $valor1 - $valor2;

		$soma1 = null;
		$soma2 = null;

		$menos = null;
	
		if($explode22 = explode("-",$soma)){
			if(isset($explode22[1])){
				$soma = $explode22[1];
				$menos = '-';
			}else{
				$soma = $soma;
			}
			
		}

		$separa = explode('.',$soma);

		$tamanho = strlen($separa[0]);

		$separa2 = $separa[0];

		$string2 = null;

		$conta = 0;
		for($i = $tamanho - 1; $i >= 0; $i--){
			$string2 .= $separa2[$i];
		
			$conta++;
			if($i > 0)
			{
				if($conta == 3){
				
					$string2 .= ',';
					$conta = 0;
				}
			}
		}

		$print = null;

		$i = null;

		for($i = strlen($string2) - 1; $i >= 0; $i--){
			$print .= $string2[$i];	
		}		

		$print .= ".";

		if(isset($separa[1])){
			$print .= $separa[1];
			if(strlen($separa[1]) == 1){
				$print .= '0';
			}
		}else{
			$print .= '00';
		}

		$mult_explode = explode(".",$print);
        $resumo = null;
        $resumo .= $mult_explode[0];
        $resumo .= ".";
        $resumo .= $mult_explode[1][0];
        $resumo .= $mult_explode[1][1];

        return $menos.$resumo;

	}
//example of return 0,000,000,000.00
	 ?>
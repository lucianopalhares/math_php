<?php 
/**
 * Class in order to divide values 
 *
 * @author   Luciano Palhares <lucianopalharesrosa@hotmail.com>
 * @example $valor = '10.250,25'
 * @example $quantidade = '40'
 */
	function divideValor($valor,$quantidade){

		$pega = explode(',',$valor);

		$multi = null;

		foreach ($pega as $value) {
			$multi .= $value;
		}

		$valor = $multi;

		$divisao = $valor / $quantidade;

		$separa = explode('.',$divisao);

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

		$i = null;

		$print = null;

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

        return $resumo;

	}
	//example of return 0,000,000,000.00

?>
<?php 

$operador = 6;
$num1 = 10;
$num2 = 20;
$result = 0;
$operacao = "";

switch ($operador) {
	case '1':
		$result = somavalor ($num1 , $num2);
		$operacao = "Soma";
		break;
	case '2':
		$result = subvalor ($num1 , $num2);
		$operacao = "Subtração";
		break;
	case '3':
		$result = multvalor ($num1 , $num2);
		$operacao = "Multiplicação";
		break;
	case '4':
		$result = divvalor ($num1 , $num2);
		$operacao = "Divisão";
		break;

	default:
		echo "saindo...";
		break;
}
echo "Resultado da ".$operacao." é ".$result;

function somavalor($num1, $num2){
	return ($num1 + $num2);
}
function subvalor($num1, $num2){
	return ($num1 - $num2);
}
function multvalor($num1, $num2){
	return ($num1 * $num2);
}
function divvalor($num1, $num2){
	return ($num1 / $num2);
}

 ?>


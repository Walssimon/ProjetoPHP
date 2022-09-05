<?php 
$desc = 0;
$cooperativa = "";
$salario = 1200;
$salario1 = 0;
$desconto = "";
$inss = 0;90
$ir = 0;
$result = 0; 
$a = 0.15;
$b = 0.10;
$c = 0.05;

if ($salario1 >= 1903.98 && $salario1 <=2826.65){
    $ir = $salario1 * 0.075
}else if ($salario1>= 2826.66 && $salario1 <= 3751.05){
    $ir = $salario1 * 0.15
}else if ($salario1 >= 3751.06 && $salario1 <= 4664.68){
    $ir = $salario1 * 0.225
}else if ($salario1 >= 4664.69){
    $ir = $salario1 * 0.275
}else ($salario1 <= 1903.98){
    $ir = 0
}

if ($salario1 <= 1212.00){
    $inss = $salario1 * 0.075
}else if ($salario1 >= 1212.01 && $salario1 <=  2427.35){
    $inss = $salario1 * 0.09
}else if ($salario1 >= 2427.36 && $salario1 <= 3641.03){
    $inss = $salario1 * 0.12
}else if ($salario1 >= 3641.04 && $salario1 <= 7087.22){
    $inss = $salario1 * 0.14
}else ($salario1 >= 7087.23){
    $inss = 0
}

$salario1 = $salario1 - ($inss + $ir);

switch ($cooperativa) {
	case '1':
		$result = grupoa ($salario1, $a);
		$desc = $a;
		break;
	case '2':
		$result = grupob ($salario1, $b);
		$desc = $b;
		break;
	case '3':
		$result = grupoc ($salario1, $c);
		$desc = $c;
		break;

	default:
		echo "saindo...";
		break;
}
echo "Seu salario bruto é ".$salario."\n Descontando o inss: ".$inss."\n Descontando o Imposto de Renda: ".$ir."\n Você escolheu o grupo".$cooperativa." que desconta: ".$result;

function grupoa($salario1, $a){
	return ($salario1 + $a);
}
function grupob($salario1, $b){
	return ($salario1 - $b);
}
function grupoc($salario1, $c){
	return ($salario1 * $c);
}

 ?>


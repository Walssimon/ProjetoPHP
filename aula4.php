<?php 

$ano = 2020; //variavel local no script
//implementação de uma função
function exibir($parametro){//variavel como parametro
	$parametro = $parametro + 4;
	return $parametro;

}

echo "estamos em ".$ano." e daqui a 4 anos estaremos em ".exibir($ano);

 ?>


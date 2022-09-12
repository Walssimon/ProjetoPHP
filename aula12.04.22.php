<?php 
$val1=20.0;
$val2=20.0;


function validarNome(){
	echo"Executando!!!";
}

function somavalor ($val1,$val2){
	return ($val1 + $val2);
}

validarNome();
echo "<br> A soma é ". somavalor($val1,$val2);
	
?>
 <?php 

 $ano = 2020;

 function exibir(){
	GLOBAL $ano; //definição de variável
	$ano++;
	return $ano;
}

	echo "<br/> Ano: ". $ano;
	echo "<br/> Ano: ". exibir();
	echo "<br/> Ano: ". exibir();
	echo "<br/> Ano: ". $ano;
  ?>
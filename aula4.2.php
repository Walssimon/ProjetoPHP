<?php 
	function exibir(){
		STATIC $ano; // definição de variavel estatica
		$ano++;
		echo "<br/>". $ano;


	}

		echo exibir();
		echo exibir();
		echo exibir();
 ?>
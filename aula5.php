<?php 
	
	$nome = array('João', 'marcos', 'José', 'Adriano', 'Astrogildo');
	foreach ($nome as $item) {
		echo '<br/>'.$item;
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
		echo '<br/>';
	}
?>

<?php  

	for ($x=1; $x < 100 ; $x++){
			if($x == 10)

				goto desvio;

			echo "<br/>".$x;


	}

		desvio:
		echo "<br/> Pronto, aqui esta o desvio. ";
?>




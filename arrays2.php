<?php
$salarios = array ("João"  => 2000, "Pedro" => 500, "Maria" => 1000);

echo "Salário do João é ".$salarios['João']."<br />";
echo "Salário do Maria é ".$salarios['Maria']."<br />";
echo "Salário do Pedro é ".$salarios['Pedro']."<br />";

$salarios['João'] = "Alto";
$salarios['Maria'] = "Médio";
$salarios['Pedro'] = "Baixo";
$salarios[] = "Mais Baixo Ainda";

echo "<br />";

echo "Salário do João é ".$salarios['João']."<br />";
echo "Salário do Maria é ".$salarios['Maria']."<br />";
echo "Salário do Pedro é ".$salarios['Pedro']."<br />";
echo "Salário do Pedro é ".$salarios[]."<br />";

?>


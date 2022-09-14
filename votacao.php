<?php 
    include("cabecalho.php");

    $idade = 10;

    if ($idade < 16){
        include("votacao_menor.php");
    }
    else if ($idade < 18){
        include("votacao_16.php");
    }
    else {
        include ("votacao_maior");
    }

    include ("rodape.php");

 ?>

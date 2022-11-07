<?php  

    echo "<h3>Recebendo dados - POST</h3>";
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    echo "<h3>Recuperando os dados - POST </h3>";
    echo "Nome:".$_POST['nome'];
    echo "<br/>";
    echo "Senha: ".$_POST['senha'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo de Formulário</title>
</head>
<body>
<h2>Exemplo de Formulário</h2>
<form name="cadastro" method="get" action="pagina_form.php">
	Nome: <input type="text" name="nome" size="40" maxlength="20"><br/><br/>
	Senha: <input type="password" name="senha" size="40" maxlength="20"><br/><br/>
	<input type="checkbox" name="termuso" value="termo"/>
	Aceito o termo de uso <br/><br/>
	<input type="radio" name="sexo" value="fem"/>Feminino
	<input type="radio" name="sexo" value="mas"/>Masculino 
<br/>
<input type="hidden" name="sexo" value="admin">
<br/>
&nbsp;&nbsp;&nbsp;
<input type="button" name="VOLTAR">
&nbsp;&nbsp;&nbsp;
<input type="reset" name="LIMPAR">
&nbsp;&nbsp;&nbsp;
<input type="submit" name="ENVIAR">
<a href="#" onclick="document.cadastro.reset()"> LIMPAR</a>
&nbsp;&nbsp;&nbsp;
<button onclick="window.location.href'http://www.google.com.br'">Google</button>
&nbsp;&nbsp;&nbsp;
<button onclick="window.location.reload()">Atualizar Ppagina</button>
&nbsp;&nbsp;&nbsp;
<button onclick="window.print()"> Imprimir </button>
&nbsp;&nbsp;&nbsp;
<button onclick="window.history.back()"Voltar> </button>
&nbsp;&nbsp;&nbsp; <br/> <br/>
Animais:
<select name="animais">
	<option value="elef"> Elefante </option>
	<option value="hipo"> Hipopótamo </option>
	<option value="rino" selected="true"> Rinoceronte </option>
	<option value="dino"> Dinossauro </option>
</select>
<br/>
<br/>
Mensagem:
<textarea name="msg" cols="50" rows="8">
	
</textarea>
<br/>
<br/>

<input type="submit" name="ENVIAR">

</form>


</body>
</html>
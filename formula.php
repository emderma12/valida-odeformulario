<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<meta charset="utf-8">
	<title> formulario </title>
</head>
<body>
	<form action="validacomida.php" method="POST">
	<fieldset>
<legend>
	tipo 'radio' escolha uma opção entre várias - campo "name" é igual em todas as opções
</legend>
	</fieldset>
	<p>
		<input type="radio" name="comidaPref" value="Arroz com feijão e Carne">
		<label for="comidaPref">Arroz com Feijão e Carne</label>
	</p>
	<p>
		<input type="radio" name="comidaPref" value="Arroz com Macarrão e carne">
		<label for="comidaPref">Arroz com Macarrão e Carne</label>
	</p>
	<P>
	<input type="radio" name="comidaPref" value="Baião e carne">
	<label for="comidaPref">Baião e Carne</label>
	</P>
	<p>
	<input type="radio" name="comidaPref" value="Baião, Salada e Ovo">
	<label for="comidaPref">Baião, Salada e Ovo</label>
	</p>
	<button type="submit">validar</button>
	</fieldset>
</form>
</body>
</html>
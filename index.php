<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Instruções</h2>
			<div class="conteudo-painel">
				<p>Esta aplicação tem como finalidade demonstrar os valores que
					serão gastos com combustível durante uma viagem, com base no
				consumo do seu veículo, e com a distância determinada por você!</p>
				<p>Os combustíveis disponíveis para este cálculo são:</p>
				<ul>
					<li><b>Álcool</b></li>
					<li><b>Díesel</b></li>
					<li><b>Gasolina</b></li>
				</ul>
			</div>
		</div>

		<div class="painel">
			<h2>Cálculo do valor (R$) do consumo</h2>
			<div class="conteudo-painel">
				<form action="calculo.php" method="POST">

					<label for="Preco Gasolina">Preço da Gasolina</label>
					<input type="float" class="campoTexto"  name="precoGasolina" required />
				
					<label for="Preco Alcool">Preço da Álcool</label>
					<input type="float" class="campoTexto"  name="precoAlcool" required />

					<label for="Preco Diesel">Preço da Diesel</label>
					<input type="float" class="campoTexto"  name="precoDiesel" required />

					<label for="distancia">Distância em Quilômetros a ser percorrida</label>
					<input type="number" class="campoTexto"  name="distancia" required />

					<label for="gasolina">Consumo de Gasolina do veículo (Km/l)</label>
					<input type="number" class="campoTexto" name="gasolina" required />

					<label for="alcool">Consumo de Álcool do veículo (Km/l)</label>
					<input type="number" class="campoTexto" name="alcool" required />	

					<label for="diesel">Consumo de Diesel do veículo (Km/l)</label>
					<input type="number" class="campoTexto" name="diesel" required />

					<button class="botao" type="submit">Calcular</button>
				</form>
			</div>
		</div>

	</main>
</body>
</html>
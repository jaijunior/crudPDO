<!DOCTYPE html>
<html lang ="pt-br">

	<head>
		<meta charset="utf-8">
		<title>Cadastro Pessoa</title>
		<link rel="stylesheet" href="estilo.css">
	</head>
	
	<body>

		<main>
			<section id="esquerda">
				<form>
					<h2>
						Cadastrar Pessoa				
					</h2>
					<label>Nome:</label>
					<input type="text" name="nome" id="nome">
					<label>Telefone:</label>
					<input type="text" name="telefone" id="telefone">
					<label>Email</label>
					<input type="text" name="nome" id="nome">
					<input type="submit" valur="Cadastrar">
				</form>
			</section>
				
			<section id="direita">
				<table>
					<thead>
						<tr>
							<td>
								NOME
							</td>

							<td>
								TELEFONE
							</td>

							<td colspan="2">
								EMAIL
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>MARIA DA SILVA</td>
							<td>000000000</td>
							<td>MARIA@GMAIL.COM</td>
							<td> <a href="">Editar</a> <a href="">Excluir</a> </td>
						</tr>
					</tbody>
				</table>
			</section>
			
		</main>

	</body>

</html>

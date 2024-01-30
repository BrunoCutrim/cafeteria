<!DOCTYPE html>
<html lang="pr-br">

<head>
	<?php
	include 'header.php';
	?>

<body>
	<div class="wrapper">
		<?php include 'menu.php'; ?>

		<div class="main">
			<?php include 'topo.php'; ?>

			<main class="content">
				<form action="" method="post">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro de Fornecedores</h1>

						<div class="row">
							<div class="col-md-4">
								<label for="nomefornecedor" class="form-label">Nome do Fornecedor</label>
								<input type="text" class="form-control" id="nomefornecedor" placeholder="Digite o nome do fornecedor">
							</div>
							<div class="col-md-4">
								<label for="telefonefornecedor" class="form-label">Telefone</label>
								<input type="tel" class="form-control" id="telefonefornecedor" placeholder="Digite o telefone do fornecedor">
							</div>
							<div class="col-md-4">
								<label for="emailfornecedor" class="form-label">E-mail</label>
								<input type="email" class="form-control" id="emailfornecedor" placeholder="Digite o e-mail do fornecedor">
							</div>
							<div class="col-4">
								<label for="enderecofornecedor" class="form-label">Endereço</label>
								<input type="text" class="form-control" id="enderecofornecedor" placeholder="Digite o nome da rua, número e complemento">
							</div>
							<div class="col-2">
								<label for="cidadefornecedor" class="form-label">Cidade</label>
								<input type="text" class="form-control" id="cidadefornecedor" placeholder="Digite a cidade">
							</div>
							<div class="col-md-2">
								<label for="estadofornecedor" class="form-label">Estado</label>
								<input type="text" class="form-control" id="estadofornecedor" placeholder="Digite o estado">
							</div>
							<div class="col-md-2">
								<label for="cepfornecedor" class="form-label">Cep</label>
								<input type="text" class="form-control" id="cepfornecedor" placeholder="Digite o cep">
							</div>
							<div class="col-md-2 mb-3">
								<label for="produtofornecedor" class="form-label">Produto Fornecido</label>
								<input type="text" class="form-control" id="produtofornecedor" placeholder="Digite o produto">
							</div>
						</div>
						    <div class="mb-3">
				            <input type="submit" class="btn btn-outline-primary" value="Salvar">
				            </div>
						
				</form>
			</main>

			<footer class="footer">
				<?php include 'footer.php'; ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
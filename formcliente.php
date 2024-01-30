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
				<form action="cadastrocliente.php" method="post" enctype="multipart/form-data">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro do Cliente</h1>

						<div class="row">
							<div class="mb-3 col-6">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do cliente" />
							</div>
							<div class="mb-3 col-6">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Coloque o e-mail do cliente no formato: abc@mail.com" />
							</div>
						</div>
						<div class="row">
							<div class="mb-3 col-4">
								<label for="telefone" class="form-label">Telefone</label>
								<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone do cliente no formato: (99) 99999-9999" />
							</div>
							<div class="mb-3 col-4">
								<label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
								<input type="text" class="form-control" name="cpfcnpj" id="cpfcnpj" placeholder="Insira o CPF ou CNPJ do cliente, digitando apenas os números" />
							</div>
							<div class="mb-3 col-4">
								<label for="cep" class="form-label">CEP</label>
								<input type="text" class="form-control" name="cep" id="cep" maxlength="8" onkeyup="viaCEP()" placeholder="Insira o CEP do cliente, digitando apenas os números" />
							</div>
						</div>
						<div class="row">
							<div class="mb-3 col-4">
								<label for="logradouro" class="form-label">Logadouro</label>
								<input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Insira o logradouro do cliente (rua, avenida, etc)" />
							</div>
							<div class="mb-3 col-2">
								<label for="numero" class="form-label">Nº</label>
								<input type="text" class="form-control" name="numero" id="numero" placeholder="Insira o número da residência" />
							</div>
							<div class="mb-3 col-3">
								<label for="complemento" class="form-label">Complemento</label>
								<input type="text" class="form-control" name="complemento" id="complemento" placeholder="Insira o complemento da residência" />
							</div>
							<div class="mb-3 col-3">
								<label for="bairro" class="form-label">Bairro</label>
								<input type="text" class="form-control" name="bairro" id="bairro" placeholder="Insira o bairro" />
							</div>
						</div>
						<div class="row">
							<div class="mb-3 col-2">
								<label for="cidade" class="form-label">Cidade</label>
								<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Insira a cidade" />
							</div>
							<div class="mb-3 col-2">
								<label for="uf" class="form-label">Estado</label>
								<input type="text" class="form-control" name="uf" id="uf" placeholder="Insira o estado" />
							</div>
							<div class="mb-3 col-4">
								<label for="imagem" class="form-label">Logo/Imagem Pessoal</label>
								<input type="file" class="form-control" name="imagem" id="imagem" placeholder="Insira a Logo/Imagem Pessoal" />
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-outline-primary" value="Salvar">
				</form>
			</main>
			<div class="main">
				<div class='container'>
					<div class="table responsive">
						<div class="table-responsive">
							<table class="table table-primary">
								<thead>
									<tr>
										<th scope="col">Foto</th>
										<th scope="col">Nome</th>
										<th scope="col">E-mail</th>
										<th scope="col">Telefone</th>
										<th scope="col">Estado</th>
										<th scope="col">Ações</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include 'conexao.php';
									$sql = "SELECT * FROM clientes";
									$busca = mysqli_query($conexao, $sql);

									while ($dados = mysqli_fetch_array($busca)) {
										$arquivo = $dados['imagem'];
										$nome = $dados['nome'];
										$email = $dados['email'];
										$telefone = $dados['telefone'];
										$uf = $dados['uf'];
									?>
										<tr>
											<td><img src="imagens/<?php echo $arquivo ?>" width="50px" height="100%" class="rounded-circle"></td>
											<td><?php echo $nome ?></td>
											<td><?php echo $email ?></td>
											<td><?php echo $telefone ?></td>
											<td><?php echo $uf ?></td>
											<td>
                                            
											<!-- Modal Editar -->
											<button
												type="button"
												class="btn btn-warning btn-lg"
												data-bs-toggle="modal"
												data-bs-target="#modaleditar"
											>
											<i class="bi bi-pencil-square"></i>
												Editar
											</button>
											
											<!-- Modal Body -->
											<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
											<div
												class="modal fade"
												id="modaleditar"
												tabindex="-1"
												data-bs-backdrop="static"
												data-bs-keyboard="false"
												
												role="dialog"
												aria-labelledby="modalTitleId"
												aria-hidden="true"
											>
												<div
													class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
													role="document"
												>
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalTitleId">
																Modal title
															</h5>
															<button
																type="button"
																class="btn-close"
																data-bs-dismiss="modal"
																aria-label="Close"
															></button>
														</div>
														<div class="modal-body">Body</div>
														<div class="modal-footer">
															<button
																type="button"
																class="btn btn-secondary"
																data-bs-dismiss="modal"
															>
																Fechar
															</button>
															<button type="button" class="btn btn-primary">Salvar</button>
														</div>
													</div>
												</div>
											</div>
											
                                            <!-- Modal Excluir -->
											<button
												type="button"
												class="btn btn-danger btn-lg"
												data-bs-toggle="modal"
												data-bs-target="#modalexcluir"
											>
											<i class="bi bi-trash"></i>
												Excluir
											</button>
											
											<!-- Modal Body -->
											<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
											<div
												class="modal fade"
												id="modalexcluir"
												tabindex="-1"
												data-bs-backdrop="static"
												data-bs-keyboard="false"
												
												role="dialog"
												aria-labelledby="modalTitleId"
												aria-hidden="true"
											>
												<div
													class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
													role="document"
												>
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalTitleId">
																Modal title
															</h5>
															<button
																type="button"
																class="btn-close"
																data-bs-dismiss="modal"
																aria-label="Close"
															></button>
														</div>
														<div class="modal-body">Deseja realmente excluir?</div>
														<div class="modal-footer">
															<button
																type="button"
																class="btn btn-secondary"
																data-bs-dismiss="modal"
															>
																Voltar
															</button>
															<button type="button" class="btn btn-danger">Excluir</button>
														</div>
													</div>
												</div>
											</div>
											
											<!-- Optional: Place to the bottom of scripts -->
											<script>
												const myModal = new bootstrap.Modal(
													document.getElementById("modalId"),
													options,
												);
											</script>
											
											
											
											</script>
											
											</td>

										</tr>

									<?php } ?>

								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
			<footer class="footer">
				<?php include 'footer.php'; ?>
			</footer>
		</div>


	</div>


	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<script>
	function viaCEP() {

		var numCep = $("#cep").val();

		var url = "https://viacep.com.br/ws/" + numCep + "/json";

		$.ajax({
			url: url,
			type: "get",
			dataType: "json",

			success: function(dados) {
				console.log(dados);
				$("#uf").val(dados.uf);
				$("#cidade").val(dados.localidade);
				$("#logradouro").val(dados.logradouro);
				$("#bairro").val(dados.bairro);
			}
		})


	}
</script>
<!-- Importação do Jquery Mask -->
<!-- include da importação da mascara dos inputs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>
<script type="text/javascript">
	$("#telefone, #celular").mask("(00) 00000-0000"); //000 000 0000 eua
	$('.date').mask('00/00/0000');
	$('.time').mask('00:00:00');
	$('.date_time').mask('00/00/0000 00:00:00');
	$('.cep').mask('00000-000');
	$('.phone').mask('0000-0000');
	$('.phone_with_ddd').mask('(00) 0000-0000');
	$('.phone_us').mask('(000) 000-0000');
	$('.mixed').mask('AAA 000-S0S');
	$('.cpf').mask('000.000.000-00', {
		reverse: true
	});
	$('.cnpj').mask('00.000.000/0000-00', {
		reverse: true
	});
	$('.money').mask('000.000.000.000.000,00', {
		reverse: true
	});
	$('.money2').mask("#.##0,00", {
		reverse: true
	});
	$('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
		translation: {
			'Z': {
				pattern: /[0-9]/,
				optional: true
			}
		}
	});
	$('.ip_address').mask('099.099.099.099');
	$('.percent').mask('##0,00%', {
		reverse: true
	});
	$('.clear-if-not-match').mask("00/00/0000", {
		clearIfNotMatch: true
	});
	$('.placeholder').mask("00/00/0000", {
		placeholder: "__/__/____"
	});
	$('.fallback').mask("00r00r0000", {
		translation: {
			'r': {
				pattern: /[\/]/,
				fallback: '/'
			},
			placeholder: "__/__/____"
		}
	});
	$('.selectonfocus').mask("00/00/0000", {
		selectOnFocus: true
	});
</script>


<script type="text/javascript">
	$("#cpfcnpj").keydown(function() {
		try {
			$("#cpfcnpj").unmask();
		} catch (e) {}

		var tamanho = $("#cpfcnpj").val().length;

		if (tamanho < 11) {
			$("#cpfcnpj").mask("999.999.999-99");
		} else {
			$("#cpfcnpj").mask("99.999.999/9999-99");
		}

		// ajustando foco
		var elem = this;
		setTimeout(function() {
			// mudo a posição do seletor
			elem.selectionStart = elem.selectionEnd = 10000;
		}, 0);
		// reaplico o valor para mudar o foco
		var currentValue = $(this).val();
		$(this).val('');
		$(this).val(currentValue);
	});

	header('location: formcliente.php');
</script>
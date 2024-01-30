<!DOCTYPE html>
<html lang="pr-br">

<head>
	<?php
       include 'header.php';
	?>
    <body>
	<div class="wrapper">
		<?php include 'menu.php';?>

		<div class="main">
        <?php include 'topo.php';?>
			
        <main class="content">
			<form action="cadastroproduto.php" method="post">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Cadastro de Produtos</h1>

					<div class="row">
					   <div class="mb-3">
                          <label for="produto" class="form-label">Produto</label>
                          <input type="text" class="form-control" id="produto" name="produto" placeholder="Digite o nome do produto">
                       </div>
                       <div class="mb-3">
                          <label for="descricao" class="form-label">Descrição do Produto</label>
                          <textarea class="form-control" id="descricao" name="descricao"rows="3"></textarea>
                       </div>
					   <div class="mb-3">
						<label for="categoria" class="form-label">Categoria de Produto</label>
						<select
							class="form-select form-select"
							name="categoria"
							id="categoria"
						>
							<option value="bebidaquente">Bebida quente</option>
							<option value="bebidagelada">Bebida gelada</option>
							<option value="boloesobremesa">Bolo e sobremesa</option>
							<option value="sanduicheesalgado">Sanduiche e Salgado</option>
						</select>
					   </div>
					   <div class="mb-3 col-6">
                        <label for="estoque" class="form-label">Estoque</label>
                        <input type="number" class="form-control" name="estoque" id="estoque" min="0" max="200" step="1">
					   </div>
					   <div class="mb-3 col-6">
                        <label for="preco" class="form-label">Preço</label>
                        <input type="number" class="form-control" name="preco" id="preco" min="0" max="200" step="1">
					   </div>
					</div>
				</div>
				<div class="mb-3">
				<input type="submit" class="btn btn-outline-primary" value="Salvar">
				</div>
				</form>
			
			<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Descrição do Produto</th>
                <th scope="col">Categoria de Produto</th>
                <th scope="col">Estoque</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM produtos";
            $busca = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($busca)) {
                $produto = $dados['produto'];
                $descricao = $dados['descricao'];
                $preco = $dados['preco'];
                $estoque = $dados['estoque'];
                $categoria = $dados['categoria']; 
            ?>
                <tr>
                    <td><?php echo $produto ?></td>
                    <td><?php echo $descricao ?></td>
                    <td><?php echo $preco ?></td>
                    <td><?php echo $estoque ?></td>
					<td><?php echo $categoria ?></td>
        </td>
        <td>
            <button class="btn btn-primary" onclick="editarProduto(<?php echo $dados['id']; ?>)">Editar</button>
            <button class="btn btn-danger" onclick="excluirProduto(<?php echo $dados['id']; ?>)">Excluir</button>
        </td>
    </tr>
<?php
}
            ?>
        </tbody>
    </table>
</div>
</main>

			<footer class="footer">
			<?php include 'footer.php';?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>


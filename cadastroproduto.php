<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST['produto'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $categoria = $_POST['categoria']; 
    
    try {
        $sql = "INSERT INTO produtos (produto, descricao, preco, estoque, categoria) VALUES ('$produto', '$descricao', '$preco', '$estoque', '$categoria')";

        if (mysqli_query($conexao, $sql)) {
            echo "Produto cadastrado com sucesso!";
        } else {
            throw new Exception("Erro ao executar a consulta SQL: " . mysqli_error($conexao));
        }
    } catch (Exception $e) {
        echo "Erro ao cadastrar produto: " . $e->getMessage();
    }
}
?>
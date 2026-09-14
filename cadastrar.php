<?php
include "conexao.php";
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$valor_compra = $_POST['valor_compra'];
$valor_venda = $_POST['valor_venda'];
$estoque = $_POST['estoque'];

$sql = "INSERT INTO sistema_produtos (descricao, categoria, valorCompra, valorVenda, estoque) VALUES ('$descricao', '$categoria', '$valor_compra', '$valor_venda', '$estoque')";

if($conexao->query($sql)) {
    header("Location: index.php");
} else {
    echo "Erro ao cadastrar: " .$conexao->error;
}

?>
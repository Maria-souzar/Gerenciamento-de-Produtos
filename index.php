<?php
include "conexao.php";

$pesquisa = "";

if (isset($_GET['pesquisa'])) {
    $pesquisa = $_GET['pesquisa'];
}

$sql = "SELECT * FROM sistema_produtos 
        WHERE descricao LIKE '%$pesquisa%'
        OR categoria LIKE '%$pesquisa%'";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <h1>📦 Cadastro de Produto</h1>

        <form action="cadastrar.php" method="POST">
            <div class="formulario">

                <div>
                    <label>Descrição</label>
                    <input type="text" name="descricao" required>
                </div>

                <div>
                    <label>Categoria</label>
                    <input type="text" name="categoria" required>
                </div>

                <div>
                    <label>Valor Compra (R$)</label>
                    <input type="number" step="0.01" name="valor_compra" required>
                </div>

                <div>
                    <label>Valor Venda (R$)</label>
                    <input type="number" step="0.01" name="valor_venda" required>
                </div>

                <div>
                    <label>QTD. Estoque</label>
                    <input type="number" name="estoque" min="0" required>
                </div>

            </div>

            <button type="submit">CADASTRAR PRODUTO</button>
            <button type="submit">VENDER PRODUTO</button>
        </form>

        <h1>📋 Inventário</h1>

        <form method="GET">
            <input 
                type="text" 
                name="pesquisa" 
                placeholder="Pesquisar por descrição ou categoria"
                value="<?php echo $pesquisa; ?>"
            >
            <button type="submit">🔍</button>
        </form>

        <table>
            <tr>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Venda</th>
                <th>Lucro</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>

            <?php while ($produto = $resultado->fetch_assoc()) { ?>

            <tr>
                <td>
                    <?php echo $produto['descricao']; ?>
                </td>

                <td>
                    <?php echo $produto['categoria']; ?>
                </td>

                <td>
                    <?php echo number_format($produto['valorVenda'], 2, ',', '.'); ?>
                </td>

                <td>
                    R$ <?php echo number_format(
                        $produto['valorVenda'] - $produto['valorCompra'],
                        2,
                        ',',
                        '.'
                    ); ?>
                </td>

                <td>
                    <?php echo $produto['estoque']; ?>
                </td>

                <td>

                    <a 
                        href="excluir.php?id=<?php echo $produto['id']; ?>" 
                        class="excluir"
                        onclick="return confirm('Deseja excluir este produto?')"
                    >
                        ❌
                    </a>
                </td>
            </tr>

            <?php } ?>

        </table>

    </div>
</body>
</html>

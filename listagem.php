<?php
include 'conexao.php';
if(isset($_POST['buscar_nome']) !='') {
    $sql = mysql_query("select * from sistema_produtos where
    usuario like '{$_POST['busca_nome']}%'
    order by usuario asc");
} else {
    $sql = mysql_query("select * from sistema_produtos
    order by usuario asc");
}
?>

<html>
    <body>
        <center>
            <form name="form1" method="POST" action="listagem.php">DIGITE UM NOME: <input type="text" name="busca_nome">
                <input type="submit" value="FILTRAR">
            </form>

            <table border="1" align="center">
                <tr>
                    <th colspan="6e" bgcolor="orange">LISTAGEM DE CONTAS CADASTRADAS</th>
                </tr>
                <tr>
                    <th bgcolor="yellow">USUARIO</th>
                    <th bgcolor="yellow">E-MAIL</th>
                    <th bgcolor="yellow">SENHA</th>
                </tr>
                <tr>
                    <?php
                        while($linha = mysql_fetch_assoc($sql)) {
                    ?>
                    <td align="center"><?php echo $linha['usuario']; ?></td>
                    <td align="center"><?php echo $linha['email']; ?></td>
                    <td align="center"><?php echo $linha['senha']; ?></td>
                    <tr>
                <?php }
                    echo "<br>";
                    echo "<center>";
                    echo "<hr>";
                    echo "<a href=\"index.php\">RETORNAR</a>";
                    echo "<hr>";
                ?>
            </table>
    </body>
</html>
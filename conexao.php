<?php
$servidor = "localhost";
$usuario = "root";
$senha = "usbw";
$banco = "sistema_produto";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao ->connect_error){
    die("Erro na conexão: ". $conexao->connect_error);
}

$conexao->set_charset("utf8")
?>
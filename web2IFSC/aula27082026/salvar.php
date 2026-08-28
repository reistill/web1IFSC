<?php
require "conexao.php";
$nome = trim($_POST["nome"] ?? "");
$preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
$estoque = filter_input(INPUT_POST, "estoque", FILTER_VALIDATE_INT);
if ($nome === "" || $preco === false || $estoque === false) {
exit("Dados invalidos.");
}
$stmt = $conexao->prepare(
"INSERT INTO produtos (nome, preco, estoque) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $nome, $preco, $estoque);
$stmt->execute();
header("Location: index.php");
exit;

?>
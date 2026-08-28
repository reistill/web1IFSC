<?php
require "conexao.php";

$nome = trim($_POST["nome"] ?? "");
$preco = ($_POST["preco"] ?? "");
$estoque = ($_POST["estoque"] ?? "");
$id = ($_POST["id"] ?? "");

$stmt = $conexao->prepare(
"UPDATE produtos
 SET nome = ?, preco = ?, estoque = ?
 WHERE id = ?");
$stmt->bind_param("sdii", $nome, $preco, $estoque, $id);
$stmt->execute();
header("Location: index.php");
exit;

?>
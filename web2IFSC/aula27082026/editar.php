<?php
require "conexao.php";
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
if (!$id) exit("ID invalido.");
$stmt = $conexao->prepare(
"SELECT id, nome, preco, estoque FROM produtos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$produto = $stmt->get_result()->fetch_assoc();
if (!$produto) exit("Produto nao encontrado.");
?>
<form method="post" action="atualizar.php">
 <input type="hidden" name="id" value="<?= $produto['id'] ?>">
 <p>Nome: <input type="text" name="nome"
 value="<?= htmlspecialchars($produto['nome']) ?>"></p>
 <p>Preço: <input type="text" name="preco" value="<?= $produto['preco'] ?>"></p>
 <p>Estoque: <input type="number" name="estoque" value="<?= $produto['estoque'] ?>"></p>
 <button type="submit">Atualizar</button>
</form>
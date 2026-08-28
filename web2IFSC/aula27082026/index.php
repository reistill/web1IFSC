<?php require "conexao.php"; ?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Produtos</title></head>
<body>
<h1>Produtos</h1>
<p><a href="novo.php">Novo produto</a></p>
<table border="1" cellpadding="6">
<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Ações</th></tr>
<?php
$resultado = $conexao->query(
"SELECT proutos.id, proutos.nome, produos.preco, produtos.estoque, categorias.nome AS categoria 
 FROM produtos 
 JOIN categorias 
 ON produtos.categoria_id = categorias.id
 ORDER BY produtos.id DESC");
while ($produto = $resultado->fetch_assoc()):
?>
<tr>
 <td><?= $produto['id'] ?></td>
 <td><?= htmlspecialchars($produto['nome']) ?></td>
 <td>R$ <?= number_format($produto['preco'], 2, ',', '.') ?></td>
 <td><?= $produto['estoque'] ?></td>
 <td>
 <a href="editar.php?id=<?= $produto['id'] ?>">Editar</a>
 <form method="post" action="excluir.php" style="display:inline">
 <input type="hidden" name="id" value="<?= $produto['id'] ?>">
 <button type="submit" onclick="return confirm('Excluir?')">Excluir</button>
 </form>
 </td>
</tr>
<?php endwhile; ?>
</table>
</body></html>
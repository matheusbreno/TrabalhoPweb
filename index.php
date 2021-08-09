<!DOCTYPE html>
<html>
<head>
<title>CADASTRO</title>
</head>
<body>
<div class="container" style="text-align:center">
<h3>Adicionar Produto</h3>
<form method="post" action="../../controllers/ProdutoController.php">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input type="text" class="form-control" name="descricao">
  </div>
  <div class="form-group">
    <label>Preço</label>
    <input type="text" class="form-control" name="preco">
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
</div>

<div class="container2" style="text-align:center">
<h3>Adicionar Usuário</h3>
<form method="post" action="../../controllers/UsuarioController.php">
  <div class="form-group">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label>Data de Nascimento</label>
    <input type="text" class="form-control" name="datanasc">
  </div>
  <div class="form-group">
    <label>Nickname</label>
    <input type="text" class="form-control" name="nickname">
  </div>
  <button type="submit" class="btn btn-primary">Adicionar</button>
</form>
</div>
</body>
</html>
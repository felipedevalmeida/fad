<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Você pode incluir um header comum se desejar -->
  <div class="container mt-5">
    <h1>Contato</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Processa o formulário de contato – envio de e-mail ou gravação em BD
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $assunto = $_POST['assunto'];
      $mensagem = $_POST['mensagem'];
      // Aqui você pode implementar o envio de e-mail ou salvar os dados
      echo "<div class='alert alert-success'>Mensagem enviada com sucesso!</div>";
    }
    ?>
    <form action="contato.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group col-md-6">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone">Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone">
        </div>
        <div class="form-group col-md-6">
          <label for="assunto">Assunto</label>
          <input type="text" class="form-control" id="assunto" name="assunto">
        </div>
      </div>
      <div class="form-group">
        <label for="mensagem">Mensagem</label>
        <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</body>
</html>

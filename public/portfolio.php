<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Você pode incluir um header comum se desejar -->
  <div class="container mt-5">
    <h1>Portfólio</h1>
    <div class="row">
      <?php
      // Exemplo de obtenção dos projetos via query no banco
      // $query = "SELECT * FROM projetos ORDER BY data_publicacao DESC";
      // Para fins de demonstração, utilizamos um array simulado:
      $projetos = [
        ['img' => 'images/projeto1.jpg', 'desc' => 'Descrição do Projeto 1'],
        ['img' => 'images/projeto2.jpg', 'desc' => 'Descrição do Projeto 2'],
        ['img' => 'images/projeto3.jpg', 'desc' => 'Descrição do Projeto 3'],
        ['img' => 'images/projeto4.jpg', 'desc' => 'Descrição do Projeto 4']
      ];
      foreach ($projetos as $projeto):
      ?>
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="<?php echo $projeto['img']; ?>" class="card-img-top" alt="Projeto">
          <div class="card-body">
            <p class="card-text"><?php echo $projeto['desc']; ?></p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>

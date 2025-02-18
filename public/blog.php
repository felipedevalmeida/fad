<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Você pode incluir um header comum se desejar -->
  <div class="container mt-5">
    <h1>Blog</h1>
    <div class="row">
      <?php
      // Exemplo de query para obter posts do blog
      $posts = [
        ['img' => 'images/publicacao1.jpg', 'desc' => 'Resumo da Publicação 1'],
        ['img' => 'images/publicacao2.jpg', 'desc' => 'Resumo da Publicação 2'],
        ['img' => 'images/publicacao3.jpg', 'desc' => 'Resumo da Publicação 3'],
        ['img' => 'images/publicacao4.jpg', 'desc' => 'Resumo da Publicação 4']
      ];
      foreach ($posts as $post):
      ?>
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="<?php echo $post['img']; ?>" class="card-img-top" alt="Publicação">
          <div class="card-body">
            <p class="card-text"><?php echo $post['desc']; ?></p>
            <a href="artigo.php" class="btn btn-primary" target="_blank">Saiba Mais</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>

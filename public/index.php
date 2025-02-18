<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfólio - Página Inicial</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Slick Slider (caso opte por este plugin) -->
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body id="top">
  <!-- Header -->
  <header class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-3">
        <img src="images/logo.png" alt="Logo" class="logo">
      </div>
      <div class="col-md-6">
        <nav>
          <ul class="nav justify-content-center">
            <li class="nav-item"><a class="nav-link" href="#inicio">Página Inicial</a></li>
            <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfólio</a></li>
            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-md-3 text-right">
        <a href="#" class="social-icon"><img src="images/facebook.png" alt="Facebook"></a>
        <a href="#" class="social-icon"><img src="images/twitter.png" alt="Twitter"></a>
        <a href="#" class="social-icon"><img src="images/linkedin.png" alt="LinkedIn"></a>
        <a href="#" class="social-icon"><img src="images/youtube.png" alt="YouTube"></a>
        <a href="#" class="social-icon"><img src="images/instagram.png" alt="Instagram"></a>
      </div>
    </div>
  </header>

  <!-- Banner Slider -->
  <section id="slider" class="container">
    <div class="slider">
      <div>
        <img src="images/slider1.jpg" alt="Slider 1" class="img-fluid">
        <div class="slider-caption">
          <a href="portfolio.php" class="btn btn-primary">Ver Portfólio</a>
          <a href="blog.php" class="btn btn-primary">Ver Blog</a>
        </div>
      </div>
      <div>
        <img src="images/slider2.jpg" alt="Slider 2" class="img-fluid">
        <div class="slider-caption">
          <a href="portfolio.php" class="btn btn-primary">Ver Portfólio</a>
          <a href="blog.php" class="btn btn-primary">Ver Blog</a>
        </div>
      </div>
      <div>
        <img src="images/slider3.jpg" alt="Slider 3" class="img-fluid">
        <div class="slider-caption">
          <a href="portfolio.php" class="btn btn-primary">Ver Portfólio</a>
          <a href="blog.php" class="btn btn-primary">Ver Blog</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Últimos Projetos -->
  <section id="ultimos-projetos" class="container mt-5">
    <h2>Últimos Projetos</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="images/projeto1.jpg" class="card-img-top" alt="Projeto 1">
          <div class="card-body">
            <p class="card-text">Descrição breve do projeto 1.</p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="images/projeto2.jpg" class="card-img-top" alt="Projeto 2">
          <div class="card-body">
            <p class="card-text">Descrição breve do projeto 2.</p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="images/projeto3.jpg" class="card-img-top" alt="Projeto 3">
          <div class="card-body">
            <p class="card-text">Descrição breve do projeto 3.</p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <a href="portfolio.php" class="btn btn-primary">+ Projetos</a>
    </div>
  </section>

  <!-- Formulário de Contato -->
  <section id="contato" class="container mt-5">
    <h2>Contato</h2>
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
  </section>

  <!-- Últimas Publicações -->
  <section id="ultimas-publicacoes" class="container mt-5">
    <h2>Últimas Publicações</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="images/publicacao1.jpg" class="card-img-top" alt="Publicação 1">
          <div class="card-body">
            <p class="card-text">Descrição breve da publicação 1.</p>
            <a href="blog.php" class="btn btn-primary" target="_blank">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="images/publicacao2.jpg" class="card-img-top" alt="Publicação 2">
          <div class="card-body">
            <p class="card-text">Descrição breve da publicação 2.</p>
            <a href="blog.php" class="btn btn-primary" target="_blank">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="images/publicacao3.jpg" class="card-img-top" alt="Publicação 3">
          <div class="card-body">
            <p class="card-text">Descrição breve da publicação 3.</p>
            <a href="blog.php" class="btn btn-primary" target="_blank">Saiba Mais</a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <a href="blog.php" class="btn btn-primary">+ Publicações</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="container-fluid bg-dark text-white mt-5 p-3 text-center">
    <p>&copy; 2025 Seu Nome. Todos os direitos reservados.</p>
    <a href="#top" class="btn btn-primary">UP</a>
  </footer>
</body>
</html>

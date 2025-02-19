<!DOCTYPE html>
<html lang="pt-br">
<head>
  <?php require_once('header.php'); ?>
</head>
<body id="top">
  <!-- Header -->
  <header class="container-fluid">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3">
          <img src="assets/images/demo/logo/red.png" alt="Logo" class="logo">
        </div>
        <div class="col-md-6 text-center">
          <nav>
            <ul class="nav justify-content-center">
              <li class="nav-item"><a class="nav-link" href="#inicio">Página Inicial</a></li>
              <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfólio</a></li>
              <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-3">
          <div class="d-flex justify-content-end">
            <a href="https://www.facebook.com/realfeelipepessoal" class="social-icon" target="_blank"><img src="assets/images/email_template/social_icon2_default.png" alt="Facebook"></a>
            <a href="https://x.com/realfeelipe" class="social-icon" target="_blank"><img src="assets/images/email_template/social_icon3_default.png" alt="Twitter"></a>
            <a href="https://www.linkedin.com/in/felipe-almeida-b55694187/" class="social-icon" target="_blank"><img src="assets/images/email_template/social_icon1_default.png" alt="LinkedIn"></a>
            <a href="https://www.youtube.com/@nicefee" class="social-icon" target="_blank"><img src="assets/images/email_template/social_icon4_default.png" alt="YouTube"></a>
            <a href="https://www.instagram.com/realfeelipe" class="social-icon" target="_blank"><img src="assets/images/email_template/social_icon4_default.png" alt="Instagram"></a>
          </div>
        </div>
      </div>
    </div>
  </header>



  <!-- Banner Slider -->
  <section id="slider" class="container-fluid nopadding nomargin">
    <div class="slider">
      <div>
        <img src="assets/images/demo/layerslider/slide-b-bg.jpg" alt="Slider 1" class="img-fluid">
        <div class="slider-caption">
          <a href="portfolio.php" class="btn btn-primary">Ver Portfólio</a>
          <a href="blog.php" class="btn btn-primary">Ver Blog</a>
        </div>
      </div>
      <div>
        <img src="assets/images/demo/layerslider/slide-b-bg-blue.jpg" alt="Slider 2" class="img-fluid">
        <div class="slider-caption">
          <a href="portfolio.php" class="btn btn-primary">Ver Portfólio</a>
          <a href="blog.php" class="btn btn-primary">Ver Blog</a>
        </div>
      </div>
      <div>
        <img src="assets/images/demo/layerslider/slide-b-bg-red.jpg" alt="Slider 3" class="img-fluid">
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
          <img src="assets/images/demo/portfolio/a1.jpg" class="card-img-top" alt="Projeto 1">
          <div class="card-body">
            <p class="card-text">Descrição breve do projeto 1.</p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="assets/images/demo/portfolio/a2.jpg" class="card-img-top" alt="Projeto 2">
          <div class="card-body">
            <p class="card-text">Descrição breve do projeto 2.</p>
            <a href="#" class="btn btn-primary">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="assets/images/demo/portfolio/a3.jpg" class="card-img-top" alt="Projeto 3">
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
          <img src="assets/images/demo/portfolio/a7.jpg" class="card-img-top" alt="Publicação 1">
          <div class="card-body">
            <p class="card-text">Descrição breve da publicação 1.</p>
            <a href="blog.php" class="btn btn-primary" target="_blank">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="assets/images/demo/portfolio/a4.jpg" class="card-img-top" alt="Publicação 2">
          <div class="card-body">
            <p class="card-text">Descrição breve da publicação 2.</p>
            <a href="blog.php" class="btn btn-primary" target="_blank">Saiba Mais</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="assets/images/demo/portfolio/a5.jpg" class="card-img-top" alt="Publicação 3">
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

  <?php require_once('footer.php'); ?>
</body>
</html>

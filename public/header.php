<?php
    $protocol = "http://";
    if (isset($_SERVER["HTTPS"]) === true && ($_SERVER ["HTTPS"] === "on" || (int)$_SERVER["HTTPS"] === 1)) {
        $protocol = "https://";
    }
?>


<!-- Configurações básicas -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Felipe Almeida - Software Developer</title>

<!-- SEO -->
<meta name="description" content="Descrição completa e atraente do seu site ou página.">
<meta name="keywords" content="palavra-chave1, palavra-chave2, palavra-chave3">
<meta name="author" content="Seu Nome ou Empresa">
<meta name="robots" content="index, follow">
<link rel="canonical" href="https://www.felipealmeidadev.com.br">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.felipealmeidadev.com.br">
<meta property="og:title" content="Título do Site">
<meta property="og:description" content="Descrição completa e atraente do seu site ou página.">
<meta property="og:image" content="https://www.felipealmeidadev.com.brimagem-de-capa.jpg">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="https://www.felipealmeidadev.com.br">
<meta name="twitter:title" content="Título do Site">
<meta name="twitter:description" content="Descrição completa e atraente do seu site ou página.">
<meta name="twitter:image" content="https://www.felipealmeidadev.com.brimagem-de-capa.jpg">

<!-- Favicon -->
<link rel="shortcut icon" href="assets/images/demo/favicon.ico" type="image/x-icon" />

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Libraries Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

<!-- Slick Slider CSS via CDN -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>


<!-- Libraries Stylesheet -->
<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
<link href="lib/animate/animate.min.css" rel="stylesheet">
<!-- <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet"> -->
<link href="assets/plugins/owl-carousel/owl.pack.css" rel="stylesheet" type="text/css" />
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="assets/css/flexslider.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"> -->

<!-- Template Stylesheet -->
<link rel="stylesheet" href="css/style.css">

<!-- jQuery -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

<noscript>Your browser does not support JavaScript!</noscript>
<!-- <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script> -->
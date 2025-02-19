<?php 
include_once '../Manager/conexao.php'; 
include_once '../Manager/ado.php'; 
include_once '../Manager/Atualiza.php'; 

//inicio();

$_SESSION["secao_id"] = 9;
$_SESSION["secao_dna"] = '-1--9-';
?>

<!DOCTYPE html>
<html lang="pt">

<head>
<?php 
include_once '../incs/head.php'; 
?>

<style type="text/css">
.owl-carousel .owl-item div {
    text-align: left;
}	

.atalhos {
	color: #333;
	height: 50px;
	padding-top: 12px;
	width: 100%;
}

@media only screen and (max-width: 1200px) {
	.adapta-mobile {
		height: 500px;
		object-fit: cover;
		object-position: center;
	}

	.carousel-caption h3 {
		line-height: 33px;
	}
}
.campi-links a {
    font-size: 16px;
}
.carousel-caption .btn-outline-light {
    border: 1px solid !important;
}
.divulgacao-btn {
    border: 1px solid;
}
.new-event-card {
    max-width: 308px;
}
</style>
</head>

<body id="pagina_interna">
<?php 
	include_once '../incs/menu_superior.php'; 
	include_once '../incs/menu_principal.php'; 
?>

    <div id="Banner_home" class="bottom-pagination owl-carousel controlls-over controls-hover-only carousel-inner" data-plugin-options='{"stopOnHover":false, "slideSpeed":6000, "autoPlay":3000, "items": 1, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "stopOnHover":true}'>
		<?php 
			echo str_replace('<div class="row clearfix">','<div class="carousel-caption" style="position: absolute; margin-top:10px; margin-left: 20px; margin-right: 20px;">',Conteudo("Slider_home")); 
		?>
<!-- 
		<div>
			<img src="<?php echo $Dominio_Pasta; ?>/img/carousel-1.jpg" class="d-block w-100" alt="Slide 1">
			<div class="carousel-caption" style="position: absolute;">
				<div class="pre-titulo-banner">
					<h2>VENHA PARA A UFFS</h2>
				</div>
				<h3>ABERTA AS INSCRIÇÕES</h3>
				<p>Com um corpo docente qualificado e infraestrutura de ponta, oferecemos uma experiência acadêmica
					enriquecedora. Dê o primeiro passo em direção ao futuro que você deseja construir!</p>
				<a href="#" class="btn btn-success">Saiba Mais</a>
				<a href="#" class="btn btn-outline-light">Conheça nossas graduações</a>
			</div>
		</div>

 -->
    </div>



    <div class="mrg-bott-1"></div>
    <div class="container-fluid">
		<?php 
			echo Conteudo("Atalhos_home"); 
		?>
		<!-- Atalhos Start -->
		<!-- 
		<div class="container">
			<div class="row mrg-bott-1">
				<div class="col-md-3">
					<div class="card">
						<a href="#" class="btn btn-outline-light" class="atalhos">Conheça nossas graduações</a>
					</div>
				</div>
			</div>
		</div> 
		-->
		<!-- Atalhos Final -->
	</div>

    <div class="mrg-bott-1"></div>
    <!-- Boas vindas -->
    <div class="container-fluid welcome-section">

		<?php
			echo Conteudo("Destaque_principal_home"); 
		?>
<!-- 
        <div class="row">
            <div class="col-md-5 cx-centro">
                <div class="pre-titulo">
                    <h2>CONHEÇA A UFFS</h2>
                </div>
                <h2 class="titulos-principais">Boas Vindas à UFFS</h2>
                <p>Bem-vindos à Universidade Federal da Fronteira Sul (UFFS)! Estamos muito felizes em tê-los conosco,
                    embarcando em uma jornada de aprendizado, descoberta e crescimento.
                    <br /><br />
                    Aqui, você encontrará um ambiente acolhedor, diverso e estimulante, onde poderá desenvolver suas
                    habilidades, explorar novas ideias e contribuir para uma sociedade mais justa e sustentável.
                    <br /><br />
                    Sejam bem-vindos e que este seja o início de uma trajetória de sucesso e realizações.
                </p>
                <div class="welcome-buttons">
                    <button class="btn-verde-uffs">Saiba Mais</button>
                    <button class="btn-verde-uffs mrg-left-20">Formas de Ingresso</button>
                </div>
            </div>
            <div class="col-md-7 welcome-image">
                <img src="<?php echo $Dominio_Pasta; ?>/img/foto-sessa-1.png" alt="Graduação na UFFS">
            </div>
        </div>
 -->
    </div>
    <!-- Boas vindas Final -->
    <!-- Eventos -->
	<?php
	$categoria = '';
	$selecionado = '';
	$categorias_campus_noticias = '';
	$categorias_campus_eventos = '';
	$Rs1 = mysqli_query($con,"select distinct Institucional_fonte from institucional where Mascara_id = 7 order by Institucional_fonte");
	If(mysqli_num_rows($Rs1) > 0){
		while($row1=mysqli_fetch_array($Rs1)) {
			$categorias_campus_noticias .= '<div class="swiper-slide"><a href="#" class="btn btn-laranja-uffs ';
			if($categoria == $row1["Institucional_fonte"]) $categorias_campus_noticias .= ' categoria_ativa ';
			$categorias_campus_noticias .= '" onclick="javascript:window.location=\'/uffs/acesso-rapido/noticias?categoria=' . $row1["Institucional_fonte"] . '\';">' . $row1["Institucional_fonte"] . '</a></div>';
			$categorias_campus_eventos .= '<div class="swiper-slide"><a href="#" class="btn btn-laranja-uffs ';
			if($categoria == $row1["Institucional_fonte"]) $categorias_campus_eventos .= ' categoria_ativa ';
			$categorias_campus_eventos .= '" onclick="javascript:window.location=\'/uffs/acesso-rapido/noticias?categoria=' . $row1["Institucional_fonte"] . '\';">' . $row1["Institucional_fonte"] . '</a></div>';
		}
	}
	?>
    <div class="container">
        <div class="container padd-40">
            <div class="titulo-sessoes">
                <h2>Notícias</h2>
				<a href="/uffs/acesso-rapido/noticias" class="btn btn-success ms-auto" style="float:right;">Veja todas as Notícias</a>
            </div>
            <!-- Swiper para os Filtros -->
            <div class="swiper-container filter-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="btn btn-laranja-uffs <?php if($categoria == '') echo ' categoria_ativa ';?>" onclick="window.location='/uffs/acesso-rapido/noticias?categoria=';">Todas as Notícias</a>
                    </div>
                    <?php echo $categorias_campus_noticias; ?>
	            </div>
            </div>

            <!-- Container dos Cards -->
            <div class="cards-container" role="region" aria-labelledby="titulo-sessoes">
						
				<?php
					$_SESSION["where"] = ' and Institucional_imagem_pq is not null ';
					echo Conteudo("lista_noticias_home"); 
				?>	
				<!-- 
<div class="new-event-card" data-category="cerro-largo">
	<div class="new-event-image">
		<img src="<?php echo $Dominio_Pasta; ?>/img/foto-sessa-1.png" alt="Imagem do Evento">
	</div>
	<div class="new-event-details">
		<div class="new-event-location">CERRO LARGO</div>
		<div class="new-event-title">Clube de leitura “Sementes: leituras antirracistas” terá pri...
		</div>
		<div class="new-event-description">Proposta é a divulgação e leitura coletiv...</div>
		<div class="new-event-date">26/02/2024</div>
	</div>
</div>
 -->
            </div>
        </div>
    </div>

    <!-- Notícias Final -->

    <!-- Atalhos Campi -->
    <div class="container-fluid campi-section">
        <div class="container"><!-- 
            <div class="col-md-2">
                <div class="campi-content">
                    <div class="campi-titles">
                        <h1>Acesso Rápido</h1>
                        <h2>Campi</h2>
                    </div>
                </div>
            </div> -->
            <div class="col-md-12">
                <div class="campi-links pt-5">
                    <?php echo Menu(10,'<a href="secao_link">secao_nome <i class="fas fa-chevron-right"></i></a>','','','',''); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Atalhos Campi Final -->

    <!-- Eventos -->

    <div class="container-fluid back-eventos">
        <div class="container padd-40">
            <div class="titulo-sessoes">
                <h2>Agenda de Eventos</h2>
				<div class="ms-auto" style="float:right;">
                    <a href="/uffs/cadastro-evento/" class="btn divulgacao-btn me-2">Divulgue seu evento</a>
                    <a href="/uffs/acesso-rapido/eventos" class="btn wdt-100 btn-success">Veja todos os Eventos</a>
                </div>
            </div>
            <!-- Swiper para os Filtros -->
            <div class="swiper-container filter-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="btn btn-laranja-uffs <?php if($categoria == '') echo ' categoria_ativa ';?>" onclick="window.location='/uffs/acesso-rapido/eventos?categoria=';">Todos os Eventos</a>
                    </div>
                    <?php echo $categorias_campus_eventos; ?>
				</div>
            </div>
            <!-- Container dos Eventos -->
            <div class="event-container">
				<?php
					$_SESSION["where"] = ' and Institucional_imagem_pq is not null ';
					echo Conteudo("eventos-home"); 
				?>	
<!-- 
<div class="event-item universidade">
	<div class="event-content">
		<h5 class="event-date">03/04/2024</h5>
		<p class="event-location"><span class="location-dot"></span>Cerro Largo</p>
		<h5 class="event-title">Conferência Pan-Americana de Meteorologia - CPAM</h5>
		<p class="event-description">Evento online</p>
	</div>
</div>
 -->
                <!-- Repetir o bloco acima para cada evento, mudando as classes de categorias e o conteúdo conforme necessário -->
            </div>
        </div>
    </div>
    <!-- Eventos Final -->

	<?php 
	include_once '../incs/footer.php'; 
	include_once '../incs/footer_script.php'; 
	?>

</body>

</html>
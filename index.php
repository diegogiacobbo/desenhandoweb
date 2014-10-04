<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="DesignPattern/View/images/favicon.ico"
	type="image/x-icon">
<link rel="icon" href="DesignPattern/View/images/favicon.ico" type="image/x-icon">

<title>Desenhando Web</title>

<!-- Bootstrap core CSS -->
<link href="DesignPattern/View/css/bootstrap.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-18140203-1', 'desenhandoweb.com.br');
      ga('send', 'pageview');

    </script>
    <style>
    .imagem-opt{
	    opacity: 0.4;
	    filter: alpha(opacity=40); /* For IE8 and earlier */
    }
    .no-buttom{
     	margin-bottom: 80px;
    }
    </style>
</head>
<!-- NAVBAR
================================================== -->
<body>

	<div class="navbar-wrapper">

		<div class="container">

			<div class="navbar navbar-inverse navbar-static-top"
				role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span
								class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="./contato.php">Contato</a></li><!--
                <li><a href="#contact">Contact</a></li> -->
							<!--  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>


	<!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img class="imagem-opt" src="DesignPattern/View/images/fundo1.jpg" /><img
					data-src="holder.js/900x500/auto/#555:#5a5a5a/">
				<div class="container">
					<div class="carousel-caption">
						<h1>Desenvolvendo projetos de softwares reais</h1>
						<p>A ideia &eacute; sua, transforme ela com a nossa ferramenta que
							faz as suas ideias de marketing na internet se tornarem reais,
							construindo software de valor e transformar sua necessidade em um
							neg&oacute;cio rent&aacute;vel e totalmente customizado</p>
						<p>
							<a class="btn btn-lg btn-primary"
								href="http://zerohora.clicrbs.com.br/rs/economia/noticia/2013/10/o-mapa-das-startups-de-porto-alegre-a-capital-tem-vocacao-para-inovar-4297851.html"
								role="button" target="_blank">@zerohora</a>
						</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img class="imagem-opt" src="DesignPattern/View/images/fundo2.jpg" /> <img
					data-src="holder.js/900x500/auto/#666:#6a6a6a/">
				<div class="container">
					<div class="carousel-caption no-buttom">
						<h1>Quem faz parte da desenhando web</h1>
						<p>
							Diego Giacobo formado em Sistemas de Informação na <a href="www.pucrs.br">www.pucrs.br</a> 
							e Camila Beatrici formada em Design de Produto na <a href="www.uniritter.edu.br">www.uniritter.edu.br</a>, 
							vamos transformar ideias comuns em realidade na web.
						</p>
						<!-- <p><a class="btn btn-lg btn-primary" href="#" role="button" target="_blank">Learn more</a></p> -->
					</div>
				</div>
			</div>
			<div class="item">
				<img class="imagem-opt" src="DesignPattern/View/images/fundo3.jpg" /> <img
					data-src="holder.js/900x500/auto/#555:#5a5a5a/">
				<div class="container">
					<div class="carousel-caption">
						<h1>Empreendendorismo nacional/regional</h1>
						<p>Os jovens de hoje constroem seus sonhos pensando n&atilde;o
							s&oacute; no bem pessoal, mas tamb&eacute;m no coletivo. Criar
							solu&ccedil;&otilde;es inovadoras e novos neg&oacute;cios, para
							eles, &eacute; uma ferramenta que ajuda a realizar suas
							ambi&ccedil;&otilde;es e objetivos de vida.</p>
						<p>
							<a class="btn btn-lg btn-primary"
								href="http://www.endeavor.org.br/vaiqueda?gclid=CO7FhPyH-bsCFSEV7AodHwMACg"
								role="button" target="_blank">@endeavorbrasil</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
			class="glyphicon glyphicon-chevron-left"></span></a> <a
			class="right carousel-control" href="#myCarousel" data-slide="next"><span
			class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
	<!-- /.carousel -->



	<!-- Marketing messaging and featurettes
    ================================================== -->
	<!-- Wrap the rest of the page in another container to center all the content. -->

	<div class="container marketing">

		<!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-lg-4">
				<img class="img-circle" src="DesignPattern/View/images/close.jpg"
					alt="Generic placeholder image">
				<h2>Quem</h2>
				<p>Eu sou sou apaixonado por Web e tecnologia.</p>
				<p>Criamos o site para ajudarmos empresas que querem mais da internet, 
					quer um site como esse, quer tecnologia, nos ajude a te ajudar, entre em
					contato, você quer fazer a diferença, faça agora. Envie um e-mail para 
					<i>diego@desenhandoweb.com.br</i></p>
				<p>
					<a class="btn btn-default"
						href="https://www.facebook.com/diegogiacobbo/about" role="button"
						target="_blank">View details &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="img-circle" src="DesignPattern/View/images/close_1.jpg"
					alt="Generic placeholder image">
				<h2>Somos?</h2>
				<p>Procuramos associar nossas experiências e pessoas competentes para criação
				de produtos que tragam valor para sua empresa na área web e mobile, utilizamos as melhores
				ferramentas de mercado para a Web e Mobile.</p>
				<p>
					<a class="btn btn-default"
						href="https://www.facebook.com/camilabeatrici/about" role="button"
						target="_blank">View details &raquo;</a>
				</p>
			</div>
			<!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img src="DesignPattern/View/images/dw.png" alt="Generic placeholder image">
				<h2>Projetos Abertos</h2>
				<p>
					Voc&ecirc; &eacute; bom em inovar? n&atilde;o pode ser daqueles que
					falam, <i>"como eu n&atilde;o tive essa ideia antes?"</i> OMG
					<code>
						<o>
					
					</code>
					, tem que ter algo mais, se acha que pode desenhar algo novo para o
					futuro da web, compartilhe conosco a sua ideia, para que possamos
					criar o seu projeto.
				</p>
				<p>
					A condi&ccedil;&atilde;o &eacute; criarmos um c&oacute;digo aberto,
					com a licen&ccedil;a GNU GPL, entenda mais
					<code>
						<a href="http://www.gnu.org/licenses/gpl.html" target="_blank">www.gnu.org/licenses/gpl.html</a>
					</code>
				</p>
			</div>
			<!-- /.col-lg-4 -->
		</div>
		<!-- /.row -->


		<!-- START THE FEATURETTES -->

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">
					Quais meus <span class="text-muted"> sonhos? </span>
				</h2>
				<p class="lead">"<i>Corro atr&aacute;s do meu sonho em fazer
					diferen&ccedil;a. Por isso eu e meu s&oacute;cio sempre
					buscamos pensar "fora da caixa", para buscar solu&ccedil;&otilde;es
					inovadoras e in&eacute;ditas para nossos clientes." por Camila Beatrici </i></p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-responsive img-circle"
					src="DesignPattern/View/images/inovacao.jpg">
			</div>
		</div>

		<div class="row featurette">
			<div class="col-md-5">
				<img class="featurette-image img-responsive"
					src="DesignPattern/View/images/design-thinking.png" alt="Generic placeholder image">
			</div>
			<div class="col-md-7">
				<h2 class="featurette-heading">
					O que<span class="text-muted"> queremos?</span>
				</h2>
				<p class="lead">Motivação, desmotivação, inovação, fazer mais do
					mesmo, pensar fora da caixa ou até procurar solucionar problemas já
					conhecidos.</p>
				<p class="lead">
					Então, vamos em frente, pensamos iguais e pensamos de formas
					diferentes, crie softwares e aumente a sua produtividade, <i>aumente suas vendas</i>,
					com marketing na internet que funciona.
				</p>
			</div>
		</div>

		<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">
					Empreender na forma de uma <span class="text-muted">startup.</span>
				</h2>
				<p class="lead">Nem toda nova empresa &eacute; uma startup. Saiba
					quais s&atilde;o as caracter&iacute;sticas que definem este tipo
					peculiar de empreendimento.</p>
				<p class="lead">Venha empreender conosco, podemos ser os mentores do
					seu neg&oacute;cio.</p>
				<p>
					<a class="btn btn-default"
						href="http://exame.abril.com.br/pme/noticias/o-que-e-uma-startup/"
						role="button">@Exame_com</a>
				</p>
			</div>
			<div class="col-md-5">
				<video width="500" height="350" style="margin-top: 73px;" controls>
					<source src="videos/O_que_eh_Startup" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->
		<!-- FOOTER -->
		<footer>
			<div class="fb-like-box"
				data-href="http://www.facebook.com/Desenhandoweb" data-width="100"
				data-height="100" data-colorscheme="light" data-show-faces="false"
				data-header="false" data-stream="false" data-show-border="false"></div>
			<div id="fb-root"></div>
			<script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=704264996271901";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
			<p class="pull-right">
				<a href="#">Back to top</a>
			</p>
			<p>
				&copy; 2013 Desenhando Web, Inc. &middot; <a href="#">Public</a>
				&middot; <a href="#">Terms</a>
			</p>
		</footer>
	</div>
	<!-- /.container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="DesignPattern/View/js/bootstrap.min.js"></script>
	<script src="DesignPattern/View/js/holder.js"></script>
</body>
</html>
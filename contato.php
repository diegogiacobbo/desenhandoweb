<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="DesignPattern/View/images/favicon.ico"
	type="image/x-icon">
<link rel="icon" href="DesignPattern/View/images/favicon.ico"
	type="image/x-icon">

<title>Contato - Desenhando Web</title>

<!-- Bootstrap core CSS -->
<link href="DesignPattern/View/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<style>
body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #eee;
}

input {
	margin-bottom: 10px !important;
}

.form-signin {
	max-width: 522px;
	padding: 15px;
	margin: 0 auto;
}

.form-signin .form-signin-heading,.form-signin .checkbox {
	margin-bottom: 10px;
}

.form-signin .checkbox {
	font-weight: normal;
}

.form-signin .form-control {
	position: relative;
	height: auto;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 10px;
	font-size: 16px;
}

.form-signin .form-control:focus {
	z-index: 2;
}

.form-signin input[type="email"] {
	margin-bottom: -1px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
	margin-bottom: 10px;
	border-top-left-radius: 0;
	border-top-right-radius: 0;
}
</style>

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    		<![endif]-->
</head>

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
							<li><a href="./">Home</a></li>
							<li class="active"><a href="#">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>



	<div class="container">

		<form id="form-signin" class="form-signin" role="form">
			<h3 class="form-signin-heading">Vamos marcar uma call para bater um
				papo?</h3>
			<h4>Através de uma breve conversa lhe explicaremos nossas opções de
				contratação.</h4>
			<input id="nome" type="text" class="form-control" placeholder="Nome"
				required> <input id="email" type="email" class="form-control"
				placeholder="Email address" required autofocus> <input id="skype"
				type="text" class="form-control"
				placeholder="Seu usuário no skype ou telefone" required>
			<button id="submit" class="btn btn-lg btn-primary btn-block"
				type="submit" value="submit">Marcar uma reunião</button>
		</form>

	</div>
	<!-- /container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="DesignPattern/View/js/bootstrap.min.js"></script>
	<script
		src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="DesignPattern/View/ajax/submit.ajax.js"></script>
</body>
</html>
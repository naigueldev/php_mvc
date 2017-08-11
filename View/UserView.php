<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<title>

	</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	

	<style type="text/css">

		body {
			padding-top: 60px;
			padding-bottom: 30px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!-- The mobile navbar-toggle button can be safely removed since you do not need it in a non-responsive implementation -->
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="container ">



		<div class="jumbotron">
		<?php if (isset($erro)) { ?>
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Erro!</strong> <?= $erro ?>
		</div>
		<?php } ?>
		<?php if (isset($sucesso)) { ?>
		<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Sucesso!</strong> <?= $sucesso ?>
		</div>
		<?php } ?>


			<form action="../Controller/UserController.php" method="post" name="cadUser">
				<div class="form-group">
					<label for="exampleInputEmail1">Usuário</label>
					<input type="text" name="textUser" class="form-control" id="textUser" placeholder="Usuário">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nome</label>
					<input type="text" name="textNome" class="form-control" id="textNome" placeholder="Nome">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Sobrenome</label>
					<input type="text" name="textSobrenome" class="form-control" id="textSobrenome" placeholder="Sobrenome">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" name="textEmail" class="form-control" id="textEmail" placeholder="email@email.com">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Idade</label>
					<input type="text" name="textIdade" class="form-control" id="textIdade" placeholder="Idade">
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1">Senha</label>
					<input type="password" name="pwdSenha" class="form-control" id="pwdSenha" placeholder="Password">
				</div>
				<div class="text-center">
					
					<input type="submit" name="btCadastrar" id="btCadastrar" class="btn btn-md btn-success" value="Cadastrar" />
					<input type="reset" name="btLimpar" id="btbtLimparCadastrar" class="btn btn-md btn-default" value="Limpar" />
					
				</div>
			</form>
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
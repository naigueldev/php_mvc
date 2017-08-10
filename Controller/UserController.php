<?php 
	include '../Model/UserModel.php';
	include '../Include/UserValidate.php';

	if ( (!empty($_POST['textUser'])) &&
			(!empty($_POST['textNome'])) &&
			(!empty($_POST['textSobrenome'])) &&
			(!empty($_POST['textEmail'])) &&
			(!empty($_POST['textIdade'])) &&
			(!empty($_POST['pwdSenha'])) ) 
	{
		$erros = array();
		if (!UserValidate::testarIdade($_POST['textIdade'])) {
			$erros[] = 'Idade inválida!';
		}
		if (!UserValidate::testarEmail($_POST['textEmail'])) {
			$erros[] = 'Email inválido!';
		}

		if (count($erros) == 0) {
			$user = new UserModel();

			$user->user = $_POST['textUser'];
			$user->nome = $_POST['textNome'];
			$user->sobrenome = $_POST['textSobrenome'];
			$user->idade = $_POST['textIdade'];
			$user->pasword = $_POST['pwdSenha'];

			// echo "Usuário $user->user criado com sucesso!";
			$sucesso = "Usuário $user->user criado com sucesso!";
			require '../View/UserView.php';
		}

	}else{
		$erro = "Informe todos os campos!";
		require '../View/UserView.php';

	}
 ?>
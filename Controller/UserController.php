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
		$user->email = $_POST['textEmail'];
		$user->password = $_POST['pwdSenha'];

		$variavel = "variavel";
		echo "<script>console.log( 'Debug Object:".$variavel." ' );</script>";

		header("location:../View/UserViewResult.php?".
			"user=$user->user&".
			"mail=$user->email");
			// $sucesso = "Usuário $user->user criado com sucesso!";
			// require '../View/UserView.php';
	}else{
		$err = serialize($erros);
		header("location:../View/UserViewError.php?".
			"erros=$err");

	// $erro = "Informe todos os campos!";
	// require '../View/UserView.php';

	}

}
?>
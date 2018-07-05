<?php

	require_once 'classes/classUsers.php';

	$classUsers= new classUsers();

	if(isset($_POST['insert'])){
		$classUsers->setName($_POST['name']);
		$classUsers->setEmail($_POST['email']);
		$classUsers->setPassword($_POST['password']);
		$classUsers->setType($_POST['type']);

	if($classUsers->insert()==1){
		echo "aqui";
		$result = "Usuario cadastrado";
	}else{
		$error="Erro ao inserir";
	}

	}

?>

<!DOCTYPE html>
<html>


<head>
	<title>cadastro</title>
</head>
<body>
<form action="adicionauser.php" method="post">
  Nome: <input type="text" name="name"><br>
  email: <input type="text" name="email"><br>
  senha: <input type="text" name="password"><br>
  <input type=hidden name="type" value="3">

  <button type="submit" name="insert">enviar</button>
</form>

</body>
</html>
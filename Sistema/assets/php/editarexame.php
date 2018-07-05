<?php

	require_once 'classes/classUsers.php';
	require_once 'classes/classProcedures.php';
	require_once 'classes/classTests.php';

$classTests = new classTests();
$classTests = new classProcedures();
$classTests = new classUsers();


	if(isset($_POST['edit'])){
		$classTests->setUser_id($_POST['user_id']);
		$classTests->setProcedure_id($_POST['procedure_id']);
		$classTests->setDate($_POST['date']);

	if($classTests->edit()==1){
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
	<title>editar exame</title>
</head>
<body>

<form action="editarexame.php" method="post">
  Nome:   						
							<select name="procedure_id">

  <?php 
						$stmt = $classProcedures->index();

						while($row = $stmt->fetch(PDO::FETCH_OBJ)){
							?>
  <option value="<?php echo $row->id; ?>" ><?php echo $row->name ?> </option>
 } ?>
</select>

	Data: <input type="date" value="<?php echo $classTests->date ?>" name="date">
<br>
  <input type=hidden name="user_id" value="1">
  <input type=hidden name="id" value="<?php echo $classTests->id ?>">

  <button type="submit" name="insert">enviar</button>
</form>



</body>
</html>
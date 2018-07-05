<?php

	require_once 'classes/classUsers.php';
	require_once 'classes/classProcedures.php';
	require_once 'classes/classTests.php';


	$classUsers= new classUsers();
	$classProcedures= new classProcedures();
	$classTests= new classTests();

	if(isset($_POST['insert'])){
		$classTests->setUser_id($_POST['user_id']);
		$classTests->setProcedure_id($_POST['procedure_id']);
		$classTests->setDate($_POST['date']);

	if($classTests->insert()==1){
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
	<title>cadastro teste</title>
</head>
<body>
<form action="solicitarexame.php" method="post">
  Nome:   						
							<select name="procedure_id">

  <?php 
$stmt = $classProcedures->index();
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
?>
  <option value="<?php echo $row->id; ?>" ><?php echo $row->name ?> </option>
<?php  } ?>
</select>

	Data: <input type="date" name="date">
<br>
  <input type=hidden name="user_id" value="1">

  <button type="submit" name="insert">enviar</button>
</form>

</body>
</html>
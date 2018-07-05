<?php

	require_once 'classes/classProcedures.php';

	$classProcedures= new classProcedures();

?>

<!DOCTYPE html>
<html>


<head>
	<title>cadastro</title>
</head>
<body>
				

				<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 

  </tr>
  						<?php 
						$stmt = $classProcedures->index();
						while($row = $stmt->fetch(PDO::FETCH_OBJ)){
							echo "oi";
							?>
  <tr>
								<td><?php echo $row->name ?></td>
								<td><?php echo $row->price ?></td>
  </tr>
<?php  } ?>
  
</table>
	
</body>

</html>
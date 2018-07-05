<?php
	function protegerAdmin(){
		if(($_SESSION['type']) != 1){
			session_destroy();
			header('location: http://localhost/web/login.php');
		}

	}

	function protegerOperador(){
		if(($_SESSION['type']) != 2){
			session_destroy();
			header('location: http://localhost/web/login.php');
		}
	}

	function protegerPaciente(){
		if(($_SESSION['type']) != 3){
			session_destroy();
			header('location: http://localhost/web/login.php');
		}
	}

?>
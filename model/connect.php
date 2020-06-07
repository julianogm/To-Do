<?php
	
	$db = mysqli_connect('localhost','root','','todo') or die('Erro ao conectar com o Banco de Dados');

	/*if(isset($_POST['submit'])){
		$task = $_POST['task'];
		if(empty($task)){
			header('location: login.php');
		}
		else {
			mysqli_query($db,"INSERT INTO tasks (task) VALUES ('$task')");
			header('location: login.php');
		}
	}
	if(isset($_GET['apagar'])){
		$id = $_GET['apagar'];
		mysqli_query($db,"DELETE FROM tasks WHERE id=$id");
		header('location: login.php');
	}*/
	
	$tasks = mysqli_query($db, "SELECT * FROM tasks");	
?>
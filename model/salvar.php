<?php 
	session_start();
	
	include 'connect.php';
	$iduser = $_SESSION['idUser'];
	
		$task = $_GET['task'];
		$datetask = $_GET['datetask'];
		$repetir = $_GET['repetir'];
		if(!empty($task) && !empty($datetask) && !empty($repetir)){
			mysqli_query($db,"INSERT INTO tasks (task, fk_idUser, data, recorre) VALUES ('$task', '$iduser', '$datetask', '$repetir')");
		}
	

?>

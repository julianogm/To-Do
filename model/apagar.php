<?php
	
	include 'connect.php';

	$id = $_GET['apagar'];
	mysqli_query($db,"DELETE FROM tasks WHERE id=$id");
	return;
?>

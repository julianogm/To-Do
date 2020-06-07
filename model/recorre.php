<?php 
	session_start();
	
	include 'connect.php';
	$taskid = $_GET['taskid'];
	$recorre = $_GET['adddia'];
	$data = $_GET['data'];
	if($recorre == 2){
		$data2 = date('Y-m-d', strtotime($data . '+ 1 days'));
		//$data2 = date('Y-m-d', strtotime($data . '+ 1 days'));
		mysqli_query($db,"UPDATE tasks set data = '$data2' where id = '$taskid'");
	}
	if($recorre == 3){
		$data2 = date('Y-m-d', strtotime($data . '+ 7 days'));
		mysqli_query($db,"UPDATE tasks set data = '$data2' where id = '$taskid'");
	}
	if($recorre == 1){
		mysqli_query($db,"DELETE FROM tasks WHERE id=$taskid");
	}
?>

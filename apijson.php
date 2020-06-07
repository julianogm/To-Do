<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include ("model/connect.php");

header('Content-Type: application/json');



if(isset($_GET['idUser'])){
		$id = $_GET['idUser'];
		$tasks = mysqli_query($db,"SELECT * FROM tasks WHERE fk_idUser=$id");

		$dbtasks = array();

		while ($row = $tasks->fetch_assoc())  {
			$dbtasks[]=$row;
  		}
  		echo json_encode($dbtasks,JSON_PRETTY_PRINT);
  		echo "\n";

	}
else{
	$tasks = mysqli_query($db,"SELECT * FROM tasks");
		$dbtasks = array();

		while ($row = $tasks->fetch_assoc())  {
			$dbtasks[]=$row;
  		}
  		echo json_encode($dbtasks,JSON_PRETTY_PRINT);
  		echo "\n";

}

/*if(isset($_GET['user'])){
		$iduser = $_GET['user'];
		$users = mysqli_query($db,"SELECT * FROM usuarios WHERE idUser=$iduser");

		$dbusers = array();

		while ( $row = $users->fetch_assoc())  {
			$dbusers=$row;
  		}
  		echo json_encode($dbusers,JSON_PRETTY_PRINT);
  		echo "\n";
	}*/

// $tasks = mysqli_query($db, "SELECT * FROM tasks");	
// $users = mysqli_query($db, "SELECT * FROM usuarios");

 
?>
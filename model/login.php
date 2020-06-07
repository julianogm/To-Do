<?php
session_start();
include 'connect.php';

if(empty($_GET['usuario']) || empty($_GET['senha'])){
		$_SESSION['usuariosenhaerro'] = true;
		header('location: ../index.php');
		exit();
	}

	$usuario=mysqli_real_escape_string($db, $_GET['usuario']);
	$senha=mysqli_real_escape_string($db, $_GET['senha']);
	$senhacript = md5($senha);

	

	$result = mysqli_query($db,"SELECT loginUser, idUser from usuarios where loginUser= '$usuario' and pwdUser = '$senhacript'");
	$row = mysqli_fetch_assoc($result);

	$autentica = mysqli_num_rows($result);

	if($autentica){
		//if(strcmp($senhacript,$autentica["$pwdUser"]){
				$_SESSION['usuario'] = $usuario;
				$_SESSION['idUser'] = $row["idUser"];
	}
	else{
			$_SESSION['usuariosenhaerro'] = true;
			header('location: ../index.php');
			exit();
	}
	//}
?>
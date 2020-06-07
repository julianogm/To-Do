<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	include 'connect.php';

	$email="";
	$usuarioReg="";
	$erros = 0;


	$email = mysqli_real_escape_string ($db, trim($_GET['email']));
	$usuarioReg = mysqli_real_escape_string($db, trim($_GET['usuario']));
	$senhaReg = mysqli_real_escape_string ($db, trim($_GET['senhanova']));
	$senhaReg2 = mysqli_real_escape_string ($db, trim($_GET['senhanova2']));

	$validaemail = mysqli_query($db, "SELECT * FROM usuarios WHERE emailUser = '$email'");
	$row2 = mysqli_fetch_assoc($validaemail);

	$validauser = mysqli_query($db, "SELECT * FROM usuarios WHERE loginUser = '$usuarioReg'");
	$row = mysqli_fetch_assoc($validauser);

	
	if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$erros = 1;
		$_SESSION['emailvazio'] = true;
		//header('location: ../view/cadastro.php');
	}
	elseif(empty($usuarioReg)) {
		$erros = 1;
		$_SESSION['usuariovazio'] = true;
		//header('location: ../view/cadastro.php');
	}
	
	elseif(empty($senhaReg) || strlen($senhaReg2)==0) {
		$erros = 1;
		$_SESSION['senhavazio'] = true;
		//header('location: ../view/cadastro.php');
	}
	elseif($senhaReg != $senhaReg2) {
		$erros = 1;
		$_SESSION['senhasdif'] = true;
		//header('location: ../view/cadastro.php');
	}
	elseif($row2['emailUser'] != $email){
		$erros = 1;
		$_SESSION['email_n_cadastrado'] = true;
		//header('location: ../view/cadastro.php');
	}
	elseif($row['loginUser'] != $usuarioReg){
		$erros = 1;
		$_SESSION['usuario_n_existe'] = true;
		//header('location: ../view/cadastro.php');
	}
	
	
	if($erros == 0){
        
        
		$senhacrip = md5($senhaReg);
		$codconfirm = rand();
		

		$usernamecript = base64_encode($usuarioReg);
		$codcript = base64_encode($codconfirm);
		
		
		include 'testeemail.php';
		/*if(mail($email,"Confirmação de cadastro JUST DO IT",$message,"From: To Do List")){
			$_SESSION['confirmar_email'] = true;
		}else{
			$_SESSION['erro_confirmar_email'] = true;
			header('location: ../index.php');
		}*/
        
        $sql = "INSERT INTO usuarios (emailUser, loginUser, pwdUser, confirmado, codconfirma) VALUES ('$email', '$usuarioReg', '$senhacrip', '0', $codconfirm)";
		if($db->query($sql) === true){
			$_SESSION['status_cadastro'] = true;
		}

		$db->close();
		header('location: ../index.php');
	}
	else{
		header('location: ../index.php');
	}
	
?>
	
?>
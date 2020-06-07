<?php

//if(isset($_GET['usuario']) && isset($_GET['senha'])){
	if(isset($_GET['loginBtn'])){
		include ("../model/login.php");
		header ('location: ../view/todo.php');
	}
//if(isset($_GET['email']) && isset($_GET['usuarioReg']) && isset($_GET['senhaReg']) && isset($_GET['senhaReg2'])){
	if(isset($_GET['regBtn'])){	
		include ("../model/cadastrar.php");
		//if(isset($_SESSION['status_cadastro']))	
		//	header ('location: ../index.php');
		//else
		//	header('location: ../view/cadastro.php');
	}

	if(isset($_GET['taskbtn'])){
		include ("../model/salvar.php");
		header('location: ../view/todo.php');
	}

	if(isset($_GET['apagar'])){
		include ("../model/apagar.php");
		header ('location: ../view/todo.php');
	}

	if(isset($_GET['adddia'])){
		include ("../model/recorre.php");
		header ('location: ../view/todo.php');
	}

	if(isset($_GET['alterasenha'])){
		include ("../model/mudasenha.php");
		header ('location: ../index.php');
	}
?>
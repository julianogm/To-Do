<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>To Do List</title>
    </head>
    <body style="background:url(../img/to-do.jpg) no-repeat center fixed; background-size: cover;">
    	
    	<div class="box font-weight-bold container-fluid text-center" style = "color:#00334d; background: transparent !important; position: absolute; left: 0%; top: 10%; font-size: 40px;">JUST DO IT</div>
	
        <div class="box font-weight-bold container-fluid text-center" style="position: absolute; left: 0%;top: 30%;">
        	<?php include 'erros.php';?>	
	        <form action="../control/controller.php" method="GET" style="font-size: 20px;">
	            <div class="field">
	                <div class="control">
	                    <input name="email" type="text" placeholder="Insira seu Email">
	                </div>
	            </div>

	            <div class="field">
	                <div class="control">
	                    <input name="usuario" type="usuario" placeholder="Insira seu nome de Usuario">
	                </div>
	            </div>
	            <div class="field">
	                <div class="control">
	                    <input name="senhanova" type="password" placeholder="Insira uma senha nova">
	                </div>
	            </div>
	            <div class="field">
	                <div class="control">
	                    <input name="senhanova2" type="password" placeholder="Repita a senha nova">
	                </div>
	            </div>
	            <button class="btn btn-info" name="alterasenha">Alterar Senha</button>
	            <a href="../index.php" class="btn btn-info">Voltar</a>
	        </form>
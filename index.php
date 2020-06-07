<?php
        session_start(); 
?>

<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>To Do List</title>
    </head>
    <body style="background:url(img/to-do.jpg) no-repeat center fixed; background-size: cover;">
    	
    	<div class="box font-weight-bold container-fluid text-center" style = "color:#00334d; background: transparent !important; position: absolute; left: 0%; top: 10%; font-size: 40px;">JUST DO IT</div>
	
        <div class="box font-weight-bold container-fluid text-center" style="position: absolute; left: 0%;top: 30%;">
        	<?php include 'view/erros.php';?>	
	        <form action="control/controller.php" method="GET" style="font-size: 20px;">
	            <div class="field">
	                <div class="control">
	                    <input name="usuario" type="text" placeholder="Usuário...">
	                </div>
	            </div>

	            <div class="field">
	                <div class="control">
	                    <input name="senha" type="password" placeholder="Senha...">
	                </div>
	            </div>
	            <button class="btn btn-info" name="loginBtn">Entrar</button>
	            <a href="view/cadastro.php" class="btn btn-info">Cadastrar-se</a>
	        </form>
	        <a class="text-center font-weight-bold" href="view/alterarsenha.php" style="font-size: 10px">Esqueci Minha Senha</a>
	        <?php include 'view/erros.php';?>
        
        </div>
        

    </body>
</html>
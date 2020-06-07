<?php
	session_start();
	if(!$_SESSION['idUser']){
		header('location: ../index.php');
		exit();
	}
	include '../model/connect.php';
?>

<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<title>To Do List</title>

	</head>
	<body style="background:url(../img/to-do.jpg) no-repeat center fixed; background-size: cover;">
		
		<div>
			
			<div class="font-weight-bold container-fluid text-center" style="color: #00334d; background: transparent !important; margin: 15px; font-size: 45px">

				<?php echo $_SESSION['usuario'];?>
				<a href="../model/logout.php" class="badge badge-pill badge-info" style="font-size: 14px; ">SAIR</a>
			</div>

			<p></p>
			
			<form class="form-group justify-content-center container" method="GET" action="../control/controller.php">

				<div class="input-group">
					<input type="text" name="task" class="task_input form-control" placeholder="Tarefa...">	
					<input type="date" name="datetask" class="task_input form-control d-inline-flex">	
					<select class="custom-select" id="inputGroupSelect01" name="repetir">
						<option selected>Repetir...</option>
						<option value="1">Nao Repetir</option>
						<option value="2">Repetir Diariamente</option>
						<option value="3">Repetir Semanalmente</option>
					</select>
					<span class="input-group-btn">
						<button id="myBtn" type="submit" class="btn btn-primary" name="taskbtn">Adicionar Tarefa</button>
					</span>
				</div>
				
			</form>
			
			<div id="lista">
			<?php 
				include 'imprime.php';
			?>
			</div>

		</div>
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$('#lista').load('imprime.php')
			}, 2000);
		});
	</script>
	</body>
	<!--<footer class="footer fixed-bottom">
		<div class="text-center">
			<a href="../apijson.php?idUser=<?php echo $_SESSION['idUser']; ?>" class="badge" style="color: white; font-size: 14px">Get Json</a>
		</div>
	</footer>-->
</html>
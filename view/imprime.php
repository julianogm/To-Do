
<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

include '../model/connect.php';

$iduser = $_SESSION['idUser'];
while ($row = mysqli_fetch_array($tasks)) { 
	if($iduser == $row['fk_idUser']){
	?> 
			<h6 class="container">
				<div class="list-group">
					<!--div class="" style="padding: 2px">
						<a class="" style= "color: white"><?php echo date('d/m/Y',strtotime($row['data']));?></a>
						<a href="../control/controller.php?adddia=<?php echo $row['recorre'];?> && 
							taskid=<?php echo $row['id']; ?> && data=<?php echo $row['data']; ?>" 
							class="badge badge-success" style="font-size: 14px">Feito</a>
					</div>-->
					<div class="list-group-item justify-content-between d-flex" style="padding: 1px">

						
						<div>
							<b id="taskdate" name="data" style="font-size: 15px"><?php echo date('d/m/Y',strtotime($row['data']));?></b>
						</div>
						<div>
							<b id="taskid" name="task" style="font-size: 15px"><?php echo $row['task'];?></b>
						</div>
						<div>
							<a href="../control/controller.php?adddia=<?php echo $row['recorre'];?> && 
								taskid=<?php echo $row['id']; ?> && data=<?php echo $row['data']; ?>" 
								class="badge badge-success" style="font-size: 15px">Feito</a>
							<a href="../control/controller.php?apagar=<?php echo $row['id']; ?>" class="badge badge-danger" style="font-size: 15px">Apagar</a>
						</div>
						<!-- <a href="apagar.php?apagar=<?php echo $row['id']; ?>" class="badge badge-success" style="font-size: 14px">&#10003;</a>
						-->
					</div>
				</div>
			</h6>
<?php }}	?>
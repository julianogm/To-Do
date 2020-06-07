<?php
include 'connect.php';

$username = base64_decode($_GET['username']);
$codigo = base64_decode($_GET['codigo']);

while ($row = mysqli_fetch_array($tasks)){
	if($username == $row['loginUser']){
		$db_cod = $row['codconfirma'];
	}
}
if($codigo == $db_cod){
	mysqli_query($db,,"UPDATE usuarios set confirmado = '1', codconfirma = '0' where username = '$username'");
	$_SESSION['codigo confirmado'] = true;
}
else{
	$_SESSION['codigo invalido'] = true;
}
header ('location: ../index.php');
?>
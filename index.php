<?php 
include 'database.php';
if(isset($POST['valider'])){
	if(!empty($POST['pseudo']) && !empty($POST['password']) && !empty($POST['datebirth'])){
	
	}else{
		echo "Veuillez compléter tous les champs..."; 
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="center">
	<form action="" method="POST">
	<p>Bienvenue sur le forum (API Rest)</p>
	<input type="text" name="email" placeholder="email"></br>
	<input type="password" name="password" placeholder="mot de passe"></br>
	<input type="date" name="datebirth" placeholder="date de naissance"></br>
	<input type="submit" name ="valider">
	</form>
	</div>
</body>
</html>
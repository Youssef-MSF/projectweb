<!DOCTYPE html>
<html>
<head>
	<title>Espace administrateur</title>
	<link rel="stylesheet" type="text/css" href="adminLoginCss.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
	<?php
		if(!empty($_GET["email"]) && $_GET["email"]=="false") echo "<h3>Email uncorrect!!</h3>";
		elseif(!empty($_GET["email"]) && $_GET["password"]=="false") echo "<h3>Password uncorrect!!</h3>";
		else echo "<h3>Administrateur</h3>";
	?>
<!--<h3>Administrateur</h3>-->
<form method="POST" action="traitementAdmin.php">
	<input type="email" name="email" placeholder="Tapez votre email" value="admin@gmail.com" style="color: black;">
	<input type="password" name="password" placeholder="Tapez votre password" value="admin" style="color: black;">
	<input type="submit" name="submit" value="Entrer"><br>
	<a href="modifierAdmin.php">Modifier mon compte!!</a>
</form>
</div>
</body>
</html>

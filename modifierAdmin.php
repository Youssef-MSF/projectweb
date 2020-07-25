<!DOCTYPE html>
<html>
<head>
	<title>Modifier le compte</title>
	<link rel="stylesheet" type="text/css" href="modifierAdminCss.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div>
	<?php
        if(!empty($_GET['success']) && $_GET['success']=="true") echo "<h3>Opération effectué!!</h3>";
        elseif(!empty($_GET['password']) && $_GET['password']=="false") echo "<h3>Mode pass uncorrect!!</h3>";
        else echo "<h3>Administrateur</h3>";
	?>
<!--<h3>Administrateur</h3>-->
<form method="POST" action="modifierAdminT.php">
	<input type="email" name="Nemail" placeholder="Tapez votre nouveau email">
    <input type="password" name="Npassword" placeholder="Tapez votre nouveau password">
    <input type="password" name="Apassword" placeholder="Tapez votre ancien password">
    <input type="submit" name="submit" value="Modifier">
    <a href="adminLogin.php">Login!!</a>
</form>
</div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$email = htmlspecialchars($_POST['email']);
	$password1 = $_POST['Password1'];
	$password2 = $_POST['Password2'];
	if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password1) && !empty($password2)) {
		if ($password1 == $password2) {
			$connexion = mysqli_connect("localhost", "root", "", "projetweb");
			if (!empty($connexion)) {
				$nom = mysqli_real_escape_string($connexion, $nom);
				$prenom = mysqli_real_escape_string($connexion, $prenom);
				$email = mysqli_real_escape_string($connexion, $email);
				$password = mysqli_real_escape_string($connexion, $password1);
				$prepstmt = mysqli_stmt_init($connexion);
				if (!empty($prepstmt)) {
					$sql = "SELECT * FROM client WHERE mail=?;";
					if (mysqli_stmt_prepare($prepstmt, $sql)) {
						mysqli_stmt_bind_param($prepstmt, "s", $email);
						mysqli_stmt_execute($prepstmt);
						$result = mysqli_stmt_get_result($prepstmt);
						if (is_null(mysqli_fetch_array($result))) {
							$sql = "INSERT INTO client(nom,prenom,mail,password) VALUES(?,?,?,?);";
							if (mysqli_stmt_prepare($prepstmt, $sql)) {
								$hashpass = password_hash($password, PASSWORD_DEFAULT);
								mysqli_stmt_bind_param($prepstmt, "ssss", $nom, $prenom, $email, $hashpass);
								mysqli_stmt_execute($prepstmt);
								header("location:login.php");
							} else echo ("Error");
						} else header("location:signup.php?nom=$nom&prenom=$prenom&email=$email&exist=oui");
					} else echo ("Error");
				} else echo ("Error");
			} else echo ("connexion avec la base de donné n'est pas effectué!!");
		} else header("location:signup.php?nom=$nom&prenom=$prenom&email=$email&match=notmatch");
	} else header("location:signup.php?nom=$nom&prenom=$prenom&email=$email");
}
